

import json
import os
from fastapi import FastAPI, Body
from fastapi.responses import JSONResponse
from google import genai  

app = FastAPI()

# Secure API Key (Replace with an environment variable in production)
api_key = "AIzaSyDjC5DNEpyJtCxziKK8_IwfifXsyD1qTlk" 
client = genai.Client(api_key=api_key)  

# JSON file path
json_file = "generated_responses.json"

# ✅ Ensure JSON file is initialized properly
if not os.path.exists(json_file) or os.stat(json_file).st_size == 0:
    with open(json_file, "w", encoding="utf-8") as file:
        json.dump([], file)  # Initialize with empty JSON list


@app.post("/generate")
async def generate(data: dict = Body(...)):
   
    course_text = data.get("text", "").strip()

    
    # Define prompt for AI
    prompt = f"""
    You are an expert in English education. Summarize the following English course content:
    
    **Content:** {course_text}
    
    **Summary:**
    """

    try:
        # Generate response from Gemini
        response = client.models.generate_content(
            model="gemini-2.0-flash-exp",
            contents=[{"text": prompt}]
        )

        print("Gemini Raw Response:", response)  # Debugging print

        # Ensure response is valid
        if not response or not hasattr(response, "text") or not response.text.strip():
            return JSONResponse(content={"error": "No valid response from Gemini API."}, status_code=500)

        gemini_response = response.text.strip()

        # ✅ Save data to JSON file
        new_entry = { "User Input": course_text, "Model Response": gemini_response}

        # Read existing JSON data
        with open(json_file, "r", encoding="utf-8") as file:
            try:
                data = json.load(file)
            except json.JSONDecodeError:
                data = []  # If file is corrupted, reset to empty list

        # Append new entry
        data.append(new_entry)

        # Write back to JSON file
        with open(json_file, "w", encoding="utf-8") as file:
            json.dump(data, file, indent=4, ensure_ascii=False)

        return JSONResponse(content={"response": gemini_response})

    except Exception as e:
        return JSONResponse(content={"error": f"AI request failed: {str(e)}"}, status_code=500)

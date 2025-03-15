# Import FastAPI components for building the web server and handling HTTP requests
from fastapi import FastAPI, Request, HTTPException
from fastapi.responses import JSONResponse, HTMLResponse
from fastapi.staticfiles import StaticFiles
from fastapi.templating import Jinja2Templates

# Import the Google Generative AI library
import google.generativeai as genai  

# Create an instance of the FastAPI application
app = FastAPI()

# Configure the API key using the 'configure' function
api_key = "AIzaSyDjC5DNEpyJtCxziKK8_IwfifXsyD1qTlk"  # Replace with your actual API key
genai.configure(api_key=api_key)

# Define an HTTP POST endpoint at "/generate" that accepts text input and returns a generated response
@app.post("/generate")
async def generate(request: Request):
    # Parse the incoming JSON payload
    data = await request.json()
    text_to_process = data.get("text")
    
    if not text_to_process:
        raise HTTPException(status_code=400, detail="No text provided.")
    
    # Process the text using the Gemini API using the correct text generation function
    response = genai.text.generate(
        prompt=text_to_process,
        model="gemini-2.0-flash-exp",  # Use the desired Gemini model
        max_output_tokens=150         # Adjust as needed
    )
    
    # Return the Gemini API response as JSON
    return JSONResponse({"result": response.text})

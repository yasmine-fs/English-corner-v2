<?php
header('Content-Type: application/json');

// Retrieve and normalize the incoming message
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$normalizedMessage = strtolower($message);

// Define keyword-based responses
$responses = [
    'hello'             => 'Hi there! How can I help you today?',
    'hi'                => 'Hello! What can I do for you?',
    'course summary'    => 'This course provides an introduction to our e-learning platform, covering enrollment, content delivery, and assessments.',
    'what is this platform' => 'Our platform is an online e-learning system where students enroll in courses, access materials, and take quizzes.',
    'thanks'            => "You're welcome! If you have more questions, feel free to ask."
];

// Default response if no keywords match
$responseText = "I'm sorry, I didn't understand that. Could you please rephrase?";

// Check for matching keywords in the message
foreach ($responses as $keyword => $reply) {
    if (strpos($normalizedMessage, $keyword) !== false) {
        $responseText = $reply;
        break;
    }
}

echo json_encode(['response' => $responseText]);

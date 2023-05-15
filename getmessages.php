<?php
// Read the chat history from the file
$chatFile = 'chat.txt';
$chatHistory = file_get_contents($chatFile);

// Separate each message into an array
$messages = explode(PHP_EOL, $chatHistory);

// Output the chat history
foreach ($messages as $message) {
    echo htmlspecialchars($message) . "<br>";
}
?>

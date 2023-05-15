<?php
// Check if the name and message are set and not empty
if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['message']) && !empty($_POST['message'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $timestamp = date('Y-m-d H:i:s');

    // Format the message with name and timestamp
    $formattedMessage = "[" . $timestamp . "] " . $name . ": " . $message;

    // Append the message to the chat history file
    $chatFile = 'chat.txt';
    file_put_contents($chatFile, $formattedMessage . PHP_EOL, FILE_APPEND);
}

// Redirect back to the chatroom page
header('Location: index.html');
exit;
?>

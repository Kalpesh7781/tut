<?php
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    // Save the message to a database or file
    // You should sanitize and validate the message in a real application
    // For simplicity, we will append it to a text file here
    file_put_contents('chatlog.txt', $message . "\n", FILE_APPEND);
}
?>

<?php
$chatlog = file_get_contents('chatlog.txt');
$messages = explode("\n", $chatlog);

foreach ($messages as $message) {
    if (!empty($message)) {
        echo $message . '<br>';
    }
}
?>

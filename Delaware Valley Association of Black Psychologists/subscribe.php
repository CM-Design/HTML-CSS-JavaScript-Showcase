<?PHP

// The message
$message = "line 1\r\nLine 2\r\nLine 3";

// If any of our lines are larger than 70 characters, we should us wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('blahblahblah@example.com', 'My Subject', $message);

?>
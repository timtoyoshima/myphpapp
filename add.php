<html>
<body>
<h1>Add Message</h1>
<?php
include 'db-connect.php';

$name = $_POST['name'];
$message = $_POST['message'];
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();

$query = "INSERT INTO " . DB_TABLE . " VALUES
('$timestamp', '$name ', '$ip', '$message')";

printf("<p>New message: $timestamp, $name, $ip, $message</p>");
if ($mysqli->query($query)) {
    printf("<p>Message was successfully added.</p>");
}
else {
    printf("<p>Message failed to be added: %s</p>", $mysqli->error);
}

?>
<p><a href="index.php">Display all messages</a></p>
</body>
</html>
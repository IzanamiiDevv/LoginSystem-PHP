<?php

include "./db/database.php";

$username = "";
$userpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $userpass = $_POST["pass"];
    echo "$username, $userpass";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username">
        <input type="text" name="pass">
        <input type="submit" value="submit">
    </form>
</body>
</html>
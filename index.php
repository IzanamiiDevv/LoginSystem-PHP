<?php

include "./db/database.php";

$username = "";
$userpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "./src/actions/login.php";

    LognIn((object)[
        'name' => $_POST["username"],
        'password' => $_POST["pass"]
    ],$conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username">
        <input type="text" name="pass">
        <input type="submit" value="submit">
    </form>
    <a href="./pages/signpage.php">Sign In</a>
</body>
</html>
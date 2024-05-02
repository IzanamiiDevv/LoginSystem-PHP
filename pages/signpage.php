<?php

include "./../db/database.php";

$username = "";
$userpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "./../src/actions/signin.php";

    SignIn((object)[
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
    <title>SignIn</title>
</head>
<body>
    <div>
        <form action="signpage.php" method="post">
            <input type="text" name="username">
            <input type="text" name="pass">
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="./../index.php">Log In</a>
</body>
</html>
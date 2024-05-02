<?php
$host = "localhost";
$username = "root";
$password = "test";
$dbname = "userdb";

try {
    $conn = mysqli_connect($host, $username, $password, $dbname);
} catch (mysqli_sql_exeption) {
    echo "Your are not Connected";
    return;
}

echo "<script>console.log(\"Your are Connected\")</script>";

?>
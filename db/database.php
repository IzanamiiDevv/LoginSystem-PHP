<?php

include "./db/dotenv.php";


$env = parseEnv("./.env");
$host = $env["DB_HOST"];
$username = $env["DB_USER"];
$password = $env["DB_PASSWORD"];
$dbname = $env["DB_NAME"];

try {
    $conn = mysqli_connect($host, $username, $password, $dbname);
} catch (mysqli_sql_exeption) {
    echo "Your are not Connected";
    return;
}

echo "<script>console.log(\"Your are Connected\")</script>";

?>
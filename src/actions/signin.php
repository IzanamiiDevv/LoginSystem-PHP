<?php

include "./../../db/database.php";

$username = "";
$userpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    SignIn((object)[
        'name' => $_POST["txt"],
        'password' => $_POST["pswd"]
    ],$conn);
}

function SignIn($data, $conn) {
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    $usernames = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $usernames[] = $row['name'];
    }

    function search($arr, $target) {
        for($i = 0; $i < sizeof($arr); $i++){
            if($arr[$i] == $target){
                return true;
            }
        }
        return false;
    }

    if(search($usernames, $data->name)){

        header("Location: /loginsystem-php/index.php");
        exit(); 
    }

    if(strlen($data->name) > 10){
        header("Location: /loginsystem-php/index.php");
        exit(); 
        return;
    }

    $addQuery = "INSERT INTO `users`(`name`, `password`) VALUES ('$data->name','$data->password')";
    mysqli_query($conn,$addQuery);
    echo "<script>console.log(\"Account Sucessfully Created\")</script>";
    
}

?>
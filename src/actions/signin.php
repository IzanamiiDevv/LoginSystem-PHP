<?php

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
        echo "$data->name Already Exist Please Enter a new one";
        return;
    }

    if(strlen($data->name) > 10){
        echo "$data->name is too long Please Enter a new one";
        return;
    }

    $addQuery = "INSERT INTO `users`(`name`, `password`) VALUES ('$data->name','$data->password')";
    mysqli_query($conn,$addQuery);
    echo "Account Sucessfully Created";
    
}

?>
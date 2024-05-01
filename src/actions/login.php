<?php

function LognIn($data, $conn) {
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    $datas = array();
    while ($row = mysqli_fetch_assoc($result)) {

        $object = (object)[
            'name' => $row['name'],
            'password' =>  $row['password']
        ];

        $datas[] = $object;
    }

    function search($arr, $target) {
        for($i = 0; $i < sizeof($arr); $i++){
            if($arr[$i]->name == $target->name && $arr[$i]->password == $target->password ){
                return true;
            }
        }
        return false;
    }

    if(search($datas, $data)){
        echo "Login!!";
    }
}

?>
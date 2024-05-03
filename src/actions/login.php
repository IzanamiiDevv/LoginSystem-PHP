<?php
include "./../../db/dotenv.php";
include "./../../db/database.php";
$conn = connectDB('./../../.env');
$username = "";
$userpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    LognIn((object)[
        'name' => $_POST["txt"],
        'password' => $_POST["pswd"]
    ],$conn);
}

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
        echo "<script>console.log(\"Your are Now Logged In\")</script>";
    }
}

?>
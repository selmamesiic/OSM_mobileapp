<?php




$db = "online";
$user = $_POST["users"];
$password = $_POST["password"];
$host = "localhost";


$conn = mysqli_connect($host,'amra','amra' ,$db);

if($conn && !empty($user) && !empty($password)){
    $q = "select * from users where users like '$user' and password like '$password'";
    $result = mysqli_query($conn, $q);

    if(mysqli_num_rows($result)>0){
        echo"LOGIN SUCCESSFULL";
        session_start();
        $_SESSION['name'] = $user;
        $_SESSION['time'] = time();
    }else{
        echo"LOGIN FAILED";
    }

}else{
    echo"NOT CONNECTED or SOME FIELDS ARE EMPTY!";    
}


?>
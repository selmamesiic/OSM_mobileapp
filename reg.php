<?php



$db = "online";
$user = $_POST["users"];
$password = $_POST["password"];
$host = "localhost";


$conn = mysqli_connect($host,'root','' ,$db);

if($conn && !empty($user) && !empty($password)){
    $q = "select * from users where users ='$user' and password = '$password'";
    $result = mysqli_query($conn, $q);

    if(mysqli_num_rows($result)>0){
        echo"USER ALLREADY EXISTS";
        
    }else{
        $insert = "INSERT INTO users(users, password) VALUES('$user', '$password')";
        if(mysqli_query($conn,$insert)){
        
            echo 'REGISTERED SUCCESSFULLY';
        }else{
            echo "Error: " . $insert . "" . mysqli_error($conn);
        }
    }

}else{
    echo"NOT CONNECTED or FIELDS ARE EMPTY!";    
}


?>
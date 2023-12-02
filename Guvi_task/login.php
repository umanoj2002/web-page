<?php
$conn = mysqli_connect('localhost', 'root', '','web development');

$uname = $_POST['name'];
$pass = $_POST['password'];
if(empty($uname)){
    echo "User name is required";
}else{
    $sql = "SELECT * FROM web WHERE username='$uname' AND password = '$pass'";

    $result = mysqli_query($conn, $sql);
}

if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $uname && $row['password']===$pass){
        header("Location: profile.php");
    exit();
    }
    else{
        header("Location: profile.html");
    }
}
else{
    header("Location: login.html");
    exit();
}

?>
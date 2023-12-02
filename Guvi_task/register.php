<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','web development');

$txtname = $_POST['username'];
$txtcontact = $_POST['phone'];
$txtemail = $_POST['gmail'];
$txtpassword = $_POST['password'];



$sql = "INSERT INTO `web`(`id`, `username`, `contact`, `gmail`, `password`) VALUES('0','$txtname','$txtcontact','$txtemail','$txtpassword')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	// echo "Contact Records Inserted";
    header("Location: login.html");
    exit();
}

?>

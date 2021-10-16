<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$con_pass=$_POST['confirm_password'];

if($pass != $con_pass){
    $_SESSION['error_msg']="Passwor and confirmPasssword dint match";
    header("Location: registration.php");
}


$conn=mysqli_connect('localhost','root','','sms');
$sql1="SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($conn,$sql1);
$rowcount=mysqli_num_rows($result);

if($rowcount ==1){
    $_SESSION['error_msg1']="Account already esixt please login";
    header("Location: registration.php");
}
else{
    $sql="INSERT INTO users VALUES(NULL,'$name','$email','$pass')";
    if(mysqli_query($conn,$sql)){
        $_SESSION['reg_msg']="Registration successfully.please login";
        header("Location: login.php");
}

}




?>
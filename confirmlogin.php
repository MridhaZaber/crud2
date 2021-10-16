<?php
$email=$_POST['email'];
$pass=$_POST['password'];
$conn=mysqli_connect('localhost','root','','sms');
$sql="SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==1){
    session_start();
    $_SESSION['login']=true;
    header("Location: index.php");

}
else{
    session_start();
    $_SESSION['error']=true;
    header("Location: login.php");
}





?>
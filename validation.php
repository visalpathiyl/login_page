<?php
 
session_start();
$con=mysqli_connect('localhost','root','1234');
mysqli_select_db($con,mydb);

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from mytable where name='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    header('location:home.php');
}
else
{
     header('location:login.php');
}

?>

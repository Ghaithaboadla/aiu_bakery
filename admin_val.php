<?php
session_start();

$conn=mysqli_connect('localhost','root','','bakery_db');
$name=$_POST['user'];
$password=$_POST['pass'];

$s=" select *from admin where email = '$name' && password ='$password' ";
$result=mysqli_query($conn,$s); 

$num=mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['name']=$name;
    $_SESSION['pass']=$password;
    header('location:admindash.html');
   


}else{
    header('location:admin.php');
    
   


}






?>
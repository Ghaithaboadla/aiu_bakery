<?php
session_start();
$_user_id=$_SESSION['user_id'];
$conn=mysqli_connect('localhost','root','','bakery_db');
$name=$_POST['user'];
$password=$_POST['pass'];

$s=" select *from users where name = '$name' && pass ='$password' ";
$result=mysqli_query($conn,$s); 
$arr=array();

$num=mysqli_num_rows($result);

if($num==1)
{
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];


    $_SESSION['name']=$name;
    $_SESSION['cart']=$arr;
    header('location:user_dash.php');
   


}else{
    header('location:index.php');
    
   


}






?>
<?php
session_start();
// header('location:index.html');

$conn=mysqli_connect('localhost','root','','bakery_db');
$name=$_POST['user'];
$password=$_POST['pass'];

$s=" select *from users where name = '$name' ";
$result=mysqli_query($conn,$s); 

$num=mysqli_num_rows($result);

if($num==1)
{
    echo "Username already taken" ;

}else{
    $reg="insert into users(name , pass) values ('$name' , '$password') ";
    mysqli_query($conn,$reg);
    echo " Regestration successful";
}






?>
<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location:index.html');
}


?>

<html>
    <head>
        <title>
            Home page
        </title>
    </head>
    <body>
        
    <H1>Welcome<?php echo  $_SESSION['name']; ?> </H1>
    </body>
</html>
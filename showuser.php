<?php

@include 'config.php';




?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

   


   <?php

   $select = mysqli_query($conn, "SELECT * FROM users");
   
   ?>



<div class="product-display" style="background-color:white;">
      <table class="product-display-table">
         <thead>
         <tr>
         <th>Email</th>
            <th>Password</th>
         </tr>
         
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
         <td style="color:black"><?php echo $row['name']; ?></td>
         <td style="color:black" ><?php echo $row['pass']; ?></td>   
         </tr>
         
      <?php } ?>
      </table>
   </div>

</div>
</body>
</html>


<?php
session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];


   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AIU Bakery</title>

    <!-- swiper link  -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- cdn icon link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- custom css file  -->
    <link rel="stylesheet" href="stylee.css" />
</head>
<body>
<header class="header">
      <div class="logoContent">
        <a href="#" class="logo"><img src="images/logo2.PNG" alt="" /></a>
        <h1 class="logoName">AIU Bakery</h1>
      </div>

      <nav class="navbar">
        <a href="user_dash.php">home</a>
        <a href="products.php">product</a>
        <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart` ") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span></span> </a>
        <p>
        <!-- <?php echo  $_SESSION['name']; ?> -->
        </p>

      </nav>
    </header>
      <section class="home" id="home">
      <div class="homeContent">
        <h2>Welcome to AIU Bakery</h2>
      </div>
    </section>
   


<?php include 'config.php'; ?>

<div class="container">

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

      <!-- <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `productss`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?> -->

      <form action="" method="post">
         <div class="box"



">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>"  alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="number" placeholder="enter product quantity" name="product_quantity" class="box">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
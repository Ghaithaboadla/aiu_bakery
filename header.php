<header class="header">

   <div class="flex">

      <a href="#" class="logo">Aiu Bakery</a>

      <nav style="position: absolute;
  top:99%; left:0; right:0;
  background-color: var(--blue);
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
  transition: .2s linear;">
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
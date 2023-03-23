<!-- header section starts      -->

<header class="header">

    <a href="#" class="logo"> <span>Mr</span>FITNESS</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="shop.php">shop</a>
        <a href="features.php">features</a>
        <a href="pricing.php">pricing</a>
        <a href="trainer.php">trainers</a>
        <a href="review.php">review</a>
    </nav>
    <div class="icons">
        <?php
        $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
        $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
        ?>
        <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
        <?php
        $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        $cart_num_rows = mysqli_num_rows($select_cart_count);
        ?>
        <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
        <div id="user-btn" class="fas fa-user"></div>
    </div>

    <div class="account-box">
        <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
        <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
        <a href="logout.php" class="delete-btn">logout</a>
    </div>

</header>

<!-- header section ends     -->
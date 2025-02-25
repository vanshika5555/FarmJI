<!DOCTYPE html>
<html lang="en">
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
<!--navbar-->
  <header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>


  <a href="#" class="logo"> FARMJI<span>.</span></a>

  <nav class="navbar">
    <a href="index.php">Home</a>
    <a href="index.php #courses">Courses</a>
    <a href="index.php #about-us">About Us</a>
    <a href="index.php #our-vision">Our Vision</a>
    <a href="index.php #contact">Contact Us</a>
    
  </nav>

  <div class="icons">
    <a href="login.php"><i class="ri-account-circle-line"></i></a>
    <a href="product.php"><i class="ri-shopping-cart-2-fill"></i></a>
  </div>

</header>
  
<section>
<h1 class="inventory-heading" style="text-align: center; font-family: Poppins, serif;
  font-weight: 200;
  font-style: normal; font-size: 40px; margin-top: 120px;">
  INVENTORY</h1>
<?php
require 'config.php';
$sql="SELECT * FROM product";
$result=mysqli_query($conn, $sql);
?>
<div class="container" style="text-align: center; font-family: Poppins, serif;
  font-weight: 200;
  font-style: normal; font-size: 36px; margin-bottom: 50px;">
  <div class="row">
    <?php
    while($row=mysqli_fetch_array($result)){
    ?>
    <div class="col-lg-4 mt-3 mb-3">
      <div class="card-deck">
          <img src="<?= $row['product_image']; ?>" class="card-img-top" height="320">
          <h5 style="text-align: center; font-family: Poppins, serif;
  font-weight: 300;
  font-style: normal; font-size: 20px;" class="card-title">Product : <?= $row['product_name']; ?></h5>
          <h3 style="text-align: center; font-family: Poppins, serif;
  font-weight: 300;
  font-style: normal; font-size: 25px;"> Price: <?= number_format(floatval($row['product_price'])); ?>/-</h3>
          <a style="text-align: center; font-family: Poppins, serif;
  font-weight: 200;
  font-style: normal; font-size: 21px; background-color: #B0E0AB" href="/farmji-2/farmji/expert/order.php" class="btn btn-block btn-lg">Buy Now</a>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
</section>
        
<!--footer-->
<footer class="footer">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="footer-container">
        <div class="footer-about">
            <h2>About FarmJI</h2>
            <p>Unlocking Farming Potential. Our courses teach farmers to cultivate new crops, boosting yields and income. Join our community and grow a better future!</p>
        </div>
        <div class="footer-links">
            <h2>Quick Links</h2>
            <ul>
            <li><a href="index.php #home">Home</a></li>
                <li><a href="index.php #courses">Our Courses</a></li>
                <li><a href="index.php #contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h2>Contact Us</h2>
            <ul>
                <li>Email: support@farmJI.com</li>
                <li>Phone: 91+ 7310XXXXXX</li>
                <li>Address:New Delhi</li>
            </ul>
        </div>
        <div class="footer-social">
            <h2>Follow Us</h2>
            <ul>
                <li>
                    <a href="#" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                                            </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 FarmJI. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
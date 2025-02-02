<?php
require 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $p_name = $_POST['pName'];
    $p_price = floatval($_POST['pPrice']); // Convert price to a numeric value
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES['pImage']["name"]);
    move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);

    $sql = "INSERT INTO product (product_name, product_price, product_image) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sds", $p_name, $p_price, $target_file);
    if (mysqli_stmt_execute($stmt)) {
        $msg = "Product Added to the database Successfully!";
    } else {
        $msg = "Failed to add the product!";
    }
    mysqli_stmt_close($stmt);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product information</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 
<header>

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>


<a href="#" class="logo"> FARMIZ<span>.</span></a>

<nav class="navbar">
<a href="homepage.php">Home</a>
<a href="homepage.php #courses">Courses</a>
<a href="homepage.php #about-us">About Us</a>
<a href="homepage.php #our-vision">Our Vision</a>
<a href="homepage.php #contact">Contact Us</a>

</nav>

<div class="icons">
<a href="#"><i class="ri-account-circle-line"></i></a>
<a href="index.php"><i class="ri-shopping-cart-2-fill"></i></a>
</div>

</header>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 bg-list mt-5 rounded">
      <div class="box-header">
        <h2 class="text-center p-2" style="font-size: 23px;
  font-weight: 200; font-style: normal; font-family: Poppins, serif;">Add Product Information</h2>
      <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
        <div class="form-group">
          <input style="font-size: 16px;
  font-weight: 300; font-style: normal; font-family: Poppins, serif;" type="text" name="pName" class="form-control" placeholder="Product Name" required>
        </div>
        <div class="form-group">
          <input style="font-size: 16px;
  font-weight: 300; font-style: normal; font-family: Poppins, serif;" type="text" name="pPrice" class="form-control" placeholder="Product Price" required>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" name="pImage" class="custom-file-input" id="customFile" required>
            <label style="font-size: 16px;
  font-weight: 300; font-style: normal; font-family: Poppins, serif;" for="customFile" class="custom-file-label"> Choose Product Image</label>
          </div>
        </div>
        <div class="form-group">
          <input style="font-size: 16px;
  font-weight: 300; font-style: normal; font-family: Poppins, serif; background-color:#B0E0AB; margin-top: 20px"type="submit" name="submit" class="btn btn-block" value="Add"> 
        </div>
        <div class="form-group">
          <h4 class="text-center"><?= $msg; ?></h4>
        </div>
      </form>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6 mt-3 p-4 bg-light rounded">
      <a style="font-size: 16px;
  font-weight: 300; font-style: normal; font-family: Poppins, serif; background-color:#B0E0AB;" href="index.php" class="btn btn-block btn lg">Go to product page</a>
    </div>
  </div>
</div>

<!--footer-->
<footer class="footer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="footer-container">
        <div class="footer-about">
            <h2>About Farmiz</h2>
            <p>Unlocking Farming Potential. Our courses teach farmers to cultivate new crops, boosting yields and income. Join our community and grow a better future!</p>
        </div>
        <div class="footer-links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Courses</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h2>Contact Us</h2>
            <ul>
                <li>Email: support@farmiz.com</li>
                <li>Phone: 91+ 9875656354</li>
                <li>Address: C-123, Sector 22, Noida, Delhi - 201301</li>
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
        <p>&copy; 2024 Farmiz. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
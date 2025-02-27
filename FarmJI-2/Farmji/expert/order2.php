<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- already fill hui detail -->
<div class="container" style="margin-top: 30px;">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <h2 class="text-center p-2" 
                style="font-family: 'Times New Roman', Times, serif; color: #345b11;">
                Fill the Detail to Complete Your Order
            </h2>
                <br>
                <h3>Course Detail:</h3>
                <br>

                <table class="table table-bordered" width="500px" style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">
    <tr>
        <th>Expert Name:</th>
        <td>Harbeer chaudhary (3 years business)</td>
        <td rowspan="4" class="text-center" style="text-align: center;">
            <img src="images/Indian Farmer Marathi.jpg" width="250" />
        </td>
    </tr>
    <tr>
        <th>Course Price:</th>
        <td>Rs.1000/-</td>
    </tr>
    <tr>
        <th>GST:</th>
        <td>Rs.180/-</td>
    </tr>
    <tr>
        <th>Total Price:</th>
        <td>Rs.1180/-</td>
    </tr>
</table>
<br>
<br>
<!-- cutomer ki detail -->
<h4>Enter Your Detail:</h4>
<form action="pay.php" method="post" accept-charset="utf-8">
    <input type="hidden" name="course_name" value="">
    <input type="hidden" name="course_price" value="">
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Enter your e-mail" required>
    </div>
    <div class="form-group">
        <input type="tel" name="phone" class="form-control" placeholder="Enter your phone" required>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-danger btn-lg" value="click to pay : Rs. 1180/-" >
    </div>
</form>

</div>
    </div>
    
</body>
</html>
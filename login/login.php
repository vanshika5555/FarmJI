<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
       <div class="Sign-in-Sign-up">
       <form action="reg.php" method="post" class="sign-in-form">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Username" required>
            </div>


            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <input type="submit" value="Login" class="btn"> 
            <p class="social-text">Or sign in with social platform</p>
            <div class="social-media">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook"></i>
                </a>    
                <a href="" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </form>
        <form action="regi.php" method="post" class="sign-up-form">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Username" required>
            </div>
            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email"placeholder="email" required>
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <input type="submit" value="Sign up" class="btn"> 
            <p class="social-text">Or sign in with social platform</p>
            <div class="social-media">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook"></i>
                </a>    
                <a href="" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </form>

     </div>   

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Member of Brand?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quis, nulla sed officia similique commodi?</p>
                <button class="btn" id="sign-in-btn">Sign in</button>
            </div>
            <img src="images/babydoll1.svg" alt="" class="image1">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>New to Brand?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quis, nulla sed officia similique commodi?</p>
                <button class="btn" id="sign-up-btn">Sign up</button>
            </div>
            <img src="images/babydoll2.svg" alt="" class="image2">
        </div>
    </div>

    <script src="login.js"></script>
</body>
</html>
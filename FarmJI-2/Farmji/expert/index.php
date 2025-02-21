<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="homepage.css">
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <script src="homepage.js"></script>    

  <!--navbar-->
  <header>

    <input type="checkbox" name="" id="toggler">
    <label  onclick=showSidebar() for="toggler" class="fas fa-bars" id="menu-icon"></label>


  <a href="#" class="logo"> FARMJI<span>.</span></a>

  <nav >
    <div class="sidebar">
        <ul>
            <li onclick=hideSidebar()><a href="#"><i class="ri-arrow-right-wide-line"></i></a></li>
    <li><a href="#">Home</a></li>
    <li><a href="#courses">Courses</a></li>
    <li><a href="#about-us">About Us</a></li>
    <li><a href="#our-vision">Our Vision</a></li>
    <li><a href="#contact">Contact Us</a></li>
</ul>
    </div>

    <div class="navbar">
    <a href="#">Home</a>
    <a href="#courses">Courses</a>
    <a href="#about-us">About Us</a>
    <a href="#our-vision">Our Vision</a>
    <a href="#contact">Contact Us</a>
    </div>
  </nav>

  <div class="icons">
    <a href="login.php"><i class="ri-account-circle-line"></i></a>
    <a href="product.php"><i class="ri-shopping-cart-2-fill"></i></a>
  </div>

</header>

<section >
    <div class="home-text">
        <img src = "image/welcomeImg.png" alt="">
        <div class="box">
    <h5>Let's, <br>
    Grow together <br>
    Let's Grow better</h5>
    <p>We're introducing you with all advanced methods 
      of growing <br> various fruits vegetables and crops. So
      let's join hands together and grow better</p>
      <div>
  </div>
</section>


<section>
    <div class="courses">
        <h2>Courses</h2>
        <div class="courses-box">
            <img src="image/Avocado.jpeg" alt="course1">
            <div class="course-text">
            <h2 style="font-size: 32px;">Avocado Course</h2>
            <p style="margin-top: 20px;"><strong style="font-size: 18px;">-Learn how to grow Avocado</strong><br>
            Avocado is the most nutritional of all fruits, and it is often recognized as the New World's most essential contribution to human nutrition. Some people enjoy the fruit, while others do not. The pulp is high in proteins (up to 4%) and fat (up to 30%), but low in carbohydrates. Avocados are grown in a variety of locations across the United States.</p>
            <h4>4.7
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star-half-stroke"></i>
            <i class="fa-regular fa-star"></i>
            <br>
            <div class="course-button">
                
            <a href="login.php?redirect=info.html">
                <button class="btn">Explore Course</button>
            </a>

            <a href="/farmji/expert/courses.html">
                <button class="btn">Meet Expert</button>
            </a>
            </div>
        </div>
        </h4>

    </div>

    <div class="courses-box">
        <img src="image/Fish Farming.jpeg" alt="course1">
        <div class="course-text">
        <h2 style="font-size: 32px;">Fish Farming Course</h2>
        <p style="margin-top: 20px;"><strong style="font-size: 18px;">-Learn how to do Fish Farming</strong><br>Fish farming or pisciculture involves commercial breeding of fish, most often for food, in fish tanks or artificial enclosures such as fish ponds. It is a particular type of aquaculture, which is the controlled cultivation and harvesting of aquatic animals such as fish, crustaceans, molluscs and so on, in natural or pseudo-natural environments.</p>
        <h4>3.9
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star-half-stroke"></i>
        <i class="fa-regular fa-star"></i>
        <br>
        <div class="course-button">
        <a href="/farmji-2/farmji/expert/info1.html">
        <button class="btn">Explore Course</button>
        </a>
        <a href="/farmji-2/farmji/expert/courses1.html">
        <button class="btn">Meet Expert</button>
        </a>
        </div>
        </h4>
        </div>
  </div>

  <div class="courses-box">
    <img src="image/Vermicomposting.jpeg" alt="course1">
    <div class="course-text">
    <h2 style="font-size: 32px;">Vermicomposting Course</h2>
    <p style="margin-top: 20px;"><strong style="font-size: 18px;">-Learn how to do Vermicomposting</strong><br>Vermicomposting is a sustainable agriculture practice that follows the principles of organic farming. It is the process of using various species of worms, usually red wigglers, white worms, and other earthworms, to break down organic matter into compost.</p>
    <h4>4.5
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-regular fa-star-half-stroke"></i>
      <br>
      <div class="course-button">
      <a href="/farmji-2/farmji/expert/info2.html">
    <button class="btn">Explore Course</button>
</a>
    <a href="/farmji-2/farmji/expert/courses3.html">
    <button class="btn">Meet Expert</button>
</a>
</div>
    </h4>
    </div>
  </div>

  <div class="courses-box">
    <img src="image/chickenfarm.jpeg" alt="course1">
    <div class="course-text">
    <h2 style="font-size: 32px;">Chicken Farming Course</h2>
    <p style="margin-top: 20px;"><strong style="font-size: 18px;">-Learn how to do Chicken Farming</strong><br>Chicken farming has been practiced for thousands of years, with domesticated chickens originating from the wild jungle fowl of Southeast Asia. Over time, selective breeding has led to the development of numerous breeds, each with unique characteristics suited for various farming purposes.</p>
    <h4>4.0
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-regular fa-star"></i>
      <br>
      <div class="course-button">
      <a href="/farmji-2/farmji/expert/info3.html">
    <button class="btn">Explore Course</button>
</a>
    <a href="/farmji-2/farmji/expert/courses3.html">
    <button class="btn">Meet Expert</button>
</a>
</div>
      </h4>
      </div>
  </div>


  <div class="courses-box">
    <img src="image/Asparagus.jpeg" alt="course1">
    <div class="course-text">
    <h2 style="font-size: 32px;">Asparagus</h2>
    <p style="margin-top: 20px;"><strong style="font-size: 18px;">-Learn how to grow Asparagus</strong><br>Asparagus, often called the "king of vegetables," is a perennial plant that has been cultivated for thousands of years. Known for its unique, tender spears, asparagus is highly valued for its delicate flavor, nutritional benefits, and versatility in the kitchen.</p>
    <h4>4.0
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-regular fa-star"></i>
      <br>
      <div class="course-button">
      <a href="/farmji-2/farmji/expert/info4.html">
    <button class="btn">Explore Course</button>
</a>
    <a href="/farmji-2/farmji/expert/info4.html">
    <button class="btn">Meet Expert</button>
</a>
</div>
      </h4>
      </div>
  </div>


</section>

    <!--About Us-->

<section>
      <div class="heading1">
      <h1>ABOUT US</h1>
      <p> WELCOME TO FARMIZ!! </p>
      <p> At Farmiz, we are dedicated to nurturing the land and cultivating excellence.</p>
      <p class="line1">"Where our passion for agriculture meets innovation and sustainability. With a rich history in the heart of farming, we are dedicated to advancing the agricultural industry through cutting-edge technology. By embracing modern techniques and sustainable practices, we aim to enhance productivity and ensure a greener future. Together, we drive progress, shaping the future of farming for generations to come."</p>
      </div>
      </section>

</section>

<section><!--Our Vision-->
      <h1 class="vision-heading">OUR VISSION</h1>
      <div class="our-vision" id="our-vision">
      <div class="wrapper-vision">
        <div class="card">
            <img src="image/img2.jpg">
            <div class="info">
                <h1>Inovative Learning</h1>
                <p>Provide accessible, interactive, and engaging courses, utilizing technology to reach farmers worldwide. </p>
            </div>
        </div>
    </div>

    <div class="wrapper-vision">
        <div class="card">
            <img src="image/img.jpg">
            <div class="info">
                <h1>Empower Farmers</h1>
                <p>Equip farmers with the knowledge and skills to grow new fruits and vegetables, increasing their yields and income. </p>
               
            </div>
        </div>
    </div>

    <div class="wrapper-vision">
        <div class="card">
            <img src="image/img3.jpg">
            <div class="info">
                <h1>Recognition</h1>
                <p>Celebrate and recognize farmers' achievements, innovations, and contributions to sustainable agriculture and food security.</p>
                </div>
        </div>
    </div>
</div>
</section>

<!--Contact-us-->
<section class="contact" id="contact">
    <div class="container-contact">
        <h2>CONTACT US</h2>
        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Send us a message</h3>
                <form action="connect.php" method="post">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="number" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                    </div>                      
                    <button type="submit">Send Message</button>  
                </form>
            </div>
            
        </div>
    </div>
    <div class="wrapper"
    <div class="title">
    </div>
    <div class="contact-form">
        <div class="input-fields">
           
        </div>
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
                <li><a href="#home">Home</a></li>
                <li><a href="#courses">Our Courses</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h2>Contact Us</h2>
            <ul>
                <li>Email: vanshikamalik507@gmail.com</li>
                <li>Email: bhoomiarora64@gmail.com</li>
                <li>Phone: 91+ 7310XXXXXX</li>
                <li>Address: New Delhi</li>
            </ul>
        </div>
        <div class="footer-social">
            <h2>Follow Us</h2>
            <ul>
                <li>
                    <a href="https://www.facebook.com/" target="_blank">
                        <i style="height: 90px" class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com/" target="_blank">
                        <i style="height: 90px"class="fab fa-twitter"></i>
                    </a>
                </li>
               
                <li>
                    <a href="https://www.linkedin.com/in/vanshika-malik-3495432a2/" target="_blank">
                        <i style="height: 90px"class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/bhoomi-arora-45aa24292/" target="_blank">
                        <i style="height: 90px"class="fa-brands fa-linkedin-in"></i>
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
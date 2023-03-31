<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/dark.css">

  <!-- css animation -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <title>Resturant Wesite</title>
  
</head>
<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="navbar-container container ">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#showcase">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a href="contactUs.php">Contact</a></li>
                <li><a href="../adminPanel/login.php" target="_default">Login</a></li>
                <li><a href="index.php">Light</a></li>
            </ul>
            <!-- <h1 class="logo"><img src="assets/images/sushi1.png" alt="" width="100px" height="80px"  style="background-color: white;"></h1> -->
            <h1 class=" animate__animated animate__bounce" ><img src="assets/images/sushi1.png" alt="" width="100px" height="70px" style="background-color: white;" ></h1>
        </div>

    </nav>

    <!-- showcase -->
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title">Eat Right Food</h1>
            <p>Eat Healthy food, it is good for your health.</p>
    
            <a href="#food-menu" class="btn btn-primary">Menu</a>
        </div>
    
    </section>

    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About us</p>
                <h2>We have been making healthy food for last 3 years</h2>
                <p>Welcome to Baba Tikkah. For Our Restaurant, sustainability is not a lofty idea but a fundamental, and necessary, endeavor. Our concept is about the food and drink of course, but it’s also about our team, our facilities, our practices, and the hundreds of decisions we make each day that affect the world around us.</p>
            </div>
            <div class="about-img">
               <img src="assets/images/about-photo.jpg" alt="">
                
            </div>
        </div>
    </section> 
 
 <!--#####################################################video###################################-->

 <video  class="video"  controls width="800" height="360"  loop autoplay muted   poster="./food-menu1.jpg">
    <source src = "assets/videos/resturent.mp4"> 
    
</video>

    <!-- category----------------------------- -->
    <section id="food">
        <h2>Types of Food</h2>
        <div class="food-container container">
            <div class="food-type fruit">
                <div class="img-container">
                    <img src="assets/images/food1.jpg" alt="">
                    <div class="img-content">

                        <h3>Fruit</h3>
                        <a href="https://fruitsabzi.pk/" class="btn btn-primary" target="_blank">Learn More</a>
                    </div>
                </div>

            </div>
            <div class="food-type vegetable">
                <div class="img-container">
                    <img src="assets/images/food2.jpg" alt="">
                    <div class="img-content">
                        <h3>Vegetable</h3>
                        <a href="https://www.farmtohome.com.pk/" class="btn btn-primary" target="_blank">Learn More</a>
                    </div>
                </div>
              
            </div>
            <div class="food-type grain">
                <div class="img-container">
                    <img src="assets/images/food3.jpg" alt="">
                    <div class="img-content">
                        <h3>Grain</h3>
                        <a href="https://wholegrainscouncil.org/" class="btn btn-primary" target="_blank">Learn More</a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- ############food menu###### -->
    <section id="food-menu">
        <h2 class="food-menu-heading">
            Food Menu
        </h2>
        <div class="food-menu-container container">
            <div class="food-menu-item">
                <div class="food-image">
                    <img src="assets/images/food-menu1.jpg" alt="">

                </div>
                <div class="food-description">
                    <h2 class="food-title">Food Menu Item 1</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sit.</p>
                    <p class="food-price">Price:250</p>


                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-image">
                    <img src="assets/images/food-menu2.jpg" alt="">

                </div>
                <div class="food-description">
                    <h2 class="food-title">Food Menu Item 2</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sit.</p>
                    <p class="food-price">Price:750</p>


                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-image">
                    <img src="assets/images/food-menu3.jpg" alt="">

                </div>
                <div class="food-description">
                    <h2 class="food-title">Food Menu Item 3</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sit.</p>
                    <p class="food-price">Price:650</p>


                </div>
            </div>

            <div class="food-menu-description"> </div>

            <div class="food-menu-item">
                <div class="food-image">
                    <img src="assets/images/food-menu4.jpg" alt="">

                </div>
                <div class="food-description">
                    <h2 class="food-title">Food Menu Item 4</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sit.</p>
                    <p class="food-price">Price:850</p>


                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-image">
                    <img src="assets/images/food-menu5.jpg" alt="">

                </div>
                <div class="food-description">
                    <h2 class="food-title">Food Menu Item 5</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sit.</p>
                    <p class="food-price">Price:450</p>


                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-image">
                    <img src="assets/images/food-menu6.jpg" alt="">

                </div>
                <div class="food-description">
                    <h2 class="food-title">Food Menu Item 6</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sit.</p>
                    <p class="food-price">Price:650</p>


                </div>
            </div>
        </div>

    </section>



    <!-- ######### tests monial####### -->
   <section id="testimonial">
    <h2 class="testimonial-title">What Our Customers Says</h2>
    <div class="testimonial-container container">
        <div class="testimonial-box">
            <div class="star-rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            
            <p class="testimonial-text">Their spicy chicken sandwich is sooo good!</p>
            <div class="customer-details">
                <div class="customer-photo"><img src="assets/images/male-photo1.jpg" alt=""></div>
                <p class="customer-name">John Doe</p>
            </div>
        </div>

        <div class="testimonial-box">
            <div class="star-rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>

            <p class="testimonial-text">I Love Their Chicken They have a Great Service and Great Workers</p>
            <div class="customer-details">
                <div class="customer-photo"><img src="assets/images/male-photo2.jpg" alt=""></div>
                <p class="customer-name">Jasson</p>
            </div>
        </div>

        <div class="testimonial-box">
            <div class="star-rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>

            <p class="testimonial-text">Survice,food everything is commendable.</p>
            <div class="customer-details">
                <div class="customer-photo"><img src="assets/images/male-photo3.jpg" alt=""></div>
                <p class="customer-name">Brown</p>
            </div>
        </div>

    </div>
   
   </section>

   <!-- ########contact######### -->
   <!-- <section id="contact">
    <div class="contact-container container">
        <div class="contact-image">
            <img src="../img/restraunt-image.jpg" alt="">
        </div>
        <div class="form-container">
            <h2>Contact Us</h2>
            <input type="text" name="" id="" placeholder="Name">
            <input type="email" name="" id="" placeholder="Email">
            <textarea name="" id="" cols="30" rows="10" placeholder="Type Your Message Here"></textarea>
            <a href="#" class="btn btn-primary">Submit</a>
        </div>
    </div>
   </section> -->
   <footer id="footer">
    <h2>Resturant Wesite &copy;2023  all rights reserved</h2>
   </footer>

   
   <!-- #############java script smooth scrolling ######## -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script>
   $(document).ready(function(){
     // Add smooth scrolling to all links
     $("a").on('click', function(event) {
   
       // Make sure this.hash has a value before overriding default behavior
       if (this.hash !== "") {
         // Prevent default anchor click behavior
         event.preventDefault();
   
         // Store hash
         var hash = this.hash;
   
         // Using jQuery's animate() method to add smooth page scroll
         // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
         $('html, body').animate({
           scrollTop: $(hash).offset().top
         }, 800, function(){
   
           // Add hash (#) to URL when done scrolling (default click behavior)
           window.location.hash = hash;
         });
       } // End if
     });
   });
   </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact Us</title>

   
</head>

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
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Category</a></li>
                <li><a href="index.php">Menu</a></li>
                <li><a href="index.php">Testimonial</a></li>
                <li><a href="contactUs.php">Contact</a></li>
                <li><a href="../adminPanel/login.php" target="_default">Login</a></li>
                <li><a href="dark.php">Dark</a></li>
                <!-- <li id="login"><a href="login.html">login</a></li> -->
                
            </ul>
            <h1 class="logo"><img src="assets/images/sushi1.png" alt="" width="100px" height="80px" ></h1>
        </div>

    </nav>



<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $messageErr = "";
$name = $email = $phone = $message = "";
$success = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "* Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "* Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "* Invalid email format";
    }
  }
    

  if (empty($_POST["message"])) {
    $messageErr = "* Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "* Phone is Required";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
        $phoneErr = "* Invalid phone format";
      }

  }

  //database connection

  require('config.php');

  $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,'contactus');
    // Check connection
    if($link === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
  } else {


    if (isset($_POST["submit"])) {
      // Fetching variables of the form which travels in URL
      if ($name != "" && $email != "" && $message != "" && $phone !="") {

      

          // Prepare an insert statement
          $sql = "INSERT INTO contact (name,email,phone,message) VALUES('$name', '$email', '$phone' ,'$message')";
          if (mysqli_query($link, $sql)) {
            $success = "WE WILL BE CONTACTING YOU SOON";
            // Close connection
            mysqli_close($link);
          } else {
            echo "Error:" . mysqli_error($link);
          }


        

      } else {

      }
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<body>
    <div class="Registration-Form">
    <h1>Contact US</h1>
    <form action="" method="POST">
    <p>Name: <span style="color:#ff5b00; background-color: white; border-radius: 6px;"><?php echo $nameErr;?></span></p>
        <input type="text" name="name" placeholder="Full Name" >
        
        <p>Email: <span style="color:#ff5b00; background-color: white; border-radius: 6px;"> <?php echo $emailErr;?></span></p>
        <input type="email" name="email" placeholder="E-mail" >

    

        <p>Phone No: <span style="color:#ff5b00; background-color: white; border-radius: 6px;"> <?php echo $phoneErr;?></span></p>
        <input type="text" name="phone" placeholder=" Phone No" >

        <p>Message:<span style="color:#ff5b00; background-color: white; border-radius: 6px; "> <?php echo $messageErr;?></span></p>
        <textarea name="message" class="text" cols="55" rows="10" placeholder="Enter Your Meassage" style="padding:10px;border:0;border-radius:8px;" maxlength="100" ></textarea>
        <br>
        <input type="submit" class="button" name="submit" value="Submit"> 
        <br>
        <br>
        <p><span style="color:#ff5b00; background-color: white; border-radius: 6px;"> <?php echo  $success;?></span></p>

       
    </form>
   
    


    </div>

    
</body>
</html>
<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management System</title>

  <link rel="stylesheet" href="Garbage\Garbage-Management-Web-main\index.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <style>

    @import url('https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap');

  </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
    <!-- <div class="nav">
        <div class="logo">
            <p><a href="home.php">GVerse</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div> 
    </div> -->
    <!-- <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
            </div> 
          </div>
       </div>
    </main> -->
<!-- <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>The Green Code</title>

  <link rel="stylesheet" href="index.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <style>

    @import url('https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap');

  </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>    -->

  <div class="header">
    <h1><b>Waste Management System</b></h1>
    <p>Avoid pollution, be the solution! Recycle</p>
  </div>

  <div class="navbar">
    <ul>
      <li><a href="Garbage\Garbage-Management-Web-main\index.html">Home</a></li>
      <li><a href="Garbage\Garbage-Management-Web-main\html\service.php">Services</a></li>
      <li><a href="Garbage\Garbage-Management-Web-main\html/what_we_do.html">What we do</a></li>
      <li><a href="Garbage\Garbage-Management-Web-main\html/recycle.html">Recyle Right</a></li>
      <li><a href="Garbage\Garbage-Management-Web-main\html/About_us-edited.html">About Us</a></li>
      <li><a href="https://www.google.com/maps/d/edit?mid=1Djo0nMLow_FtRCe1w7XrCEsqr4B3g9DI&usp=drive_link">find nearest center</a></li>
      
      <li><a href="Responsive-Contact-us-form-master\Responsive-Contact-us-form-master\Responsive-Contact-us-form-master\index.html">Complain</a></li>
      <li><?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?></li>
            <li><a href="php/logout.php"> <button class="btn">Log Out</button> </a></li>
            <li><a href="selling\FoodWeb.html"style="color:yellow">Sell your product</a></li>
            <li><a href="buy product\index.html" style="color:yellow">Buy product</a></li>
    </ul>  
  </div>  
   
    <!-- bg video div -->
  <div class="video">
    <video autoplay loop class="video-bg" muted plays-inline> <!--video play as a loop-->
      <source src="Garbage\Garbage-Management-Web-main\media\Home_Page_Vid.mp4" type="video/mp4"> <!--bg video added-->
    </video>
  </div>
 
  <footer class="footer">
      <div class="container"> <!--footer container created-->
        <div class="row"> <!--f-container divided into rows-->
          <div class="footer-col"> <!--f-container divided into columns-->
            <h4>Services</h4> <!--column headers-->
            <ul>
              <li><a href="Garbage\Garbage-Management-Web-main\html/service.html">Schedule</a></li>
              <li><a href="#">Feedback</a></li>
            </ul>
          </div>
          
          <div class="footer-col">
            <h4>What we do</h4> <!--column headers-->
            <ul>
              <li><a href="Garbage\Garbage-Management-Web-main\html/what_we_do.html">What we do</a></li> <!--column href added-->
              <li><a href="#">Climate change</a></li>
              <li><a href="#">Life on land</a></li>
              <li><a href="#">Life below water</a></li>
              <li><a href="#">Our Impact</a></li>
            </ul>
        </div>
        
        <div class="footer-col">
            <h4>Recycle Right</h4> <!--column headers-->
            <ul>
              <li><a href="Garbage\Garbage-Management-Web-main\html/recycle.html">Waste</a></li> <!--column href added-->
              <li><a href="#">Sorting guide</a></li>
              <li><a href="#">E waste</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Follow Us</h4> <!--column headers-->
            <div class="social-links">
              <ul>
              <li><a href="https://twitter.com"><i class="fab fa-twitter" ></i></a></i></li> <!--column href added-->
              <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
        </div>

     </div>
   </footer>      
</body>                 
</html>       
 

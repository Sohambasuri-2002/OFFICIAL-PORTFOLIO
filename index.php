<?php
$conn = mysqli_connect('localhost','root','','portfolio') or die('connection failed');

if(isset($_POST['send'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $number = mysqli_real_escape_string($conn, $_POST['number']);
  $msg = mysqli_real_escape_string($conn, $_POST['message']);

  $select_message = mysqli_query($conn, "SELECT * FROM `contactme` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
  
  if(mysqli_num_rows($select_message) > 0){
     $message[] = 'message sent already!';
  }else{
     mysqli_query($conn, "INSERT INTO `contactme`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
     $message[] = 'message sent successfully!';
  }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PORTFOLIO</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAq4MWAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARAAAAAAAAAREQAAAAAAAREREAAAAAAQAAAAAAAAARAAAAAAAAAREAABEREAAREQAQARERARERABEAEREREREAERABERAREQAREQARAAEAAAAAAAAAAAAAAAAAAAAAARERERAAAAAAERERAAAAAAABERAAAAAAAAARAAAAD+fwAA/D8AAPgfAAD3/wAA5/8AAMeDAACGwQAABmAAAAYwAACGGQAA3/8AAP//AADwDwAA+B8AAPw/AAD+fwAA" rel="icon" type="image/x-icon" />
</head>
<body>

  


  <?php
  error_reporting(0);
  if(isset($$message)){
    foreach($$message as $$message){
      echo '
      <div class="message">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
    }
  }


  ?>
  
  <!---home-->
  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">portfolio</a>

    <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#service">service</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
    </nav>

    <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-github"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
    </div>


  </header>

  <!-----home-->

  <section class="home" id="home">
    <div class="image">
      <img src="SOHAM'S OWN IMAGE.jpg" alt="">
    </div>
    <div class="content">
      <h3>I am Soham Basuri</h3>
      <span>Full Stack Web Developer</span>
      <p>The beauty of a website lies within the heart of a developer</p>
      <a href="#about" class="btn">about me</a>
    </div>

  </section>
  <br><br><br><br>
  <hr>
  <br><br><br><br>
  <!----about-->

  <section class="about" id="about">
    <h1 class="heading"><b>ABOUT</b><span> ME</span></h1>
    <div class="row-1">
      
      <div class="content">
        <h3>My Name is Soham Basuri & I am a Full Stack web   Developer</h3>
        <p>The best way to design is to have great imagination powers</p>
        <div class="box-container">
          <div class="box">
            <p><span>age : </span> 21 </p>
            <p><span>gender : </span>male</p>
            <p><span>language : </span>english</p>
            <p><span>work : </span>Full Stack web Developer</p>
          </div>

          <div class="box">
            <p><span>freelance : </span> available </p>
            <p><span>phone : </span> +567-783-198 </p>
            <p><span>email : </span> sohambasuri2015@gmail.com</p>
            <p><span>country : </span> india </p>
          </div>
        </div>
        <a href="#" class="btn">Hire me </a>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br><br><br><br>
    <h1 class="heading"><span>my</span> skills</h1>
    <br><br><br>
    <div class="row-2">
      <div class="skills">
        <div class="progress">
          <h3>web designs <span>70%</span></h3>
          <div class="bar"><span></span></div>
        </div>

        <div class="progress">
          <h3>web development <span>80%</span></h3>
          <div class="bar"><span></span></div>
        </div>

        <div class="progress">
          <h3>UI/UX designs <span>30%</span></h3>
          <div class="bar"><span></span></div>
        </div>

        <div class="progress">
          <h3>application designs <span>50%</span></h3>
          <div class="bar"><span></span></div>
        </div>
      </div>
      
      <div class="box-container">
        <div class="box">
          <h3> >> 6+</h3>
          <p>months of experience</p>
        </div>

        <div class="box">
          <h3> >> 10+</h3>
          <p>personal projects</p>
        </div>

        
      </div>


    </div>

    
  </section>
  <br><br><br><br><br><br><br>
  <hr>
  <br><br><br><br>

  <!---services-->

  <section class="service" id="service">
    <h1 class="heading">services</h1>
    <br><br><br><br><br>
    <div class="top-container">

      <div class="boxs">
        <i class="fas fa-code"></i>
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <i class="fas fa-paint-brush"></i>
        <h3>graphics design</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <i class="fas fa-bootstrap"></i>
        <h3>bootstrap</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <i class="fas fa-chart-line"></i>
        <h3>bootstrap</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <i class="fas fa-bullhorn"></i>
        <h3>bootstrap</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <i class="fab fa-wordpress"></i>
        <h3>bootstrap</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      
    </div>
  </section>
  <br><br><br><br><br><br><br><br>
  <hr>
  <br><br><br><br>

  <!----portfolio-->

  <section class="portfolio" id="portfolio">
    <h1 class="heading">portfolio</h1>
    <br><br><br><br>
    <div class="top-container">

      <div class="boxs">
        <img src="download.png" alt="">
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <img src="online.gif" alt="">
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <img src="passss.gif" alt="">
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>
      
      <div class="boxs">
        <img src="pic4.gif" alt="">
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <img src="pint.gif" alt="">
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="boxs">
        <img src="pic6.avif" alt="">
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

    </div>
  </section>

  <!--- contact -->

  <section class="contact" id="contact">
    <h1 class="heading">contact <span>me</span></h1>
    <br><br><br>
    <div class="icons-container">

      <div class="icons">
        <i class="fas fa-envelope"></i>
        <h3>my email</h3>
        <p>sohambasuri2015@gmail.com</p>
      </div>

      <div class="icons">
        <i class="fas fa-phone"></i>
        <h3>my number</h3>
        <p>+567-783-198</p>
      </div>

      <div class="icons">
        <i class="fas fa-address"></i>
        <h3>my address</h3>
        <p>durgachak , haldia , west bengal , india</p>
      </div>

    </div>

    <div class="row">
      <form action="" method="POST">
        <input type="text" placeholder="name" class="box" name="name">
        <input type="email" placeholder="email" class="box" name="email">
        <input type="number" placeholder="number" class="box" name="number">

        <textarea name="message" placeholder="message" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="send message" class="btn" name="send">
      </form>
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3697.490419351509!2d88.13728027515937!3d22.069080279853555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02f7a663f69b83%3A0x36f9adae9e9e0f4a!2sDurgachak%20Eco%20Health%20Park!5e0!3m2!1sen!2sin!4v1686239159191!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>





  </section>

  <!--- footer -->

  <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Soham Basuri</span> </div>








  <script src="script.js"></script>
</body>
</html>
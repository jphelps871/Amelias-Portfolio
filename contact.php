<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>

    <nav class="nav  nav-up">
      <!-- logo -->
      <a style="height: 51px" href="index.html">
        <img src="img/logo.svg" alt="">
      </a>

      <!-- nav link -->
      <ul class="nav-links">
        <li><a href="index.html">Portfolio</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>

    <div class="contact">
      <h1>Contact</h1>
      <p> Please feel free to contact me from below </p>
    </div>

    <div class="container">
      <form class="form" method="post" action="contactform.php">
        <div class="name">
          <!-- first name -->
          <div class="fname">
            <label for="first-name">First Name</label>
            <input type="text" name="first-name">
          </div>

          <!-- second name -->
          <div class="sname">
            <label for="second-name">Second Name</label>
            <input type="text" name="second-name">
          </div>
        </div>

        <!-- email -->
        <div class="email-container">
          <label for="email">Email</label>
          <input type="email" name="email">
        </div>

        <!-- message -->
        <div class="message-container">
          <label for="message">Message</label>
          <textarea name="message" rows="10"></textarea>
        </div>

        <!-- submit button -->
        <div class="btn-container-form">
          <button type="submit" name="submit" class="contact-btn">Send Message</button>
        </div>

        <!-- contact information -->
         <div class="contact-buttons">
           <p>Contact Information</p>
           <a target="_blank" href="download/CV.pdf">Download CV</a>
           <a href="mailto:amelia.butler98@gmail.com">amelia.butler98@gmail.com</a>
         </div>

       </div>


      </form>
    </div>



    <footer>
      <div class="">
        <a target="_blank" href="https://linktr.ee/ameliabutler98"><img class="footer-links" src="img/logos/blog-link.svg"></a>
      </div>
      <p class="j-dizzle"> ©2020 website by James Phelps</p>
    </footer>
  </body>
  <script src="js/script.js"></script>
</html>

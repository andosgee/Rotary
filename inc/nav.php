<div class="nav"> <!--Master Class of divs-->
  <div  class="nav__menu">

    <div class="nav__items"><!--Holds nav items-->
      <a class="nav__item" href="index.php">Home</a>
      <a class="nav__item" href="about.php">About Us</a>
      <a class="nav__item" href="contact.php">Contact Us</a>
      <a class="nav__item" href="newsletter.php">Newsletters</a>

      <?php
      if(!empty($_SESSION['USER'])){ #Shows options avalible whether a user is signed in
        echo"
        <a class=\"nav__item\" href='minutes.php'>Minutes</a>
        <a class=\"nav__item\" href='admin.php'>Member Options</a>
        ";
      }else{
        echo"<a class=\"nav__item\" href='signup.php'>Sign-Up</a>";
      }
      ?>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>

    <?php include './inc/sidebar.php'; ?>
  </div>
    <?php
    if(empty($_SESSION['USER'])){
      echo"
      <a class=\"nav__item\" href='login.php'>Login</a>";
    }else{
      echo "
      <a class=\"nav__item\" href='logout.php'>Logout</a>";
    }
    ?>

</div>

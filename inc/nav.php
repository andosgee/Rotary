<div class="nav"> <!--Master Class of divs-->
  <div  class="menu">
    <div class="nav" id="items"><!--Holds nav items-->
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="contact.php">Contact Us</a>
      <a href="newsletter.php">Newsletters</a>

      <?php
      if(!empty($_SESSION['USER'])){ #Shows options avalible whether a user is signed in
        $name = $_SESSION['NameF']." ".$_SESSION['NameS'];
        echo"
        Welcome {$name}
        <br>
        <a href='minutes.php'>Minutes</a>
        <br>
        <a href='admin.php'>Member Options</a>
        ";
      }else{
        echo"<a href='signup.php'>Sign-Up</a>";
      }
      ?>
    </div>
    <div class="sidebar">
      <h3>Next Meeting</h3>
      _Day of week_
      <br>
      Time: ???
      <br>
      Address: ???
      <br>
      <iframe>Google Maps</iframe>
    </div>
  </div>
  <div class="login"> <!--Shows options avalible whether a user is signed in-->
    <?php
    if(empty($_SESSION['USER'])){
      echo"
      <a href='login.php'>Login</a>";
    }else{
      echo "
      <a href='logout.php'>Logout</a>";
    }
    ?>

  </div>
</div>

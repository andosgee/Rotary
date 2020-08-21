<!-- Bottom Nav -->
<a href="index.php">Home</a>
<a href="about.php">About Us</a>
<a href="contact.php">Contact Us</a>
<a href="newsletter.php">Newsletters</a>

<?php
if(!empty($_SESSION['USER'])){
  echo"
  <a href='minutes.php'>Minutes</a>";
}
?>

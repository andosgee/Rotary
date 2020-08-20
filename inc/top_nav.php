<!-- Top nav -->
<form method="get" name="search_site">
  <input type="text" placeholder="Search" name="site_input" id="site_input">
  <button name="site_button" id="site_button" type="submit">Go</button>
</form>

<?php
if(empty($_SESSION['ID'])){
  echo"
  <a href='login.php'>Login</a>
  |
  <a href='signup.php'>Sign-Up</a>";
}else {
  $name = $_SESSION['NameF']." ".$_SESSION['NameS'];
  echo "
  Welcome ".$name."
  <a href='logout.php'>Logout</a>";
}
?>

<!-- Top nav -->
<form method="get" name="search_site"> <!--Search Bar-->
  <input type="text" placeholder="Search" name="site_input" id="site_input">
  <button name="site_button" id="site_button" type="submit">Go</button>
</form>

<?php
if(empty($_SESSION['USER'])){
  echo"
  <a href='login.php'>Login</a>
  |
  <a href='signup.php'>Sign-Up</a>";
}else{
  $name = $_SESSION['NameF']." ".$_SESSION['NameS'];
  echo "
  Welcome {$name} |
  <a href='admin.php'>Manage Account</a>
  |
  <a href='logout.php'>Logout</a>";
}
?>

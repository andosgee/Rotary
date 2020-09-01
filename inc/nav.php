<?php
if(isset($_SESSION['USER'])){ //If logged in
  $login_state = 'logout'; //Set state of login/out button
  $nav_items = array('Home'=>'./welcome.php', //Set user Nav
                     'Minutes'=>'./minutes.php',
                     'Newsletter'=>'./newsletter.php',
                     'New Article' => './create_article.php',);
  if ($_SESSION['ISADMIN']){ //Add Admin options
    $nav_items['Home'] = './admin.php';
    $nav_items['Moderate Article'] = './mod_article.php';
    $nav_items['Members'] = '#'; //add user or remove user
  }
  $nav_items['Edit Details'] = './details_change.php'; //Last item in nav

}
else{ //Default Menu
  $login_state = 'login'; //Set state of login/out button
  $nav_items = array('Home'=>'./index.php',
                     'About Us'=>'./about.php',
                     'Contact Us'=>'./contact.php',
                     'Newsletter'=>'./newsletter.php',
                     'Sign-Up'=>'./signup.php');
}
 ?>

<div class="nav row"> <!--Master Class of divs-->
  <span class="nav__hamburger" onclick="mobileMenu()">&#9776;</span>
  <div class="nav__menu">
    <div class="nav__items column"><!--Holds nav items-->
      <?php //Display links
      foreach($nav_items as $display_text => $link){
        $display_text = ucwords($display_text);
        echo "<a class='nav__item' href=\"{$link}\">{$display_text}</a>";
      }
       ?>
    </div>
    <!-- Include sidebar in mobile version -->
    <?php include './inc/sidebar.php'; ?>
  </div>
  <?php
  echo "<a class=\"nav__item\" href='./{$login_state}.php'>"
          .ucwords($login_state).
       "</a>";
  ?>
</div>

<!-- JS for hamburger -->
<script src='./js/nav_menu.js'></script>

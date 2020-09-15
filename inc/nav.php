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
    $nav_items['Members'] = './members.php'; //add user or remove user
  }
  $nav_items['Edit Details'] = './details_change.php'; //Last item in nav

}
else{ //Default Menu
  $login_state = 'login'; //Set state of login/out button
  $nav_items = array('Home'=>'./index.php',
                     'About Us'=>'./about.php',
                     'Contact Us'=>'./contact.php',
                     'Newsletter'=>'./newsletter.php',
                     'Articles'=>'./articles.php',
                     'Sign-Up'=>'./signup.php');
}
 ?>

<div class="nav"> <!--Master Class of divs-->
  <div class="nav__bar row">
    <span class="nav__hamburger" onclick="mobileMenu()">&#9776;</span>

    <?php
    echo "<a class=\"nav__login\" href='./{$login_state}.php'>"
            .ucwords($login_state).
         "</a>";
    ?>
  </div>

  <div class="nav__menu column">
    <div class="nav__items column"><!--Holds nav items-->
      <?php //Display links
      foreach($nav_items as $display_text => $link){
        $display_text = ucwords($display_text);
        echo "<a class='nav__item' href=\"{$link}\">{$display_text}</a>";
      }
       ?>
    </div>
    <hr class="solid">
    <!-- Include sidebar in mobile version -->
    <?php include './inc/sidebar.php'; ?>
  </div>


</div>

<!-- JS for hamburger -->
<script src='./js/nav_menu.js'></script>

<?php
if(isset($_SESSION['USER'])){ //If logged in
  $login_state = 'logout'; //Set state of login/out button
  $nav_items = array('Home'=>'./index', //Set user Nav
                     'Minutes'=>'./minutes',
                     'Newsletter'=>'./newsletters',
                     'Articles' => './manage_articles',
                      'Gallery' => './manage_gallery',
                      'Current Projects' => './fundraisers',
                    'Calendar' => './calendar');
  if ($_SESSION['ISADMIN']){ //Add Admin options
    $nav_items['Home'] = './admin';
    $nav_items['Minutes'] = './manage_minutes';
    $nav_items['Newsletter'] = './manage_newsletter';
    $nav_items['Members'] = './members'; //manage members
  }
  //Included in both
  $nav_items['My Details'] = './details_change';
  $nav_items['Change Password'] = './password_change';

}
else{ //Default Menu
  $login_state = 'login'; //Set state of login/out button
  $nav_items = array('Home'=>'./index',
                     'About Us'=>'./about',
                     'Contact Us'=>'./contact',
                     'Newsletter'=>'./newsletters',
                     'Articles'=>'./articles',
                     'Applications'=>'./applications',
                      'Gallery' => './Photos',
                    'Current Projects' => './fundraisers',
                    'Calendar' => './calendar'
                    );
}
 ?>

<div class="nav"> <!--Master Class of divs-->
  <div class="nav__bar row">
    <span class="nav__hamburger" onclick="mobileMenu()">&#9776;</span>

    <?php
    echo "<a class=\"nav__login\" href='./{$login_state}'>"
            .ucwords($login_state).
         "</a>";
    ?>
  </div>

  <div class="nav__menu column">
    <div class="nav__items column"><!--Holds nav items-->
      <?php //Display links
      foreach($nav_items as $display_text => $link){
        $display_text = ucwords($display_text);
        $is_active = (basename($_SERVER['PHP_SELF']) == basename($link))? " nav__item--active":"";
        echo "<a class='nav__item{$is_active}' href=\"{$link}\">{$display_text}</a>";
      }
       ?>
    </div>
    <hr class="solid">
    <!-- Include sidebar in mobile version -->
    <div class="sidebar-m">
      <?php include './inc/sidebar.php'; ?>
    </div>
  </div>


</div>

<!-- JS for hamburger -->
<script src='./js/nav_menu.js'></script>

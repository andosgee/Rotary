<?php

  //Get 'Featured' Articles

  //Temporary until 'Featured' is decided
  $num_featured = 3;
  $featured_articles = array_slice(get_from_table('tbl_articles'),0,$num_featured);
?>



<div class="marquee">

  <?php //Echo slide for each article
    foreach ($featured_articles as $article) {
      display_article($article,'marquee');
    }
    ?>
  <!-- Next/Previous Buttons -->
  <a class="marquee__previous" onclick="plusSlides(-1)">&#10094;</a>
  <a class="marquee__next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Nav -->
  <?php
    $num_items = count($featured_articles);
    display_marquee_nav($num_items); ?>
</div>



<script src="./js/marquee.js" charset="utf-8"></script>

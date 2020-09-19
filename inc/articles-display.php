<?php  //Constants
  define("PER_PAGE",5); //10

  //Get Article Current Page
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }
  else{
    $page = 1;
  }

  //Get Articles that aren't featured
  $all_articles = get_from_table("tbl_articles","tbl_articles.Featured = 0 and tbl_articles.Moderated = 1");

  $total_articles = count($all_articles);

  $total_pages = ceil($total_articles/PER_PAGE);

  if ($page > $total_pages){
    $page = $total_pages;
  }
  elseif ($page < 1){
    $page = 1;
  }
 ?>

<div class="articles column">
   <?php //Display Articles
    $article_start = ($page-1) * PER_PAGE; //Define range
    $article_end = $article_start + PER_PAGE;

    if($article_end > $total_articles){ //Check if outside range
      $article_end = $total_articles;
    }

    for ($i=$article_start; $i < $article_end; $i++) { //Display articles
      display_article($all_articles[$i],'article');
    }
    ?>
<hr class="solid">
  <!-- Display Pages Nav -->
  <div class="articles-nav column">
    <div class="articles-nav__items row">
      <?php
        if ($page != 1){ //All pages but first
          echo "<a href=\"./articles.php?page=1\">First</a>";
          $previous = $page - 1;
          echo "<a href=\"./articles.php?page={$previous}\">Previous</a>";
        }

        if($page != 1 && $page != $total_pages){ //All pages but first and last
          echo "|";
        }

        if ($page != $total_pages){ //All pages but last
          $next = $page + 1;
          echo "<a href=\"./articles.php?page={$next}\">Next</a>";
          echo "<a href=\"./articles.php?page={$total_pages}\">Last</a>";
        }
       ?>
    </div>

    <p class="articles-nav__location">
      <?php echo "Page {$page} of {$total_pages}"; //Current Page?>
    </p>
  </div>
</div>

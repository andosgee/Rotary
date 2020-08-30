
<!DOCTYPE html>
<html lang="en">
<?php include './inc/head.php';
      if(isset($_GET['AID'])){ //Only load page if article ID is given
        $ID = $_GET['AID']; //Get Article ID
        $article = get_from_table("tbl_articles","tbl_articles.AID = {$ID}")[0];
        if ($article == ''){ //Invalid ID
          header("Location: ./article.php");
        }
      }
      else{ //Redirect to agents page if agent not given
        header("Location: ./articles.php");
      }

?>
<body>
  <?php include './inc/title.php';
        include './inc/nav.php';
    ?>
  <div class="row">
    <?php include './inc/sidebar.php';?>

    <div class="article">
      <?php
        display_article($article); //Temporary - testing gets information
       ?>

    </div>
  </div>
</body>
</html>

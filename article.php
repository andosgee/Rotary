
<!DOCTYPE html>
<html lang="en">
<?php include './inc/head.php';
      if(isset($_GET['AID'])){ //Only load page if article ID is given
        $ID = $_GET['AID']; //Get Article ID
        $article_query = "SELECT *
                          FROM tbl_articles
                          INNER JOIN tbl_login
                          ON tbl_articles.Author = tbl_login.ID
                          WHERE tbl_articles.AID = {$ID}";
        $result = $conn -> query($article_query);
        $article = $result -> fetch_assoc();
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

    <div class="article column">
      <h1 class="article__title"><?php echo $article['Title']; ?></h1>
      <h4 class="article__info">Published by <?php echo strtoupper("{$article['NameF']} {$article['NameS']}"); ?> on <?php echo format_date($article['Date']); ?></h4>
      <img src="./media/<?php echo $article['AID']; ?>.jpg" alt="Article Image" class="article__image">
      <span class="article__content">
        <?php echo nl2br($article['Content']); //Convert newline to <br />?>
      </span>
    </div>
  </div>
  <?php include './inc/footer.php'; ?>
</body>
</html>

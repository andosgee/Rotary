<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      AdminOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>
  <?php include "inc/nav.php"; ?>
  <script src="./js/image_preview.js" charset="utf-8"></script>
  <script src="./js/get_details.js" charset="utf-8"></script>
  <?php include "./inc/moderate_article_validation.php"; ?>

  <form method="POST" name="create_article_form" class="form column" enctype="multipart/form-data">
    <div class="column form__head">
      <h1 class="form__title">Moderate Article</h1>
      <div class="row">
        <label class="form__label" for="user_select">Select Article:</label>
        <select name="article_select" class="form__select" onchange="populateFormByID(this.value,'./inc/moderate_form.php')">
          <option value="" selected>-</option>
          <?php
            $articles = get_from_table('tbl_articles',"Moderated = 0");

            foreach($articles as $article){
              echo "<option value=\"{$article['AID']}\">{$article['Title']}</option>";
            } ?>
        </select>
      </div>
    </div>

    <div class="form__content column">
      <?php include "./inc/moderate_form.php"; ?>
    </div>

  </form>
</body>
<?php include "inc/footer.php"; ?>
</html>

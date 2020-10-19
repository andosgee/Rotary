<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      UserOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>
  <?php include "inc/nav.php"; ?>
  <script src="./js/image_preview.js" charset="utf-8"></script>
  <?php include "./inc/create_article_validation.php"; ?>

  <form method="POST" name="create_article_form" class="form column" enctype="multipart/form-data">
    <div class="column form__head">
      <h1 class="form__title">Create Article</h1>
    </div>

    <div class="form__content column">
      <img id="upload_preview" class="article__image">
      <input type="file" name="article_image" onchange="preview_image(event)" required>

      <input type="text" class="form__input" name="article_title" placeholder="Article Title..." required>
      <textarea name="article_content" class="form__input form__textarea" placeholder="Start Writing Here..." rows=11 required ></textarea>
    </div>

    <input class="form__button form__button--submit" type="submit" name="create_article_submit" value="Submit for Moderation">
  </form>
</body>
<?php include "inc/footer.php"; ?>
</html>

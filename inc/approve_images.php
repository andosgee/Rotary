<?php




?>

<form method="POST" name="create_article_form" class="form column" enctype="multipart/form-data">
  <div class="column form__head">
    <h1 class="form__title">Moderate Images</h1>
    <div class="row">
      <label class="form__label" for="user_select">Manage/Approve Images:</label>
      <select name="article_select" class="form__select" onchange="populateFormByID(this.value,'./inc/moderate_form.php')">
        <option value="" selected>-</option>
        <?php
          $images = get_from_table('tbl_gallery',"`GID` IS NOT NULL","`tbl_gallery`.`Moderated`");

          foreach($images as $image){
            echo "<option value=\"{$image['GID']}\">{$image['ImageName']}</option>";
          } ?>
      </select>
    </div>
  </div>

  <div class="form__content column">
    <?php include "./inc/moderate_form_image.php"; ?>
  </div>

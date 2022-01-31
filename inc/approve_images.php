<?php




?>
<script>
  $(document).ready(function(){
    $('#article_select').ddslick(); // Turn on Slickness
  });
</script>

<form method="POST" name="create_article_form" class="form column" enctype="multipart/form-data">
  <div class="column form__head">
    <h1 class="form__title">Moderate Images</h1>
    <div class="row">
      <label class="form__label" for="user_select">Manage/Approve Images:</label>
      <select name="article_select" class="form__select" id='article_select'>
        <option value="" selected>-</option>
        <?php
          $images = get_from_table('tbl_gallery',"`GID` IS NOT NULL","`tbl_gallery`.`Moderated`");

          foreach($images as $image){
            $published = "";
            if($image['Moderated'] = 1){
              $published = "Apporved";
            }else{
              $published = "Awaiting Approval";
            }
            echo "<option value=\"{$image['GID']}\" data-imagesrc='{$image['ImageName']}'>{$published}</option>";
          } ?>
      </select>
    </div>
  </div>
</form>
  <div class="form__content column">
    <?php include "./inc/moderate_form_image.php"; ?>
  </div>

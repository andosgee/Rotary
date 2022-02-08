<?php
  $delete = "<h3 class='contact__subheading'>File Succeessfully Deleted</h3>";
  $fail = "<h3 class='contact__subheading'>Could Not Delete File, Please Try Later</h3>";
  $state = '';

  if(isset($_POST['delete_image'])){
    $image_id = secure($_POST['image_select']);
    $image_data = get_from_table('tbl_gallery',"`GID` == {$image_id}");
    print_r($image_data);
  }




?>
<script>
  $(document).ready(function(){
    $('#article_select').ddslick(); //Enables DDSlick for images in the select
  });
</script>

<form method="POST" name="create_article_form" class="form column" enctype="multipart/form-data">
  <div class="column form__head">
    <h1 class="form__title">Delete Images</h1>

    <div class="row">
      <select name="image_select" class="form__select" id='article_select'>
        <option value="" selected>-</option>
        <?php
          $images = get_from_table('tbl_gallery',"`GID` IS NOT NULL","`tbl_gallery`.`Moderated`");

          foreach($images as $image){
            $published = "";
            if($image['Moderated'] = 1){
              $published = "Active";
            }else{
              $published = "Inactive";
            }
            echo "<option value='{$image['GID']}' data-imagesrc='{$image['ImageName']}'>{$published}</option>";
          } ?>
      </select>
    </div>
    <div class="row">
      <button name="delete_image" type="submit" class="form__button form__button--delete">Delete Image</button>
    </div>
      </div>
</form>

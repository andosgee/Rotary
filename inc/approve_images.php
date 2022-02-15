<?php
  $delete = "<h3 class='contact__subheading'>File Succeessfully Deleted</h3>";
  $fail = "<h3 class='contact__subheading'>Could Not Delete File, Please Try Later</h3>";
  $state = '';

  if(isset($_POST['delete_image'])){
    $image_id = secure($_COOKIE['selectedData']);

    $image_data = get_from_table('tbl_gallery',"`GID` = {$image_id}");

    foreach ($image_data as $key) {
      $image_name = $key['ImageName'];
    }
    if(unlink($image_name)){
      $state = $delete;
      $sql_delete = "DELETE FROM `tbl_gallery` WHERE `GID` = {$image_id}";
      $conn -> query($sql_delete);
    }else{
      $state = $fail;
    }
  }




?>
<script>
var formValue = "";
  $(document).ready(function(){
    $('#article_select').ddslick({
      onSelected: function (data){
        window.formValue = data.selectedData.value;
      }
    }); //Enables DDSlick for images in the select

  });
</script>

<form method="POST" name="create_article_form" class="form column" enctype="multipart/form-data">
  <div class="column form__head">
    <h1 class="form__title">Delete Images</h1>

    <div class="row">
      <select name="image_select" class="form__select" id='article_select' >
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
      <button onclick="createCookie('selectedData', formValue, '12')" name="delete_image" type="submit" class="form__button form__button--delete">Delete Image</button>
    </div>
      </div>
      <div class="row">
        <?php
          echo $state;
         ?>
      </div>
</form>

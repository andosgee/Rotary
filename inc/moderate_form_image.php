<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
  //Refresh connection and functions for async request
  include "../inc/depends.php";
  $conn = OpenCon();
  $id = secure($_GET['id']);
  $article = get_from_table('tbl_gallery',"GID={$id}");
  if($article){
    $article = $article[0];
  }
  else{
    $article = NULL;
  } ?>

  <img id="upload_preview" class="article__image" src="<?php echo ((isset($article))? "./media/articles/{$article['AID']}.jpg":'') ?>">
  <input type="file" name="article_image" onchange="preview_image(event)">
  
  <div class="row">
  <label for="article_featured">Publish:</label>
    <input type="checkbox" name="article_publish" class="form__checkbox" <?php echo (($image['Moderated'])? "checked":""); ?>>
  </div>
  <input class="form__button form__button--submit" type="submit" name="create_article_submit" value="Update">

<?php } ?>

<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
  //Refresh connection and functions for async request
  include "../inc/depends.php";
  $conn = OpenCon();
  $id = secure($_GET['id']);
  $article = get_from_table('tbl_articles',"AID={$id}");
  if($article){
    $article = $article[0];
  }
  else{
    $article = NULL;
  } ?>

  <img id="upload_preview" class="article__image" src="<?php echo ((isset($article))? "./media/articles/{$article['AID']}.jpg":'') ?>">
  <input type="file" name="article_image" onchange="preview_image(event)">

  <input type="text" class="form__input" name="article_title" placeholder="Article Title..." value="<?php echo ((isset($article))? $article['Title']:'') ?>" required>
  <textarea name="article_content" class="form__input form__textarea" placeholder="Start Writing Here..." rows=11 required ><?php echo ((isset($article))? $article['Content']:'') ?></textarea>
  <div class="row">
  <label for="article_featured">Featured:</label>
    <input type="checkbox" name="article_featured" class="form__checkbox" <?php echo (($article['Featured'])? "checked":""); ?>>
  </div>
  <div class="row">
  <label for="article_featured">Publish:</label>
    <input type="checkbox" name="article_publish" class="form__checkbox" <?php echo (($article['Moderated'])? "checked":""); ?>>
  </div>
  <div class="row">

  <input class="form__button form__button--submit" type="submit" name="create_article_submit" value="Update">
  <input class='form__button form__button--delete' type="submit" name='create_article_delete' value="Delete">
</div>
<?php } ?>

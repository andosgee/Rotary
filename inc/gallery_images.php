<script src="./js/gallery.js"></script>
<div class="gallery">
  <?php
  $tbl_images = get_from_table('tbl_gallery', '`GID` IS NOT NULL');

  foreach ($tbl_images as $x){
    if($x['Moderated'] == 1){
      $image = $x['ImageName'];
      echo "<img src='$image'>";
    }
  }

  // $dir = './ass/gallery/'; //Image directory
  // $images = glob($dir . "*.{jpg,jpeg,png,JPG,JPEG,PNG}", GLOB_BRACE);
  //
  // foreach ($images as $i) {
  //   printf("<img src='$i'>");
  // }
  ?>
</div>

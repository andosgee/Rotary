<script src="./js/gallery.js"></script>
<div class="gallery">
  <?php
  $dir = './ass/gallery/'; //Image directory
  $images = glob($dir . "*.{jpg,jpeg,png}", GLOB_BRACE);

  foreach ($images as $i) {
    printf("<img src='$i'>");
  }
  ?>
</div>

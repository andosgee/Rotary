<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css"> <!-- Stylesheet -->
  <?php include './inc/depends.php'; ?>
  <title>Gallery</title>

  <!-- Javascript -->
  <script src="./js/depends.js"></script> <!-- JS Global -->
  <script src="./js/section-expand.js"></script> <!-- Section Expand -->
  <script src="./js/gallery-view.js"></script> <!-- Section Gallery View -->
  <!-- End of Javascript -->
</head>
<body>
  <?php
    include './inc/nav.php';
    include './inc/title.php';
   ?>

   <div class="gallery column">
     <div class="gallery__section column" id="exampleSection">
      <!-- 'example' will be replaced with var sectionID -->
      <div class="row">
        <button class="gallery__previous hidden" id="gallery__previous" onclick="previousImage()">&#8678;</button>

        <h2 class="gallery__title">Section Title</h2>

        <button class="gallery__next hidden" id="gallery__next" onclick="nextImage()">&#8680;</button>

        <button class="gallery__expand" id="gallery__expand" onclick="toggleExpand('gallery__expand')">&#9650;</button> <!-- Arrow -->

       <button class="gallery__close hidden" id="gallery__close" onclick="toggleGalleryView('exampleSection')">&#10005;</button>
      </div>

      <div class="gallery__items row">
          <div class="gallery__item column">
            <img class= "gallery__image"src="./media/example.jpg" alt="Example Image" onclick="toggleGalleryView('exampleSection')">
            <p class="gallery__description">Short Description</p>
          </div>
        </div>

      <h3 class="gallery__sectionEnd">End of Section</h3>
   </div>

   <?php include './inc/footer.php'; ?>

</body>
</html>

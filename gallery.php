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
    <div class="gallery__section column">
      <div class="row">
        <h2 class="gallery__title">Section Title</h2>
        <span class="gallery__expand">&#9650;</span> <!-- Up Arrow -->
      </div>

      <div class="column">
        <div class="gallery__item column">
          <img class= "gallery__image"src="./media/example.jpg" alt="Example Image">
          <p class="gallery__description">Short Description</p>
        </div>

        <div class="gallery__item column">
          <img class= "gallery__image"src="./media/example.jpg" alt="Example Image">
          <p class="gallery__description">Short Description</p>
        </div>

        <div class="gallery__item column">
          <img class= "gallery__image"src="./media/example.jpg" alt="Example Image">
          <p class="gallery__description">Short Description</p>
        </div>

        <div class="gallery__item column">
          <img class= "gallery__image"src="./media/example.jpg" alt="Example Image">
          <p class="gallery__description">Short Description</p>
        </div>

      </div>

      <h3 class="gallery__sectionEnd">End of Section</h3>
    </div>
   </div>

   <?php include './inc/footer.php'; ?>

</body>
</html>

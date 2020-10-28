<!DOCTYPE html>
<div class="about column">
  <div class="about__heading column">
    <h1 class="about__title">About Us</h1>
    <span class="underline"></span>
    <span class="underline"></span>
  </div>
  <div class="about__main">
    <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis provident eligendi laboriosam tenetur ratione dolorem tempora, temporibus nisi, ipsam voluptate. Odit tempore, reprehenderit perferendis architecto recusandae officia earum odio harum, sunt delectus rem! Totam eos laboriosam aliquid veniam quam porro!</p>
  </div>
  <div class="about__main">
    <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis provident eligendi laboriosam tenetur ratione dolorem tempora, temporibus nisi, ipsam voluptate. Odit tempore, reprehenderit perferendis architecto recusandae officia earum odio harum, sunt delectus rem! Totam eos laboriosam aliquid veniam quam porro!</p>
  </div>
  <script src="./js/card-expand.js"></script>
  <div class="card-section column">
    <div class="card row">
      <div class="card__head" onclick="expandCard(1)">
        <h3 class="card__title">Our Work</h3>
        <img src="./media/articles/1.jpg" alt="Card Image" class="card__image">
      </div>
      <div class="card__body" onclick=(window.location.href='./articles.php')>
        <p class="card__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quos officia vel dolores, voluptate fugiat
        </p>

        <a class="card__link" href="#">Learn More...</a>
      </div>
    </div>

    <div class="card row">
      <div class="card__head" onclick="expandCard(2)">
        <h3 class="card__title">Our Mission</h3>
        <img src="./media/articles/2.jpg" alt="Card Image" class="card__image">
      </div>
      <div class="card__body" onclick=(window.location.href='./about.php')>
        <p class="card__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quos officia vel dolores, voluptate fugiat
        </p>

        <a class="card__link" href="#">Learn More...</a>
      </div>
    </div>

    <div class="card row">
      <div class="card__head" onclick="expandCard(3)">
        <h3 class="card__title">Come Help!</h3>
        <img src="./media/articles/3.jpg" alt="Card Image" class="card__image">
      </div>
      <div class="card__body" onclick=(window.location.href='./signup.php')>
        <p class="card__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quos officia vel dolores, voluptate fugiat
        </p>

        <a class="card__link" href="#">Learn More...</a>
      </div>
    </div>
  </div>


</div>

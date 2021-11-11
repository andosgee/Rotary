<!DOCTYPE html>
<div class="about column">
  <div class="about__heading column">
    <h1 class="about__title">About Us</h1>
    <span class="underline"></span>
    <span class="underline"></span>
  </div>
  <div class="about__main">
    <h2 class="about__title">Origins of Rotary</h2>
    <p class="info">
      In 1905, Paul Harris, a young lawyer in Chicago, met with three other single businessmen with the idea of forming a club different
      from the others.  He proposed that this club be based on ‘a very simple plan of mutual cooperation and informal friendship such as
      all of us had once known in our villages’.
      <br>
      <img class="about__image" src="./media/Paul_Harris.jpg" alt="Paul Harris">
      <br>
      These gentlemen agreed to met again in two weeks, and to bring along other like-minded people who might be interested.  The plan
      was that they should meet in each other’s offices in turn and thus the name ‘Rotation Club’ was suggested.  This quickly got shortened
      to ‘Rotary Club’ and that name has carried forward to this day.
      <br>
      <br>
      The movement spread rapidly and by 1921 had reached New Zealand.  Two clubs were formed here that year – in Auckland and Wellington.
      Today, there are some 250 clubs and 7000 members in NZ and the Pacific Islands; and 1.2million Rotarians in 200 countries around the world.
    </p>
  </div>
  <div class="about__main">
    <h2 class="about__title">Rotary as a Service Organisation</h2>
    <p class="info">
      Rotary was the first service club organisation in the world.  The Rotary symbol is a common sight at the entrance to towns, at heritage parks
      and walkways, and Rotary clocks display the time in many centres. <b>IMAGE HERE</b>
      <br>
      <br>
      What is less known is Rotary’s extraordinary range of community support, the activities and organisations it has established, and the assistance
      provided around the world.
      <br>
      <br>
      For example, in New Zealand, Rotary helped set up and/or initially funded the Crippled Children’s’ Society (now CCS), Outward Bound, Milk in
      Schools, the first Karitane Hospital, Birthright, Blood Transfusion Service, VSA and many others.  Internationally, Rotary was involved in
      starting the United Nations, supports (along with the Gates Foundation) the elimination of Polio, and participates in many projects in Africa.
      <br>
      <img class="about__image" src="./media/theme.png" alt="2021 theme">

    </p>
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

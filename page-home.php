<?php
/*
Template Name: Home Page
 */

get_header();
?>

  <!-- HERO
  ============================================== -->
        <header class="logo pb-5 text-center" id="header-wrapper">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/embrace_color.png" alt="logo" class="animated rollIn" />
        </header>

	<!-- ABOUT
  ============================================== -->
    <section id="about" class="py-5">
          
      <div class="container py-5">
        <div class="row">
          <div class="col-sm-8">
            <div class="col-sm-10 py-5 px-5" id="about-box">
              <div class="row">
                <div class="col-sm-6">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/meghan.jpeg" class="rounded-circle headshot img-fluid ml-5">
                </div>
                <div class="col-sm-6 about-title">
                  <h2>About</h2>
                </div>
              </div>
              <p class="pt-4">A salon is historically the exchange of ideas surrounding art or academics. The Embrace Your Sexuality salons create a space for women to share stories, concepts, and perspectives on sexual empowerment in a culture that historically has told us we are sexual objects. We have speakers sharing about body positivity, being “desirable”, sex and spirituality, and prioritizing our sexual experience along with many other aspects.</p>
              <h5 class="pt-2">About Meghan Smith</h5>
              <p>Meghan grew up in East Tennessee and realized at a young age that society places shame on women’s sexual expression and pleasure. She earned an MA in Sexuality Studies at SFSU; her thesis focuses on how abstinence-only education does not prepare people to lead healthy sexual lives. She has also interned with Planned Parenthood and The Family Resource Agency.</p>

              <ul>
                <li>
                  <a href="#facebook">
                    <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="#instagram">
                    <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="#twitter">
                    <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>

              <h6 class="pt-4">News & Updates</h6>
              <input type="text" placeholder="Your Email Address" class="px-2">
              <a class="btn btn-outline-dark mb-1 btn-sm">Sign Up</a>

            </div><!-- col -->
          </div><!-- col -->
          <div class="col-sm-4">
            <div class="wow bounceInRight" data-wow-delay="0.15s">
             <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pod.png" class="pod">
            </div>
            <div class="wow bounceInUp mt-5" data-wow-delay="0.15s">
              <p class="bounce-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </section>


<!-- EVENTS
  ============================================== -->
  <section id="events">
    <div class="container py-5">
      <h2 class="mt-5 text-center">Events</h2>
      <hr class="title-hr">

  <!-- Event One -->
      <div class="row py-4">
        <div class="col-md-5">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-7">
          <h3>Event One</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class="btn btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Event Two -->
      <div class="row py-4">
        <div class="col-md-5">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-7">
          <h3>Event Two</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
          <a class="btn btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Event Three -->
      <div class="row py-4">
        <div class="col-md-5">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-7">
          <h3>Event Three</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
          <a class="btn btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- container -->
  </section>


<!-- SPEAKERS
  ============================================== -->
<section id="speakers" class="py-5">
  <div class="container py-5">
   <h2 class="text-center">Speakers</h2>
              <hr class="white-hr">
  <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <!-- Trigger/Open The Modal -->
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="" id="speaker1">
          <h3 class="pt-3">Airius Godfrey</h3>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="" id="speaker2">
          <h3 class="pt-3">Laura Millar</h3>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="" id="speaker3">
          <h3 class="pt-3">Noelle Neglia</h3>
        </div>
      </div>

<!-- SPEAKER MODALS
  ============================================== -->
<div id="myModal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content text-center">
      <span class="close">&times;</span>
      <img class="modal-brd mx-auto" src="http://meghansmith.local/wp-content/uploads/2018/04/19-top.png">
      <h4>About Airias</h4>
      <p>Airias is a practitioner of Sacred Sexual Union and a student of School of Feminine Transformation and The Progressive Love Movement.  She believes in using the art of sexual healing to learn how to trust oneself and the other and how good loving is good for you and your relationship. Through the healing powers of touch, intimacy, and sexuality, a good sex life has many physical, emotional, and relational health benefits.</p>
      <img class="modal-brd mx-auto" src="http://meghansmith.local/wp-content/uploads/2018/04/19-bottom.png">
  </div>
</div>

<div id="myModal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4 class="my-3">About Laura</h4>
    <p>Laura works as the Sexual Health Services Program Coordinator, at the LightHouse for the Blind in San Francisco.  She graduated from San Francisco State University with a Masters of Public Health and a Masters of Human Sexuality.  Laura’s current research focuses on how people who are blind and low-vision learn about and navigate sex and intimate relationships.  Through her work at the LightHouse, she offers workshops, trainings, and in-services for individuals who are blind or low vision, their family members, and the organizations that serve them, ensuring that sexual health information and services are comprehensive, inclusive, and accurate.</p>
  </div>
</div>

<div id="myModal3" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4 class="my-3">About Noelle</h4>
    <p>Noelle is originally from NYC. She's a former actress, singer, and dancer by profession, although she will always be those things at heart. These days she's synthesizing her interests - experimentation with human behavior, artistic expression, personal growth, health and healing, and spirituality - through her studies of Counseling Psychology and Drama Therapy at The California Institute of Integral Studies in San Francisco. </p>
  </div>
</div>

  </div>
</section>



<?php
get_footer();

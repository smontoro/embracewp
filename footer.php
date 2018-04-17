<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Embrace
 */

?>



    <!-- Custom Script -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.bundle.min.js"></script>

    <!-- Wow JS -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/wow.min.js"></script>
    <script> new WOW().init();</script>	

    <!-- CONTACT
  ============================================== -->
<section id="contact" class="py-5">
  <div class="container py-5">
    <div class="col-sm-6 mx-auto">
      <h3>Get In Touch</h3>
      <input type="text" placeholder="Name" class="form-control my-2">
      <input type="text" placeholder="Email" class="form-control my-2">
      <textarea placeholder="Your Message" class="form-control my-2"></textarea>
      <button class="btn btn-dark">Send</button>
    </div>
  </div>
</section>


<!-- FOOTER
  ============================================== -->
  <footer class="py-5">
    <div class="container-flex text-center">
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

      <hr class="container mt-5">

      <div class="col-sm-4 mx-auto" >
      <h6 class="pt-4 text-white">News & Updates</h6>
        <input type="text" placeholder="Your Email Address" class="my-3 form-control text-center">
        <a class="btn btn-outline-light text-white mb-1 btn-sm">Sign Up</a>
      </div>

    </div>
   </footer>

    <footer>
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Meghan Smith 2018</p>
      </div>
      <!-- /.container -->
    </footer>



<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage creotopi
 * @since creotopi
 */
?>
          
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
<script>
   $('.carousel.carousel-slider').carousel({full_width: true});
</script> 
<script>
  $(".button-collapse").sideNav(); 
</script>
<script src="<?php bloginfo('template_url'); ?>/js/particle-network.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
<script type="text/javascript" >
  $(document).ready(function(){
    $(document).scroll(function(e){     
      var curScroll = $(window).scrollTop();
      var docHeight = $(document).height();
      var winHeight = $(window).height();     
      if(curScroll >= (docHeight - winHeight)*0.2)
      {
        $('#first').fadeOut().hide();
        $('#second').fadeIn().show();
      }
      else
      {
        $('#first').fadeIn().show();
        $('#second').fadeOut().hide();
      }        
      });
  });
</script>
<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/waypoints.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
<script>
  $(document).ready(function() {
    $('a[href^="#"]').click(function(event) {
      var id = $(this).attr("href");
      var offset = 60;
      var target = $(id).offset().top - offset;

      $('html, body').animate({scrollTop:target}, 1000);
      event.preventDefault();
    });
  });
</script> 
</body>
</html>

<?php wp_footer(); ?>
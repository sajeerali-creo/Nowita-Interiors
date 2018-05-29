 <?php
/* Template Name: moreworks */
?>
<?php get_header(); ?>  

<!-- Banner -->  
  <div class="row small" id="banner">
      <!-- header first-->
      <header id="first">
        <div class="container">
          <div class="logo2 scrollpoint sp-effect6"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" class="h-40"></div>
          <div class="menu2">
            <ul>
              <li><a href="index.html"><i class="zmdi zmdi-chevron-left"></i> Back</a></li>
            </ul>
          </div>
        </div>
      </header>
      <!-- particle -->
     <div id="particle-canvas"></div>
  </div>

<!--Creatives-->
<div class="row w-detail" id="creatives">
    <div class="container">
            <div class="row">
              <div class="col s12"><h2><span>Nowita</span> Creatives</h2></div>
            </div>
            <?php
              query_posts(array('category_name'=>'creatives-1'));
              while ( have_posts() ) : the_post();
            ?> 
            <div class="col s6 m6 l4 grey lighten-3 works">
              <div class="over">
                <h5><?php echo get_the_title(); ?></h5>
                <br>
                <button class="waves-effect waves-orange"><a href="<?php the_permalink();?>">Details</a></button>
              </div>
              <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
            </div>
                <?php
              endwhile;
            ?>

   </div>
</div>  

<div class="footer">
  <span>Copyright © 2016. Nowita Interiors All rights reserved&nbsp;
  Designed BY <a href="http://www.creotopi.com/">www.creotopi.com</a>
  </span>
</div>    
    
<?php get_footer(); ?>

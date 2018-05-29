<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php get_header(); ?>

<section class="bg-detail">
  
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="box-detail">
            <div class="col s12 m8 l8">
               <br>
              <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
              <br><br><br><br>
              <!-- each image -->
                <div>
                
                  <div class="each-pic">
                         <div id="primary" class="content-area">
                              <div id="content" class="site-content" role="main">
                           
                                <?php /* The loop */ ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                           
                                  <?php get_template_part( 'content', get_post_format() ); ?>
                                 
                           
                                <?php endwhile; ?>
                           
                              </div><!-- #content -->
                            </div><!-- #primary -->
                       </div>
                </div>
            </div>
            <div class="col s12 m4 l4 border-left">
              <h3><?php echo get_the_title(); ?></h3>
              <span><i class="zmdi zmdi-calendar-alt"></i>&nbsp;&nbsp;<?php the_time('l, F jS, Y') ?></span>
              <button class="back-bt waves-effect waves-orange"><a href="index.html">Back</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>

</section>
<?php get_footer(); ?>

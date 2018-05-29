 <?php
/* Template Name: Home */
?>
<?php get_header(); ?>  


<!-- header -->
<div id="second">
  <div class="container">
    <div class="sec-logo">
      <i><a href="#banner"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg"></a></i>
    </div>
    <div class="sec-menu">
      <ul>
        <li><a href="#abt-novita">Nowita</a></li>
        <li><a href="#service">Service</a></li>
        <li><a href="#creatives">Creatives</a></li>
        <li><a href="#showcase">Showcase</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#contact">tuch with us</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse">
        <i class="zmdi zmdi-menu"></i>
      </a>
    </div>
  </div>
</div>

<!-- Banner -->  
  <div class="row banner" id="banner">
      <!-- header first-->
      <header id="first">
        <div class="container">
          <div class="logo scrollpoint sp-effect6"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg"></div>
          <div class="menu">
            <ul>
              <li><a href="#abt-novita">Nowita</a></li>
              <li><a href="#service">Service</a></li>
              <li><a href="#creatives">Creatives</a></li>
              <li><a href="#showcase">Showcase</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#contact">tuch with us</a></li>
            </ul>
          </div>
        </div>
      </header>


      <div class="container">
    <!-- text -->
      <div class="txt">
        <div class="logo-mobile"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg"></div>
        <h1 class="scrollpoint sp-effect1">your design ideas in stone</h1>
        <p class="scrollpoint sp-effect1">Simple design techniques transform dull, empty-looking spaces into<br> homes people can’t wait to move into. We show you how.</p>
        <button class="waves-effect waves-orange scrollpoint sp-effect5">
          <a href="#abt-novita">Go</a>
        </button>
      </div>
<!-- service -->
      <div class="box-over-lap" id="service">
        <div class="box box-tex">
          <a href="#" class="hvr-shutter-out-vertical">
              <i class="icon-architech"></i>
              <h2>Architectural Designing</h2>
          </a> 
        </div>
        <div class="box2 box-tex">
          <a href="#" class="hvr-shutter-out-vertical">
              <i class="icon-3d"></i>
              <h2>3D Visualising</h2>
          </a> 
        </div>
        <div class="box3 box-tex">
          <a href="#" class="hvr-shutter-out-vertical">
              <i class="icon-acp"></i>
              <h2>Interior and acp contracting</h2>
          </a> 
        </div>
        <div class="box4 box-tex">
          <a href="#" class="hvr-shutter-out-vertical">
              <i class="icon-studio"></i>
              <h2>Architectural studio</h2>
          </a> 
        </div>
      </div>
    </div>

      <!-- particle -->
     <div id="particle-canvas"></div>
  </div>


<!--About-->
<section id="abt-novita">
  <div class="container">
    <div class="row">
      <div class="col s12 m10 l10">
        <h3>About <span>Nowita</span></h3>
        <p class="scrollpoint sp-effect5">We are a group of designers who work in line with the clients resources to achieve the clients design intent. The leader of the whole process is the Managing Partner of the company,  Nowita interiors offers complete design & build solution and was established in the year 2012 as an interior design company in Kerala, India.</p>
      </div>
      <div class="col s12 m2 l2 hide-on-small-only">
        <i class="icon-nowita"></i>
      </div>
    </div>
  </div>
</section>
 
<!--Creatives-->
<div class="row" id="creatives">
      <div class="row mg0">
        <!-- works -->
        <?php
          query_posts(array('category_name'=>'creatives-1','posts_per_page' => 6));
          while ( have_posts() ) : the_post();
        ?> 
        <a href="<?php the_permalink();?>">      
          <div class="col s6 m6 l4 grey lighten-3 works">
            <div class="over">
              <h5><?php echo get_the_title(); ?></h5>
              <br>
              <button class="waves-effect waves-orange"><a href="<?php the_permalink();?>">Details</a></button>
            </div>
            <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
          </div>
          </a>
        <?php
          endwhile;
        ?>
      </div>
    <div class="row margin0">
        <a href=" http://nowitainteriors.com/work-detail/" class="waves-effect waves-orange but-normal">More</a>
    </div>

</div>  
    
<!--Showcase-->    
<div class="showcase" id="showcase">
    <div class="container">
        <div>
            <h2 class="scrollpoint sp-effect1"><span>Nowita’s</span> Work Showcase</h2>
            <p class="scrollpoint sp-effect5">Divers Project Expertise</p>
        </div>
        <div class="showcae_row">
          <div class="row">
            <?php
            query_posts(array('category_name'=>'showcase','posts_per_page' => 6));
            while ( have_posts() ) : the_post();
            ?>        
              <div class="col s6 m4 l4 show-box">
              <?php the_post_thumbnail('full',array("class"=>"img_fit materialboxed")); ?>
              </div>
           <?php
              endwhile;
           ?>
          </div>
        </div>
    </div>
</div>    

<div class="clients" id="clients">
    <div class="container">
        <div>
            <h2 class="scrollpoint sp-effect1"><span>Nowita’s</span>Clients We’re in love with</h2>
            <p class="scrollpoint sp-effect5">Outstanding Value</p>
            <br><br>
        </div>
        <div class="showcae_row">
        <div class="row">
            <div class="carousel carousel-slider h-140" data-indicators="true">
            <div class="carousel-item" href="#one!">

            <?php
            query_posts(array('category_name'=>'clients1','posts_per_page' => 1));
            while ( have_posts() ) : the_post();
            ?>  
                <div class="client-pic">
                  <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
                </div>
                <div class="client-msg">
                    <i class="icon-qout"></i>
                    <?php the_content(); ?>
                    <h3><?php echo get_the_title(); ?></h3>
                </div>
            <?php
            endwhile;
            ?>

            </div>
            <div class="carousel-item" href="#two!">
                <?php
                query_posts(array('category_name'=>'clients2','posts_per_page' => 1));
                while ( have_posts() ) : the_post();
                ?>  
                    <div class="client-pic">
                      <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
                    </div>
                    <div class="client-msg">
                        <i class="icon-qout"></i>
                        <?php the_content(); ?>
                        <h3><?php echo get_the_title(); ?></h3>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
            <div class="carousel-item" href="#three!">
              <?php
              query_posts(array('category_name'=>'clients3','posts_per_page' => 1));
              while ( have_posts() ) : the_post();
              ?>  
                  <div class="client-pic">
                    <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
                  </div>
                  <div class="client-msg">
                      <i class="icon-qout"></i>
                      <?php the_content(); ?>
                      <h3><?php echo get_the_title(); ?></h3>
                  </div>
              <?php
              endwhile;
              ?>
            </div>
            <div class="carousel-item" href="#four!">
              <?php
                query_posts(array('category_name'=>'clients4','posts_per_page' => 1));
                while ( have_posts() ) : the_post();
                ?>  
                    <div class="client-pic">
                      <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
                    </div>
                    <div class="client-msg">
                        <i class="icon-qout"></i>
                        <?php the_content(); ?>
                        <h3><?php echo get_the_title(); ?></h3>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
          </div>
        </div>
        </div>
    </div>
</div>
  
<!-- Footer section fo the website -->
<footer id="contact">
    <div class="row margin-bt-none">
        <div class="col s12 m6 l6 padd0">
            <div class="box-left">
                <h2 class="scrollpoint sp-effect1">Tuch with Us</h2>
                <p class="scrollpoint sp-effect5">If you would like to obtain more information about our services.</p>
                <br>
                <img src="<?php bloginfo('template_url'); ?>/images/logo_footer.svg">
                <ul>
                    <li>Nowita Interiors</li>
                    <li>Kunnummal, edavanna,malappuram.</li>
                    <li>P. O. Box 676541</li>
                    <li><i class="material-icons">mail</i>&nbsp;nowitagrp@gmail.com</li>
                    <li><i class="material-icons">stay_current_portrait</i>&nbsp;7736415141, 9447156759, 9447156759
9946428387 </li>
                    <li></li>
                    <li></li>
                    <li class="copyright">Copyright © 2016. Nowita Interiors All rights reserved</li>
                    <li class="copyright">Designed BY <a href="http://www.creotopi.com/">www.creotopi.com</a></li>
                </ul>
                <br>
                <div class="social">
                  <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                  <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                  <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                  <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                  <a href="#"><i class="zmdi zmdi-behance"></i></a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6 padd0 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d17127.34407644106!2d55.16327426073675!3d25.099313616785935!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sae!4v1483870950239" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</footer>    
<?php get_footer(); ?>

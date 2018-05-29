<?php
/*
Template Name: Search Page
*/
?>
<?get_header(); ?>


<section class="home">

	<div class="container relative-box">
		<a href="https://www.behance.net/sajfolio" target="_blan"><div class="m-circle"><i class="zmdi zmdi-behance"></i></div></a>
		<div class="col-xs-12">
			<div class="row">
				
				
					<h1>About Me</h1>
					<p>I am Web and UX designer co-working with the greatest folks in the digital field. I design, develop and provide top-notch storytelling digital solutions improving your daily business.</p>
			
			
				
			</div>
			
			
		</div>
	</div>
</section>


 <section class="About content-area" id="primary" >
 
<div class="container">

	
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	
</div>
</div>


<?php get_footer(); ?>

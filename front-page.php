<?php
/**
 * The main template file.
 *
 */

get_header('front'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
				// conditional logic to migrate to custom teplate part on user role
				if ( current_user_can( 'pc_user') ) :
					get_template_part( 'template-parts/content', 'portfolio-company' );
				endif; 
			?>

			<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

        <section class="landingpage">
            <div class="greeting-wrapper">
                <h1 class="greeting-header"><span class="blue-font">Hi!</span> I'm Vivian.</h1>
                <div class="greeting-content wrap">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="greeting-content-wrapper"><?php the_content(); ?></div>
					<?php endwhile; ?>
					<?php endif; ?>                  
					</div>

				
				<form action="contact-me-2">
				<button onClick="window.location='contact-me.php';" class="contact-button">Get In Touch</button>
				</form>
            </div>
        </section>

		<section class="featured-properties">

			<h2 class="blueheader">Featured Properties</h2>
			<div class="ft-properties container">
					<?php
					echo do_shortcode(
						'[widgets_on_pages id="Featured Properties"]'
					);
					?>
			</div>
		</section>

        <section class="client-review">

            <h2 class="blueheader">From my Clients</h2>
            
            <div class="review-wrapper">
                <div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true}'>
                    <?php // Display blog posts on any page @ https://m0n.co/l
                    $temp = $wp_query; $wp_query= null;
                    $wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <div class="carousel-cell">
                        <div class="client-quotes">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/gray-quot.png" alt="Gray Quotations">
                        <?php the_excerpt(); ?>
                        <h2 class="client-name"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
  
        </section>

		<section class="contactme">
            <h2 class="whiteheader">Get In Touch</h2>
            <p class="about-content">Please feel free to contact me with any real estate questions you may have and I'll be in touch with you soon!</p>
            <form action="contact-me-2">
                <button class="calltoaction">Get In Touch</button>
            </form>
        </section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
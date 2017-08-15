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
                    <p>I'm a real estate matchmaking expert based in Vancouver. Here you can search for your next home and get to know a little about me. Whether you're selling or buying your next home, let's get in touch to start your journey!</p>
                </div>
				<form action="contact-me-2">
				<button onClick="window.location='contact-me.php';" class="contact-button">Get In Touch</button>
				</form>
            </div>
        </section>

		<section class="featured-properties container">

			<h2 class="blueheader">Featured Properties</h2>
			<div class="ft-properties">
					<?php
					echo do_shortcode(
						'[widgets_on_pages id="Featured Properties"]'
					);
					?>
			</div>
		</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
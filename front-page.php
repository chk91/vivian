<?php
/**
 * The main template file.
 *
 */
 /* Template Name: Welcome */ 

get_header('front'); ?>
<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/build/js/renewal-funds.min.js"></script>
<?php wp_enqueue_script( 'jquery' );?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

	<header class="entry-header">
		<!--<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>-->
	</header><!-- .entry-header -->

	<div class="entry-content">
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
	</div><!-- .entry-content -->
</article><!-- #post-## -->

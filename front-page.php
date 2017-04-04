<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

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

        <section class="landingpage container">
            <div class="greeting-wrapper">
                <h1 class="greeting-header"><span class="blue-font">Hi!</span> I'm Vivian.</h1>
                <div class="greeting-content">
                    <p>I'm a real estate matchmaking expert based in Vancouver. Here you can search for your next home and get to know a little about me. Whether you're selling or buying your next home, let's get in touch to start your journey!</p>
                </div>
            </div>

        </section>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

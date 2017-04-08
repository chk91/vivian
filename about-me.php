<?php /* Template Name: AboutMe */ 
get_header();
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

    <p>about-me.php</p>
	<div class="entry-content">
        <?php 
        if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        }  ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
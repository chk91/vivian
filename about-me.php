<?php /* Template Name: AboutMe */ 
get_header();
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

        <h2 class="blueheader">Meet Vivian</h2>

        <section class="meet">

            <?php 
            if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }  ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="intro-content"><?php the_content(); ?></div>
<?php endwhile; ?>
<?php endif; ?>            
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

        <section class="social">
            <h2 class="blueheader">Let's Get Social</h2>
            <p class="about-content">Find me on social media for the latest updates on the real estate market!</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/vivian.yu.58">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/in/vivianyu1/">
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/vivianyurealty/?hl=en">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </section>

        <section class="contactme">
            <h2 class="blueheader">Get In Touch</h2>
            <p class="about-content">Please feel free to contact me with any real estate questions you may have and I'll be in touch with you soon!</p>
            <form action="contact-me-2">
                <button class="contact-button">Get In Touch</button>
            </form>

        </section>
        
	</div><!-- .entry-content -->
    <link rel="stylesheet" href="/path/to/flickity.css" media="screen">
    <script src="/path/to/flickity.pkgd.min.js"></script>
</article><!-- #post-## -->

<?php get_footer(); ?>
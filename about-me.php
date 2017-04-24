<?php /* Template Name: AboutMe */ 
get_header();
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

    <p>about-me.php</p>
	<div class="entry-content">

        <h2 class="blueheader">Meet Vivian</h2>

        <section class="meet">
            <?php 
            if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }  ?>

            <p class="about-content">As a realestate matchmaking expert, I am dedicated to selling your house or finding the fream home that your are searching for. Check out the testimonials of the wonderful clients that I've worked with as well as my latest activities on social media. Please call or send me a note if you have and questions. I'd love to hear from you!</p>
            
        </section>

        <section class="client-review">

            <h2 class="blueheader">From my Clients</h2>
            
            <?php
            global $more;
            $more = 0;
            query_posts('cat=15');
            if(have_posts()) : while(have_posts()) : the_post();
            ?></p>
            <p><a href=&amp;quot;<?php the_permalink(); ?>&amp;quot;>
<?php get_template_part( 'template-parts/content', 'AboutMe' ); ?>            <p><?php
            endwhile;
            endif;
            wp_reset_query();
            ?>

        </section>

        <section class="social">
            <h2 class="blueheader">Let's Get Social</h2>
            <p class="about-content">Find me on social media for the latest updates on the real estate market!</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/vivian.yu.58">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
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
            <button class="contact-button">Get In Touch</button>
        </section>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
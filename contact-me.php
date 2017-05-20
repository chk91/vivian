<?php /* Template Name: ContactMe */ 
get_header();
?>

<h2 class="blueheader">Contact</h2>

<p class="contact-para container"> Thank you for visiting my website. Whatever your real estate needs, please don't hesistate to contact me!</p>

<div class="contact-info-wrapper container">

        <div class="contactMe-info">
            <i class="fa fa-building" aria-hidden="true"></i>
            <p> Oakwyn Realty Ltd.</p>
        </div>

        <div class="contactMe-info">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p>3195 Oak Street, Vancouver, BC, V6H 2L2</p>
        </div>

        <div class="contactMe-info">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p>604-754-8989</p>
        </div>

        <div class="contactMe-info">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p>vyu@oakwyn.com</p>
        </div>

</div>

<div class="container">
<?php
  echo do_shortcode(
    '[contact-form-7 id="63" title="Contact form 1"]'
  );
?>
</div>

<?php get_footer(); ?>
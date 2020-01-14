<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header( $name = null ); ?>

<section class="wrapper">
  <div class="container">
    <h1><?php the_title(); ?></h1>

    <?php get_template_part( 'includes/section', 'content' ) ?>
  </div>
</section>

<?php get_footer( $name = null ); ?>
This is the contact us template.

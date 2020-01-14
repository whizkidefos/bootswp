<?php get_header( $name = null ); ?>

<section class="wrapper">
  <div class="container">

    <h3>Sowing Results For: "<?php echo get_search_query(); ?>"</h3>

    <h1><?php echo single_cat_title( $prefix = '', $display = true ) ?></h1>
    <hr>

    <?php get_template_part( 'includes/section', 'archive' ) ?>

    <?php
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
    	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    	'format' => '?paged=%#%',
    	'current' => max( 1, get_query_var('paged') ),
    	'total' => $wp_query->max_num_pages
    ) );
    ?>

  </div>
</section>

<?php get_footer( $name = null ); ?>

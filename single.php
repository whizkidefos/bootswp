<?php get_header( $name = null ); ?>

<section class="wrapper">
  <div class="container">

    <div class="row">
      <div class="col-md-3">

          <div class="card-content px-2 py-3">
            <?php if (is_active_sidebar( 'blog-sidebar' )): ?>
              <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            <?php endif; ?>
          </div>

      </div>
      <div class="col-md-9">
        <h1><?php the_title(); ?></h1>

        <?php if(has_post_thumbnail( $post_id = null )): ?>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="Featured Image" class="img-fluid img-thumbnail mb-3" />
        <?php endif; ?>
        <br>

        <?php get_template_part( 'includes/section', 'blogpost' ) ?>
      </div>
    </div>

  </div>
</section>

<?php get_footer( $name = null ); ?>

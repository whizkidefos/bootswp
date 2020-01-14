<?php if(have_posts()): while (have_posts()): the_post(); ?>




  <div class="card mb-3">

    <div class="card-img-top">
      <?php if(has_post_thumbnail( $post_id = null )): ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="Featured Image" class="img-fluid mb-3" />
      <?php endif; ?>
    </div>

    <div class="card-body">
      <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="btn btn-default">Read More</a>
    </div>

  </div>

<?php endwhile; else: endif; ?>

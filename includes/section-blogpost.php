<?php if(have_posts()): while (have_posts()): the_post(); ?>

  <?php
  $fname = get_the_author_meta( 'first_name' );
  $lname = get_the_author_meta( 'last_name' );
  ?>
  <?php echo get_the_date(); ?>
  <small> - Posted By: <?php echo $fname; ?> <?php echo $lname; ?></small>
  <?php the_content(); ?>
  <hr>
  Categories:
  <?php
  $categories = get_the_category();
  foreach ( $categories as $cat ): ?>

    <a href="<?php echo get_category_link( $cat->term_id ); ?>" class="badge badge-dark">
      <?php echo $cat -> name; ?>
    </a>

  <?php endforeach; ?>
  Tags:
  <?php
  $tags = get_the_tags();
  if ($tags):
  foreach ( $tags as $tag ): ?>

    <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="badge badge-outline">
      <?php echo $tag -> name; ?>
    </a>

  <?php endforeach; endif; ?>

  <?php comments_template( $file = '/comments.php', $separate_comments = false ); ?>

<?php endwhile; else: endif; ?>

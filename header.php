<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php wp_head(); ?>

    <header>
      <div class="container">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'top-menu',
              'menu-class' => 'top-bar'
            )
          );
        ?>
      </div>
    </header>

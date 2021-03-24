<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="header-title-wrapper">
      <h1 class="site-title">
        <?php if ( !is_home() ): ?>
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo( 'name' ) ?>
        </a>
        <?php
        else:
          bloginfo( 'name' );
        endif;
      ?>
      </h1>
      <div class="site-description">
        <?php bloginfo( 'description' ); ?>
      </div>
    </div>

    <div class="header-nav-wrapper">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'menu_top',
          'container' => 'nav',
          'container_class' => 'top-menu',
          'container_id' => 'top-menu',
          'menu_class' => 'menu-list',
          'menu_id' => 'top-menu-list',
        ) );
      ?>
      <?php get_search_form() ?>
    </div>
  </header>

  <div class="content-area">
    <?php if ( is_search() ): ?>
    <div class="search-results-info">
      <h2 class="search-results-title">
        Search Results
      </h2>
      <p class="search-results-description">
        You searched for <b><?php the_search_query(); ?></b>
      </p>
    </div>
    <?php if ( !have_posts() ): ?>
    <p>
      Sorry, there are no posts matching that query.<br>
      Try modifying your search or going back to <a href="<?php echo home_url(); ?>">the home page</a>.
    </p>
    <?php get_search_form() ?>
    <?php
      endif;
      endif;
    ?>

    <?php if ( is_404() ): ?>
    <div class="error404-wrapper">
      <h2 class="error404-title">OUR APOLOGIES: 404 ERROR.</h2>
      <p class="error404-description">
        Sorry, we can't seem to find what you're looking for.<br>
        Try searching or going to <a href="<?php echo home_url(); ?>">the home page</a>.
      </p>
      <?php get_search_form() ?>
    </div>
    <?php endif; ?>

    <?php if ( is_archive() ): ?>
    <h2 class="archive-title">
      <?php the_archive_title(); ?>
    </h2>
    <?php endif; ?>

    <main id="main" class="site-main">
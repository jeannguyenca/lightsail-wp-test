<?php ?>
</main> <!-- .site-main -->
</div> <!-- .content-area -->

<footer class="site-footer" id="site-footer">
  <div class="category-description"><?php echo category_description(); ?></div>
  <?php
    wp_nav_menu( array(
      'theme_location' => 'menu_bottom',
      'container' => 'nav',
      'container_class' => 'bottom-menu',
      'container_id' => 'bottom-menu',
      'menu_class' => 'menu-list',
      'menu_id' => 'bottom-menu-list',
    ));
  ?>
  <div>All content © 2021 JazzIcons</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
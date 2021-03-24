<?php ?>

<article <?php post_class(); ?>>
  <h2 class="entry-title">
    <?php
      if (is_single()):
        the_title();
      else:
    ?>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
    <?php endif; ?>
  </h2>

  <div class="entry-meta">
    Posted on <?php echo get_the_date('M j Y'); ?>
  </div>

  <div class="entry-content-wrapper">
    <div class="entry-thumbnail">
      <?php if(!is_single()): ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="entry-content">
      <?php
      if (is_single()):
        the_content();
      else:
        the_excerpt();
      endif;
    ?>
    </div>

    <div class="entry-footer">
      <div class="categories-tags-wrapper">
        <span class="entry-footer-label">category:</span>
        <span class="entry-footer-items"><?php the_category( ' • ' ); ?></span>
      </div>

      <div class="categories-tags-wrapper">
        <span class="entry-footer-label">tagged:</span>
        <span class="entry-footer-items"><?php the_tags( '', ' • ' ); ?></span>
      </div>
    </div>
  </div>
</article>
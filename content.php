<article>
  <header>
    <h2>
    <?php if(is_single()): ?>
      <?php the_title(); ?>
    <?php else : ?>
      <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
    <?php endif;?>
    </h2>
    <div class="article-meta">
      <p><?php the_time('F j, Y g:i a');?> da
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php the_author()?></p>
      </a>
    </div>
  </header>
  <div class="testo-articolo">
  <?php if(is_single()): ?>
    <?php the_content(); ?>
  <?php else : ?>
    <?php the_excerpt(); ?>
  <?php endif; ?>
  <?php if(is_single()): ?>
    <?php comments_template(); ?>
  <?php endif; ?>
</div>
</article>
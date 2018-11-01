<?php get_header(); ?>
        <main class="container">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
              <?php get_template_part('content'); ?>
            <?php endwhile; ?>
            <?php else: ?>
              <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
            <?php if(is_active_sidebar('sidebar')) :?>
              <?php dynamic_sidebar('sidebar'); ?>
            <?php endif;?>
        </main>
<?php get_footer(); ?>
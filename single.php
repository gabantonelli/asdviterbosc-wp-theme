<?php get_header(); ?>
        <h1>Hello World</h1>
        <main class="container">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
              <?php get_template_part('content'); ?>
            <?php endwhile; ?>
            <?php else: ?>
              <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
        </main>
<?php get_footer(); ?>
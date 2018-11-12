<?php get_header(); ?>
<div class="container">
<div class="row pagina-intera">
  <div class="col-md-9 contenuto-principale">
        <main >
          <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
              <?php get_template_part('content'); ?>
            <?php endwhile; ?>
            <?php else: ?>
              <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
        </main>
        </div>
  <div class="col-md-3">
    <aside>
    <?php if(is_active_sidebar('sidebar')) :?>
              <?php dynamic_sidebar('sidebar'); ?>
            <?php endif;?>
    </aside>
  </div>
</div> 
</div>       
<?php get_footer(); ?>
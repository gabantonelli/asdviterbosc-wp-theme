<?php get_header(); ?>
<div class="container">
<div class="row pagina-intera">
  <div class="col-md-9 contenuto-principale">
    <main>
          <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
              <article>
                <header>
                  <h2>
                    <?php the_title(); ?>
                  </h2>
                </header>
                <div class="testo-articolo">
                  <?php the_content(); ?>
                </div>
               </article>
            <?php endwhile; ?>
            <?php else: ?>
              <p><?php __('No Page Found'); ?></p>
            <?php endif; ?>
    </main>
  </div>
  <div class="col-md-3 colonna-destra">
    <aside>
    <?php if(is_active_sidebar('sidebar')) :?>
              <?php dynamic_sidebar('sidebar'); ?>
            <?php endif;?>
    </aside>
  </div>
</div>  
</div>      
<?php get_footer(); ?>
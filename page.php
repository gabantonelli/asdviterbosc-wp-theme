<?php get_header(); ?>
        <h1>Hello World</h1>
        <main class="container">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
              <article>
                <header>
                  <h2>
                    <?php the_title(); ?>
                  </h2>
                </header>    
                <?php the_content(); ?>
               </article>
            <?php endwhile; ?>
            <?php else: ?>
              <p><?php __('No Page Found'); ?></p>
            <?php endif; ?>
        </main>
<?php get_footer(); ?>
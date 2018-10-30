<?php get_header(); ?>
        <h1>Hello World</h1>
        <main class="container">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
              <article>
                <header>
                  <h2>
                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                  </h2>
                  <div class="article-meta">
                        <p><?php the_time('F j, Y g:i a');?> da
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                          <?php the_author()?></p>
                        </a>
                  </div>
                </header>
                <?php the_excerpt(); ?>
               </article>
            <?php endwhile; ?>
            <?php else: ?>
              <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
        </main>
<?php get_footer(); ?>
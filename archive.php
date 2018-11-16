<?php get_header(); ?>
<div class="container">
    <div class="row">
            <div class="col-sm-8">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
        the_post(); ?>
                <article class="articolo-archivio">
                    <header>
                        <h2 class="titolo-archivio">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="article-meta">
                        <p><?php the_time('F j, Y g:i a'); ?> da
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author() ?></p>
                        </a>
                        </div>
                    </header>
                    <div class="testo-articolo row">
                        <div class="col-sm-4">
                            <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('home-thumb', array('class' => 'img-fluid', 'alt' => get_the_title())); ?>
                            <?php else: ?>
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/asd-viterbo-scuola-calcio-no-foto.png" alt="Nessuna immagine per il post">
                            <?php endif; ?>
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_excerpt(); ?>
                            </a>
                        </div>
                    </div>
                    </article>
                <?php endwhile; ?>
            <?php else: ?>
            <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
            </div>
            <div class="col-md-3">
                <aside>
                <?php if (is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                        <?php endif; ?>
                </aside>
            </div>
    </div>    
</div>  
<?php get_footer(); ?>
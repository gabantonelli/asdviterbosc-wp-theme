<?php get_header(); ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php bloginfo('template_directory');?>/img/slider1.jpg')">
            <div class="carousel-overlay">
              <div class="testo-carousel">
              <h3>Un campo da calcio a 9 in erba con irrigazione</h3>
              <p>Due campi da calcio a 5 in sintetico</p>
            </div>
            </div>        
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php bloginfo('template_directory');?>/img/scuola-calcio-viterbo-affiliata-ss-lazio.jpg">
            <div class="carousel-overlay">
              <div class="testo-carousel">
                <h3>Scuola calcio affiliata SS Lazio</h3>
                <p>La migliore scuola calcio della provincia di Viterbo</p>
              </div>
            </div>  
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <main class="container">
      <section>
          <?php if(have_posts()) : $contatorePost = 0;?>
            <?php while(have_posts()&&$contatorePost<=5): the_post();?>
            <?php 
            //apro la row di notizie
            if($contatorePost % 3 == 0) :?>
              <div class="row">
            <?php endif; ?>
            <div class="col-md-4">
            <article class="home-preview">
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
<a href="<?php the_permalink();?>">
<img class="img-fluid preview-immagine" src="//via.placeholder.com/4096x2304">
</a>
  <div class="preview-articolo">
    <a href="<?php the_permalink();?>">
      <?php the_excerpt(); ?>
    </a>  
</div>
</article>
            </div>   
            <?php $contatorePost++; ?>
            <?php endwhile; ?>
            <?php 
            // chiudo la linea di notizie
            if($contatorePost % 3 == 0) :?>
            </div>
            <?php endif; ?> 
            <?php else: ?>
              <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
      </main>
    </section>
    
<?php get_footer(); ?>
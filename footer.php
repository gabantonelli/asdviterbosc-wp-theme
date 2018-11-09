<footer>
    <div class="container">
        <div class="row" id="footer_links">
            <div class="col-md-3">
                <?php if(is_active_sidebar('footer-1')): ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php if(is_active_sidebar('footer-2')): ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php if(is_active_sidebar('footer-3')): ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php if(is_active_sidebar('footer-4')): ?>
                    <?php dynamic_sidebar('footer-4'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="box-copyrights">
        <div class="container">
            <p class="copyrights">Sito web realizzato da <a href="http://www.gabrielantonelli.it">Gabriel Antonelli</a><br>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?>. Tutti i diritti riservati</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
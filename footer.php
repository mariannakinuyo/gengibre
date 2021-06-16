<?php wp_footer(); ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a class="opacity" href="<?php bloginfo('siteurl'); ?>">
                    <img class="logo-footer" src="<?php bloginfo('template_url'); ?>/src/images/logo-branco.svg" alt="">
                </a>
            </div>
            <div class="col-lg-6 redes-footer justify-content-end">
                <?php
                wp_nav_menu( array( 'menu' => 'footer', 'container' => FALSE, 'menu_class' => 'menu-footer', 'menu_id' => false ) );
                ?>
                <div class="redes">
                    <a class="opacity" href=""><div class="facebook"><span></span></div></a>
                    <a class="opacity" href=""><div class="twitter"><span></span></div></a>
                    <a class="opacity" href=""><div class="whatsapp"><span></span></div></a>
                    <a class="opacity" href=""><div class="telegram"><span></span></div></a>
                </div>
            </div>
            <div class="col-lg-12">
                <p class="small">© 2020 Gengibre. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url') ?>/src/js/script.js"></script>

</body>
</html>
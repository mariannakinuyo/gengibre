<?php 
get_header();
$pageID = get_the_ID();
$page = get_post(get_the_ID());
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="bg-title" style="background-image: url(<?php bloginfo('template_url'); ?>/src/images/titulo-1.png )">
                    <h1><?php the_title(); ?></h1>
                </div>
                <article class="content-quem">
                    <?php
                    if ( has_blocks( $page->post_content ) ) {
                        $blocks = parse_blocks( $page->post_content );
                        foreach ( $blocks as $block ) {
                            echo apply_filters( 'the_content', render_block( $block ) );
                        }
                    }
                    ?>
                </article>
            </div>
        </div>
    </div>
</section>

<?php
$redes = get_field('grupo_rede_fr');
if( $redes ) {
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12 mt-4">
                <div class="auto-m">
                    <?php  
                        foreach( $redes as $rede ) {
                            $nome_rede = $rede['nome_rede'];
                            $logo_rede = $rede['logo_rede'];
                            $link_rede = $rede['link_rede'];
                    ?>
                        <a class="opacity logo-rede" href="<?php echo $link_rede; ?>" title="<?php echo $nome_rede; ?>">
                            <div class="rede-radial">
                                <img src="<?php echo $logo_rede; ?>" alt="<?php echo $nome_rede; ?>">
                            </div>
                        </a>
                    <?php
                    wp_reset_postdata(); 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<?php get_footer(); ?>
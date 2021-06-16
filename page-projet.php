<?php 
get_header();
$pageID = get_the_ID();
$page = get_post(get_the_ID());
$thumb = get_the_post_thumbnail_url();
$pageID = get_the_ID();
$destaque_projeto = get_field('frase_destaque_projeto_fr', $pageID);
?>

<section class="header-projeto">
    <div class="bg-img thumb-projeto" style="background-image: url(<?php echo $thumb ?> )"></div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="titulo-projeto">
                    <div class="bg-title" style="background-image: url(<?php bloginfo('template_url'); ?>/src/images/titulo-1.png )">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <h3><?php echo $destaque_projeto; ?></h3>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="conteudo">
                    <?php
                    if ( has_blocks( $page->post_content ) ) {
                        $blocks = parse_blocks( $page->post_content );
                        foreach ( $blocks as $block ) {
                            echo apply_filters( 'the_content', render_block( $block ) );
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
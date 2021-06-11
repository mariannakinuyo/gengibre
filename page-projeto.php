<?php 
get_header();
$pageID = get_the_ID();
$page = get_post(get_the_ID());
$thumb = get_the_post_thumbnail_url();
?>

<section>
    <div class="bg-img thumb-projeto" style="background-image: url(<?php echo $thumb ?> )"></div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="titulo-projeto">
                    <h1><?php the_title(); ?></h1>
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
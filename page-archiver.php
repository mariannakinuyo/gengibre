<?php 
get_header();
$pageID = get_the_ID();
?>

<section class="">
    <div class="bg-img bg-archive" style="background-image: url(<?php bloginfo('template_url'); ?>/src/images/archive-img.jpg)"></div>
</section>
<?php
$posts_leitura = new WP_Query( array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'tax_query'      => array(
        array(
        'taxonomy' => 'category',
        'field'    => 'id',
        'terms'    => '20',
        ),
    ),
    ) );
    
    if ($posts_leitura) {
?>
<section id="nossas-leituras" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="line-green"><?php echo get_cat_name( $category_id = 20 ); ?></h1>
            </div>
            <?php
            foreach ( $posts_leitura->posts as $post ) {
              $thumbleitura = get_the_post_thumbnail_url( $post->ID, 'full');
              $categoria = get_the_category( $post->ID )[0]->name;
              $category_id = get_cat_ID( $categoria );
              $category_link = get_category_link( $category_id );
              $link = get_permalink( $post->ID );
            ?>
                <div class="col-12 col-lg-4 pr-lg-5">
                    <div class="box-arquivo">
                        <img src="<?php echo $thumbleitura ?>" alt="">
                        <div class="text-arquivo">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php wp_reset_postdata();
            } ?>
        </div>
    </div>
</section>
<?php }
$posts_multimidia = new WP_Query( array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'tax_query'      => array(
        array(
        'taxonomy' => 'category',
        'field'    => 'id',
        'terms'    => '22',
        ),
    ),
    ) );
    
    if ($posts_multimidia) {
?>
<section id="multimidia" class="my-5 bg-img bg-arquivo" style="background-image:url(<?php bloginfo('template_url'); ?>/src/images/quadro.png)">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="line-green"><?php echo get_cat_name( $category_id = 22 ); ?></h1>
            </div>
            <?php
            foreach ( $posts_multimidia->posts as $post ) {
              $thumbmulti = get_the_post_thumbnail_url( $post->ID, 'full');
              $categoria = get_the_category( $post->ID )[0]->name;
              $category_id = get_cat_ID( $categoria );
              $category_link = get_category_link( $category_id );
              $link = get_permalink( $post->ID );
            ?>
                <div class="col-12 col-lg-4 pr-lg-5">
                    <div class="box-arquivo">
                        <img src="<?php echo $thumbmulti ?>" alt="">
                        <div class="text-arquivo">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>

            <?php wp_reset_postdata();
            } ?>
        </div>
    </div>
</section>
<?php }
$posts_textos = new WP_Query( array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'tax_query'      => array(
        array(
        'taxonomy' => 'category',
        'field'    => 'id',
        'terms'    => '24',
        ),
    ),
    ) );
    
    if ($posts_textos) {
?>
<section id="nossos-textos" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="line-green"><?php echo get_cat_name( $category_id = 24 ); ?></h1>
            </div>
            <?php
            foreach ( $posts_textos->posts as $post ) {
              $thumbtextos = get_the_post_thumbnail_url( $post->ID, 'full');
              $categoria = get_the_category( $post->ID )[0]->name;
              $category_id = get_cat_ID( $categoria );
              $category_link = get_category_link( $category_id );
              $link = get_permalink( $post->ID );
            ?>
                <div class="col-12 col-lg-4 pr-lg-5">
                    <div class="box-arquivo">
                        <img src="<?php echo $thumbtextos ?>" alt="">
                        <div class="text-arquivo">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php wp_reset_postdata();
            } ?>
        </div>
    </div>
</section>
<?php } ?>


<?php get_footer(); ?>
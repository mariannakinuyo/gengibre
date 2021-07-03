<?php get_header();

$categoria = get_queried_object();
$posts_categoria = new WP_Query(array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'cat' => $categoria->term_id,
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => -1,
  'hide_empty' => true,
));
    if ($posts_categoria) {
?>
<section id="nossos-textos" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="line-green"><?php echo $categoria->name; ?></h1>
            </div>
            <?php
            foreach ( $posts_categoria->posts as $i => $post ) {
              $thumbtextos = get_the_post_thumbnail_url( $post->ID, 'full');
              $categoria = get_the_category( $post->ID )[0]->name;
              $category_id = get_cat_ID( $categoria );
              $category_link = get_category_link( $category_id );
              $link = get_permalink( $post->ID );
            ?>
                <div class="col-12 col-lg-4 pr-lg-5">
                    <a href="<?php echo $link ?>">
                        <div class="box-arquivo">
                            <img src="<?php echo $thumbtextos ?>" alt="">
                            <div class="text-arquivo">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php wp_reset_postdata();
            } ?>
        </div>
    </div>
</section>
<?php } ?>

<?php get_footer(); ?>
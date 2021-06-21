<?php get_header() ?>

<?php while(have_posts()) { 
  $post_id = get_the_ID();
  $link = get_permalink( $post_id );
  $thumb = get_the_post_thumbnail_url( $post_id, 'full');
  $categoria = get_the_category( $post_id )[0]->name;
  $category_id = get_the_category( $post_id )[0]->term_id;
  $category_link = get_category_link($category_id);
?>

<div class="container article">
  <div class="row">
    <div class="col-12 col-lg-6 offset-lg-1">
      <article>
        <?php the_post(); ?>
          <a class="text-center" href="<?php echo $category_link ?>">
            <div class="cat-post">
              <?php echo $categoria ?>
            </div>
          </a>
          <h1><?php the_title();?></h1>
          <img src="<?php echo $thumb ?>" alt="">
          <p class="small"><?php the_post_thumbnail_caption() ?></p>
          <?php the_content(); ?>
          <div class="box-autor">
            <div class="autor-post"><?php the_author() ?></div>
            <div class="date-post"> | <?php echo get_the_date( 'j M Y' ) ?></div>
          </div>
          
      </article>
    </div>
    <div class="col-12 col-lg-3 offset-lg-1">
      <div class="sidebar-single">
        <h3>Lire la suite</h3>
        <?php
          $postID = get_the_ID();
          $posts_ultimos = new WP_Query( array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'orderby'=>'id',
            'order' => 'DESC',
            'hide_empty' => true,
            'posts_per_page' => 3,
            'post__not_in' => array($postID),
          ) );
          if( $posts_ultimos ) {
            foreach( $posts_ultimos->posts as $post ) {
              $title = get_the_title( $post->ID );
              $link = get_permalink( $post->ID );
              $thumb = get_the_post_thumbnail_url( $post->ID, 'full');
              $categoria = get_the_category( $post->ID )[0]->name;
              $linha_fina = get_field('linha_fina', $post->ID);
              $category_id = get_cat_ID( $categoria );
              $category_link = get_category_link( $category_id );
        ?>
          <div class="box-sidebar">
            <a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt=""></a>
            <a href="<?php echo $link ?>"><h4><?php echo $title ?></h4></a>
          </div>

        <?php
        } }
        ?>
        
      </div>
    </div>
  </div>
</div>

 
<?php } ?>

<?php get_footer(); ?>
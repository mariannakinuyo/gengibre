<?php get_header() ?>

<?php while(have_posts()) { ?>



<div class="container">
  <div class="row">
    <div class="col-12">
      <article>
        <?php the_post(); ?>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
          <?php the_content(); ?>
      </article>
    </div>
  </div>
</div>

 
<?php } ?>

<?php get_footer(); ?>
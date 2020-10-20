<?php get_header();?>

<div class="container">
        <main>
      

            <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('smallest')?> " class="img-fluid" alt="blog-image">

            <?php endif;?>


            <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>

                <?php the_content()?>

            <?php endwhile; endif;?>
        </main>
</div>

<?php get_footer();?>
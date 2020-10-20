<?php get_header();?>
<div class="container " >
 <main>
      

        <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>

            <?php the_content()?>

        <?php endwhile; endif;?>
  </main>
</div>
<?php get_footer();?>
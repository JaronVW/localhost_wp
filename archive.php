<?php get_header();?>

<div class="container ">
    <main>
  

        <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="card mb-04">
                <div class="card-body">
                    <h3><?php the_title()?></h3>
                    <?php the_excerpt()?>
                    <a href=" <?php the_permalink();?> " class=" btn btn-success">read more</a>
                </div>
            </div>
        
        <?php endwhile; endif;?>
    </main>
</div>

<?php get_footer();?>
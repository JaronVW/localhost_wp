<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom theme</title>
</head>
<body <?php body_class()?>>


<header>

<!-- <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="hallo " >
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
</video> -->

    <nav class="navbar  top_menu" id="navbar" > 
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )
        )?>
    </nav>

    <div class="banner_title">
        <h1><?php the_title()?></h1>
        <a href="#" >Doneer of word lid</a>
    </div>
            
</header>

<!-- <section class="info">
<p></p> -->

</section>


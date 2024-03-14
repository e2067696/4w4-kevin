<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe #1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php get_header(); ?>
        
    
 <div id="accueil" class="global">
    <section class="accueil_section">
        <h2>Accueil (h2) </h2>
        <h3> ahahahahaha (h3)</h3>
         <h4> ahahahahaha (h4)</h4>
        <h5> ahahahahaha (h5)</h5>
        <h6> ahahahahaha (h6)</h6>
        <div class="cours">
        <?php 

                if (have_posts()): the_post();

                    ?>
                    <div class="carte">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        </div>
                 
                 <?php endif; ?>
                 </div>
            <button class="bouton">clicker ici</button>
        </section>
    </div>
    
    </div>
    <div id="galerie" class="global">
        <section class="galerie_section">
            <h2>Galerie (h2)</h2>
            <h3> ahahahahaha (h3)</h3>
            <h4> ahahahahaha (h4)</h4>
            <h5> ahahahahaha (h5)</h5>
            <h6> ahahahahaha (h6)</h6>
            <blockquote class="galerie_blockquote_arriere">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut consequatur quaerat asperiores tempore velit itaque voluptate delectus a sapiente exercitationem quas molestias repudiandae earum, quis rem quod dolores beatae provident!</blockquote>
            <blockquote class="galerie_blockquote_avant">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita atque soluta ullam accusamus incidunt voluptas assumenda delectus et, ab quae nam a cum facere quidem sed, aperiam repellat eum fuga?</blockquote>

        </section>
        <?php
            get_template_part("gabarit/vague"); ?>
    </div>
    
    <?php get_footer(); ?>
</body>
</html>
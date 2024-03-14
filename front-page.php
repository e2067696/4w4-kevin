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
        <h1>front-page.php</h1>
    <div id="entete" class="global">
    <section class="entete_header">
            <h1><?php echo get_bloginfo("name"); ?></h1>
            <h2><?php echo get_bloginfo("description");  ?></h2>
            <h3> TIM-college de maisonneuve (h3)</h3>
            <button>Événement</button>
    </section>
      
    <!-- /* vague */ -->
    <?php
            get_template_part("gabarit/vague"); ?>
        
</div>
    
 <div id="accueil" class="global">
    <section class="accueil_section">
        <h2>Accueil (h2) </h2>
        <h3> ahahahahaha (h3)</h3>
         <h4> ahahahahaha (h4)</h4>
        <h5> ahahahahaha (h5)</h5>
        <h6> ahahahahaha (h6)</h6>
        <div class="cours">
        
        <?php if (have_posts()): 
            while (have_posts()): the_post(); ?>
                    <div class="carte">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
                        <!-- ajoute un lien vers l'article -->
                        <a href="<?php the_permalink(); ?>">Suite</a>
                        </div>
                    <?php endwhile;?>
                 <?php endif; ?>
                 </div>
            <button class="bouton">clicker ici</button>
        </section>
    </div>
    
    <div id="evenement" class="global diagonal">
        <section class="evenement_section">
            <h2>Événement (h2)</h2>
            <h3> ahahahahaha (h3)</h3>
            <h4> ahahahahaha (h4)</h4>
            <h5> ahahahahaha (h5)</h5>
            <h6> ahahahahaha (h6)</h6>
            <blockquote class="evenement_blockquote_arriere">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut consequatur quaerat asperiores tempore velit itaque voluptate delectus a sapiente exercitationem quas molestias repudiandae earum, quis rem quod dolores beatae provident!</blockquote>
            <blockquote class="evenement_blockquote_avant">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita atque soluta ullam accusamus incidunt voluptas assumenda delectus et, ab quae nam a cum facere quidem sed, aperiam repellat eum fuga?</blockquote>

        </section>
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
    
    <?php
        get_footer();
    ?>

</body>
</html>
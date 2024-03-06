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

</header>
<body>
    
    <div id="entete" class="global">
        <header class="entete_header">
            <nav>
              
                    <a href="#accueil">Accueil</a>
                    <a href="#evenement">Evenement</a>
                    <a href="#galerie">Galerie</a>
                    <a href="#footer">Footer</a>
                
            </nav>
            <h1>Thème du groupe #1 (h1) </h1>
            <h2>4W4-conception d'interface <span>et développement web (h2)</span></h2>
            <h3> TIM-college de maisonneuve (h3)</h3>
            <button>Événement</button>
        </header>
        
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-accueil);"></path>
            </svg>
        </div>
        
    </div>
    
    <div id="accueil" class="global">
        <section class="accueil_section">
            <h2>Accueil (h2) </h2>
            <h3> ahahahahaha (h3)</h3>
            <h4> ahahahahaha (h4)</h4>
            <h5> ahahahahaha (h5)</h5>
            <h6> ahahahahaha (h6)</h6>
            <div class="cours">
            <?php 

                // methode 1 mais qu'on utilise pas
                /* if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_title("<h3>", "</h3>");
                        echo wp_trim_words(get_the_content(),30);
                    }
                } */

                // methode 2 qu'on utilise
                if (have_posts()): 
                    while (have_posts()): the_post();
                    $titre = get_the_title();
                    
                    // trouver le sigle du cours dans le titre, trouver les 7 premiers caracteres
                    $sigle = substr($titre, 0, 7);

                    //methode 1  trop long
                    // $pos1 = strpos($titre, "(");
                    // $pos2 = strpos($titre, ")");
                    // $duree = substr($titre, $pos1, $pos2-$pos1+1);
                    // $titre = substr($titre, 7, $pos1-8);

                    //methode 2 plus court
                    $pos1 = strpos($titre, "(");
                    $duree = substr($titre, $pos1);
                    $titre = substr($titre, 7, $pos1-7);

                
                   

                    ?>
                    <div class="carte">
                        <h4><?php echo $sigle;?></h4>

                        <h3><?php echo $titre; ?> <?php echo $duree;?></h3>
                        <p><?php echo wp_trim_words(get_the_content(),30); ?></p>
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
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-footer);" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    
    <div id="footer" class="global">
        <footer>
            <h2>Footer (h2)</h2>
            <h3> ahahahahaha (h3)</h3>
            <h4> ahahahahaha (h4)</h4>
            <h5> ahahahahaha (h5)</h5>
            <h6> ahahahahaha (h6)</h6>
            <blockquote class="footer_blockquote_arriere">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut consequatur quaerat asperiores tempore velit itaque voluptate delectus a sapiente exercitationem quas molestias repudiandae earum, quis rem quod dolores beatae provident!</blockquote>
            <blockquote class="footer_blockquote_avant">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita atque soluta ullam accusamus incidunt voluptas assumenda delectus et, ab quae nam a cum facere quidem sed, aperiam repellat eum fuga?</blockquote>
            
        </footer>
    </div>
</body>
</html>
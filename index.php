<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu - La table des pirate</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
              integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css?v=<?=filemtime('./css/style.css')?>">
        <link rel="icon" type="image/png" href="./img/logo.png">
    </head>

    <body>
        <section class="section">

            <div class="container">

                <div id="bandeau">

                    <div id="titre">
                        <a href="http://www.latabledespirates.fr" target="_blank" title="Accès à notre site">
                            <figure class="image is-128x128">
                                <img src="./img/logo.png" alt="Logo de la table des pirates">
                            </figure>
                        </a>
                        <p class="mt-2">LA CARTE</p>
                    </div>

                    <div id="intro">
                        <p class="has-text-centered">Bienvenue à la table des pirates</p>
                        <p class="has-text-centered mt-2">BON APPETIT ! </p>
                    </div>

                </div>

                <?php require "./html/tapas.html";?>

                <?php require "./html/entrees.html";?>

                <?php require "./html/ravioles.html";?>

                <?php require "./html/burgers.html";?>

                <?php require "./html/moussaillon.html";?>

                <?php require "./html/desserts.html";?>

                <?php require "./html/glaces/glaces.html";?>

                <?php require "./html/glaces/sorbets.html";?>

                <?php require "./html/glaces/coupes_glacees.html";?>

                <?php require "./html/glaces/coupes_alcoolisees.html";?>

                <div id="legende">
                    <p>
                        <span class="icon has-text-success" title="Plat végétarien">
                            <i class="fas fa-leaf"></i>
                        </span> Plat végétarien
                    </p>

                    <p>
                        <span class="icon has-text-warning" title="Plat végétarien">
                            <i class="fas fa-wine-glass-alt"></i>
                        </span> L'abus d'alcool est dangereux pour la santé. A consommer avec modération
                    </p>
                </div>

            </div>

            <div id="dsi-com">
                <span>Réalisation par&nbsp;</span>
                <a class="" href="http://www.davidsensoli.com" title="DavidSENSOLI.com">
                    <figure class="image">
                        <img src="./img/logo.svg" alt="Logo DavidSENSOLI.com">
                    </figure>
                </a>
            </div>

        </section>
    </body>

</html>
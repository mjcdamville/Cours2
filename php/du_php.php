<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
        <link rel="stylesheet" href="css/test.css"/>
        
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="../php/du_php.php">Php en ligne</a></li>
                <li><a href="../php/exemple_classe.php">Exemple classe</a></li>
                <li><a href="../php/exemple_get.php">Exemple get</a></li>
                <li><a href="../php/exemple_post.php">Exemple post</a></li>
                <li><a href="../php/requete.php">Requete</a></li>                
            </ul>
        </nav>        
        <h1 id="titre">Mon site dynamique</h1>
        <?php
            $date_jour = new DateTime();
            echo "<h2> Il est ".$date_jour->format('d/m/Y h:i')."</h2>";
            
/*            On en profite pour apprendre ce qu'est un tableau
 *            Un tableau, ça sert à stocker une liste ordonnée de données
 *            On défini un tableau grâce au mot clé  array
 *            Par exemple les jours de la semaine */
             $jours_sem = array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
//           Chaque case à un index, la première case  ayant pour index 0
             echo "La première case tu tableau est ".$jours_sem [0].'<br/>';
             echo "La dernière case tu tableau est ".$jours_sem [6];
//           On fini par apprendre à faire une boucle
//           Pour afficher toutes les lignes du tableau
             echo '<ul>';
             for($cpt=0;$cpt<7;$cpt++)    // ++ ajoute 1 au compteur $cpt
             {
                 echo '<li>'.$jours_sem[$cpt].'</li>';
             }
             echo '</ul>';
        ?>
    </body>
</html>
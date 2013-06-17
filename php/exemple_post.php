<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exemple requête POST</title>
        <link rel="stylesheet" href="css/test.css"/>
        
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../php/du_php.php">Php en ligne</a></li>
                <li><a href="../php/exemple_classe.php">Exemple classe</a></li>
                <li><a href="../php/exemple_get.php">Exemple get</a></li>
                <li><a href="../php/exemple_post.php">Exemple post</a></li>
                <li><a href="../php/requete.php">Requete</a></li>
            </ul>
        </nav>
        
        <?php
            if (isset($_POST['nom'])) {
              $utilisateurs = json_decode(file_get_contents('list.json'),true);
              $utilisateurs[$_POST['pseudo']] = $_POST['nom'].' '.$_POST['prenom'];
              file_put_contents('list.json',json_encode($utilisateurs));
              echo $_POST['nom'].' '.$_POST['prenom'].' sauvegardé.<br />';              
              echo '<a href="list.json">Fichier json</a>'; 
            } else {
              echo '<form action="../php/exemple_post.php" method="POST">';
              echo '<label for="nom">Votre nom</label>';
              echo '<input name="nom" type="text" />';
              echo '<label for="nom">Votre prénom</label>';
              echo '<input name="prenom" type="text" />';
              echo '<label for="pseudo">Votre pseudo</label>';
              echo '<input name="pseudo" type="text" />';               
              echo '<input type="submit" value="valider" />';
              echo '</form>';
            }
        ?>
    </body>
</html>
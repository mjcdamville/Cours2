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
        
           // on lit le fichier json list.json avec file_get_contents et on le convertit en tableau associatif avec json_decode
           // http://fr2.php.net/manual/fr/function.json-decode.php   
           // http://fr2.php.net/manual/fr/function.file-get-contents.php
           // http://fr2.php.net/manual/fr/language.types.array.php
           
           $utilisateurs = json_decode(file_get_contents('list.json'),true);
        
            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pseudo'])) {
            
              if ( strlen($_POST['nom'])>0 && strlen($_POST['prenom'])>0 && strlen($_POST['pseudo'])>0) {  // toutes les données sont requises
                    
                    $utilisateurs[$_POST['pseudo']] = $_POST['nom'].' '.$_POST['prenom'];
                    
                    // sauvegarde des données
                    file_put_contents('list.json',json_encode($utilisateurs));
                    
                    // affichage message succès
                    echo $_POST['nom'].' '.$_POST['prenom'].' sauvegardé.<br />';              
                    echo '<a href="list.json">Fichier json</a>';   
                    
              } else {   // au moins une des données n'a pas été saisie
                         // afficher le message d'erreur
                    echo '<p class="alert alert-error">Veuillez saisir toutes les données</p>';
                    echo '<a href="../php/exemple_post.php">Retour</a>';
              }
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
              
              echo '<ul>';
              foreach($utilisateurs as $pseudo => $utilisateur)
              {
                    echo '<li><strong>'.$pseudo.'</strong> '.$utilisateur.'</li>';
              }
              echo '</ul>';
              
            }
        ?>
    </body>
</html>
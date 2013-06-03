<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Initiation programmation objet</title>
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
        <h1 id="titre">PHP - Exemple Classe</h1>
<?php

/*
 * Initiation à la programmation objet
 */

class Mamifere {
    
    public $nom;
    protected $temperature_corporelle;


    public function __construct($nom_arg, $temperature_corporelle_arg = 37) {
        $this->nom = $nom_arg;
        $this->temperature_corporelle = $temperature_corporelle_arg;
    }
    
    public function nommeToi()
    {
        echo 'Mon nom est '.$this->nom.'<br />';
    }
    
    public function donneTemperature()
    {
        echo 'Ma température est '.$this->temperature_corporelle.'<br />';
    }
}

$paul = new Mamifere('Paul');  // 37 est donné par défaut
$paul->nommeToi();
$paul->donneTemperature();
?>
<br />
<?php
$alice = new Mamifere('Alice',38);
$alice->nommeToi();
$alice->donneTemperature();
// on peut changer le nom parce que nom est public
?>
<br />
<?php
$alice->nom = 'Alicia';
$alice->nommeToi();
// on ne peut pas changer la température car $temperature_corporelle est protected

/*
$alice->temperature_corporelle = '12';
$alice->donneTemperature();
echo "planté";
*/


?>        
    </body>
</html>






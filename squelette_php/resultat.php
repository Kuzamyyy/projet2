<?php 
    $reponse = $_COOKIE['reponse']; 
    //echo $_COOKIE['reponse']; 
    //echo $_POST['choix'] ; 
    

    $reponse += $_POST['choix2'] ; 
    



    setcookie('reponse', $reponse);
?>
<!DOCTYPE html>
<body>
<?php
// Afficher le résultat
echo "<p>Votre score est de " . $reponse . " points</p>";

// Supprimer le cookie pour nettoyer les données
//setcookie("reponse", "", time()-3600);

?>
</body>
</html> 
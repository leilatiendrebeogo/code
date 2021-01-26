<?php
$db = new PDO('mysql:host=localhost;dbname=liste;' ,'root', '' );
$allliste = $db->query ('SELECT * FROM  apprenants ORDER BY id DESC');
if(isset($_POST['s']) AND !empty($_POST['s'])){
    $liste= htmlspecialchars ($_GET['s']);
    $allliste =$db->query ('SELECT * FROM apprenants WHERE nom LIKE "%' .$liste.'%" ORDER BY id DESC');
 
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <style>
    body{
     text-align:center;}</style>
    <title>Rechercher des utilisateurs</title>
</head>
<body>
    <div class="container-fluid"> 
    <div class="container">
  <div style="height:50px;text-decoration-color:white;"  >
  <h1>Rechercher un utilisateur</h1> <br> 
</div>
<div >
<form method="POST"   >
    
<section class="afficher_utilisateur">
<?php

    if($allliste-> rowCount() >0 ){
        while($liste= $allliste->fetch ()){
           
           ?>
                <p> 
                    <?= $liste['nom']; ?>
                    <?= $liste['prenom']; ?>
                    <?= $liste['naissance']; ?>
                    <?= $liste['contact']; ?>
                    <?= $liste['formation']; ?>                    
                </p>                 
           <?php
        }

    }else{
        ?>
        <p>   <h1>Aucun utilisateur trouvé</h1></p>
        <?php

    }

?>

</section>
</div>
</div>
 </div>
 </form>
</div>
</body>
</html>
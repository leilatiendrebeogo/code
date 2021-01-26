<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <title>inscription</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
           <div class="row">
                <div class="col-md-6 logo">
                    <img src="image/logo-simplon.png" alt="">
                </div>
                <div class="col-md-6 bon">
                    <form method="POST" action="recherche.php">
                       <input class="tp" type="text" placeholder="Recherche..." required>
                       <input class="tout" type="submit" value="Envoyer">
                    </form>
                   
                </div>
           </div>

            <nav class="col-md-12 bg-dark ">
                <ul>
                    <li><a class="text-white " href="liste.php">Apprenant</a></li>
                </ul>
            </nav>
           
    <!------Formulaire------>
    <div class="Bon col-md-12 mt-5">Formulaire d'inscription</div>
    <div class="main">
        <form method="POST" action="insertion.php">
            <div id="nom">
                <h2 class="nom">Nom</h2>
                <input class="nom1" type="text" name="nom" required> <br>
                
                
            </div>

            <div id="prenom">
                <h2 class="nom">Prénom</h2>                
                <input class="prenom" type="text" name="prenom" required>
                
            </div>
       
           

            <h2 class="nom">Naissance</h2>
            <input class="naissance" type="date" name="naissance" required>

            

            <h2 class="nom">Contact</h2>
            
            <input class="numero" type="text" name="contact" required>

            <h2 class="nom" name="formation">Formation</h2>
            <select class="option" name="formation" required>
                <option disabled="disableb" selected="selected" required>Choisir le domaine</option>
                <option>Etudiant</option >
                <option>Elèves</option>
                <option>Fonctionnaires</option>
                <option>Autres</option>
            </select>
            
            <div class="text-center">
                <input class="btn btn-primary" type="submit"  value="Enregistrer"/>
                <input class="btn btn-danger" type="reset" value="Effacer"/>
            </div>
        </form>
        
    </div>
    <!------Fin du Formulaire------>

     <!----Début du footer----->
     <footer class="col-md-12 bd-dark">
      <div class="container col-md-12 pour text-white text-center bg-dark mt-5" >
        <div class="n"> 
          <h2 class="p-3">Copyrigh 2020</h2>
        </div>
      </div>       
    </footer>
    <!----la fin du footer----->

        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <title>Liste</title>
</head>


<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 50px;
  
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
  margin-left: 50px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<body>
<div class="container-fluid mt-5" style="margin-left: 200px;">
    <div class="container gg-center " style="margin-left : 20px;">
      <div class="col-sm-12 mb-10  bg-Secondary  "  
      style=" border: 5px solid #652;text-decoration-color: white; padding-left:50px;border-radius: 20px;">
        <p>
        <h1 class="text-center"> Liste Des Apprenants</h1>     
      <?php   
        require_once 'connection.php';
          $reponce=$db -> query('SELECT*FROM apprenants');
          echo "<table  ><tr><td>Nom</td><td>Prenom</td><td>Naissance</td><td>Contact</td><td>Formation</td></tr>\n";
          while( $donnees =$reponce ->fetch ()){       
        echo "<tr><td>". $donnees['nom']."</td><td>".$donnees['prenom']."</td><td>".$donnees['naissance']."</td><td>".$donnees['contact']."</td><td>".$donnees['formation']."</td></tr>";
       }
       echo "</table>";
       ?>
       <div class="t text-center">
       <a class="text-white" href="index.php"role="button"  >
       <h6 class="text-center btn btn-primary mt-5 text.white"> Retour a la premiere page</h6>
       </a>
       </p>
       </div>
       
    
      
</div>
     




  </div>
</div>
    
</body>
</html>

 
  
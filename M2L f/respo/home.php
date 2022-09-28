<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace responsable.</p>
    <a href="add_taches.php">Ajouter une tache</a> | <a href="demandes.php">Accéder aux tâches</a> | 
        <a href="../logout.php">Déconnexion</a>

    </ul>
    </div>
  </body>
</html>
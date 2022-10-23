<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" /> 
        <link rel="stylesheet" href="../css/styleetu.css"/>  
        <!-- JavaScripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>connexion</title>
    <title>Document</title>
</head>
<body> 
    
    <!-- Ajouter la barre de menu -->
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">
            <img src ="../img/Logo.jpg" width="40" height="40"> DIAKISAAD
        </div>
        <div>
            <button class="btn btn-dark" type="button"><i class="fas fa-user-tie"></i>
                <a class ="lien" href="../php/deconnexion.php">deconnexion</a></button>
        </div>
      </nav>




    <?php
        session_start();
        if(!$_SESSION['NOM']){
            header('location: pageconnect.php');
        }
       echo $_SESSION['NOM']; 

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" /> 
        <link rel="stylesheet" href="../css/styleetudian.css"/>  
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
                <a class ="lien" href="./modifier2.php">UPDATE</a></button>
            <button class="btn btn-dark" type="button"><i class="fas fa-user-tie"></i>
                <a class ="lien" href="../php/deconnexion.php">deconnexion</a></button>
        </div>
      </nav>




    <?php
        session_start();
        if(!$_SESSION['NOM']){
            header('location: pageconnect.php');
        }
       

    ?>
    <h1>Bonjour <?php echo $_SESSION['PRENOM'].' '.$_SESSION['NOM']; ?> </h1>
        <h2> Bienvenue à votre page étudiant!</h2>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-8 ">
                    
                            <h3> 
                                
                                Vous etes inscrits dans le parcours de <?php 
                                include "connexion.php";
                                
                                $ok=$_SESSION['ID_CLASSES'];
                                $req=$connexion->query("SELECT * FROM classe WHERE ID=$ok");
                                $res=mysqli_fetch_array($req);
                                echo $res['NOM'];
                                ?>
                                <br/>
                            </h3>
                            <h4>
                                Vos cours sont donc les suivants:
                            </h4>
                            <br/>
                            <?php
                                include "connexion.php";
                                $ok=$_SESSION['ID_CLASSES'];
                                $req=$connexion->query("SELECT * FROM matieres WHERE ID_CLASSES=$ok");
                                while($res=mysqli_fetch_array($req)){
                                    ?>
                                    <ul><li><?php echo $res['NOM'] ?></li></ul>
                                    <?php
                                    
                                }

                            ?>
                        </br>
                        <h4>
                            Vos professeurs sont:
                        </h4>
                        <br/>
                        <?php
                                include "connexion.php";
                                $ok=$_SESSION['ID_CLASSES'];
                                $req=$connexion->query("SELECT * FROM professeurs WHERE ID_CLASSES=$ok");
                                while($res=mysqli_fetch_array($req)){
                                    $id=$res['ID_MATIERES'];
                                    $req2=$connexion->query("SELECT NOM FROM matieres WHERE ID=$id");
                                    while($res2=mysqli_fetch_array($req2)){
                                    ?>
                                    <ul><li><?php echo $res['PRENOM']." ".$res['NOM']." "."(".$res2['NOM'].")" ?></li></ul>
                                    <?php

                                    }
                                    
                                }

                            ?>

                </div>

                        <div class="col-md-4 mt-3">
                            
                            
                                <br/>
                                <img src ="../img/avatar.png" width="80" height="100">
                                <br>
                                <br>
                            
                                <h4> NOM: <?php echo $_SESSION['NOM'] ?></h4>
                                <h4> Prenom: <?php echo $_SESSION['PRENOM'] ?></h4>
                                <h5>ID: <?php echo $_SESSION['ID'] ?></h5>
                                <h5>Cursus: <?php 
                                    include "connexion.php";
                                    $ok=$_SESSION['ID_CLASSES'];
                                    $req=$connexion->query("SELECT * FROM classe WHERE ID=$ok");
                                    $res=mysqli_fetch_array($req);
                                    echo $res['NOM'];
                                
                                    ?></h5>
                            
                            
                        </div>
                    
    
            </div>

        </div>

    <footer> 
        <hr>
        
        <div class="ft">
            <img src="../img/Logo.jpg" width="80">
            <h5>DiakiSaad</h5>
        </div>
        <div class="row2">
            <h3>Lycée DiakiSaad</h3>
            <h6>4 Place Jussieu<br/>
            75005, Paris</h6>
    
        </div>
    </footer>
    
</body>
</html>
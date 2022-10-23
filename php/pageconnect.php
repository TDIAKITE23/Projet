<?php
    session_start();
    if(isset($_POST["valider"])){
        include "connexion.php";
        $test=0;
        $id=0;
        $nom="";
        $erreur="";
        if($_POST['genre']=='etu'){
            $pseudo=$_POST['username'];
            $mdp=$_POST['password'];
            $req=$connexion->query("SELECT * FROM etudiant");

            while($res=mysqli_fetch_array($req)){
                if($res['MAIL']==$pseudo && $res['MDP']==$mdp){
                    $test=1;
                    $id=$res['ID'];
                    $nom=$res['NOM'];
                }
            }
            if($test==0){
                $erreur="Adresse mail ou mot de passe incorrect";
            }
            else {
                $_SESSION['MAIL']=$pseudo;
                $_SESSION['MDP']=$mdp;
                $_SESSION['ID']=$id;
                $_SESSION['NOM']=$nom;
                header('Location: etudiant.php');
            }
        }
        else{
            if($_POST['genre']=='prof'){
                $pseudo=$_POST['username'];
                $mdp=$_POST['password'];
                $req=$connexion->query("SELECT * FROM professeurs");
    
                while($res=mysqli_fetch_array($req)){
                    if($res['MAIL']==$pseudo && $res['MDP']==$mdp){
                        $test=1;
                        $id=$res['ID'];
                        $nom=$res['NOM'];
                    }
                }
                if($test==0){
                    $erreur="Adresse mail ou mot de passe incorrect";
                }
                else {
                    $_SESSION['MAIL']=$pseudo;
                    $_SESSION['MDP']=$mdp;
                    $_SESSION['ID']=$id;
                    $_SESSION['NOM']=$nom;
                    header('Location: prof.php');
                }
            }
            else {
                $pseudo=$_POST['username'];
                $mdp=$_POST['password'];
                $req=$connexion->query("SELECT * FROM admin");
    
                while($res=mysqli_fetch_array($req)){
                    if($res['MAIL']==$pseudo && $res['MDP']==$mdp){
                        $test=1;
                        $id=$res['ID'];
                        $nom=$res['NOM'];
                    }
                }
                if($test==0){
                    $erreur="Adresse mail ou mot de passe incorrect";
                }
                else {
                    $_SESSION['MAIL']=$pseudo;
                    $_SESSION['MDP']=$mdp;
                    $_SESSION['ID']=$id;
                    $_SESSION['NOM']=$nom;
                    header('Location: admin.php');
                }
            }
            
        }




    }



?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
        <link rel="stylesheet" href="../css/style.css">   
        <!-- JavaScripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <title>connexion</title>
    </head>
    <body>

        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="../img/Logo.jpg" width="40" height="40" cd > DiakiSaad
            </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="../html/acceuil.html" class="nav-link" href="#"> Acceuil </a>
            </li>
            <li class="nav-item">
                <a href="../html/contact.html" class="nav-link" href="#"> Contact </a>
            </li>
            <li class="nav-item">
                <a href="../html/frais.html" class="nav-link" href="#"> frais </a>
            </li>
            </ul>
                
        
        </nav>


        <div id="container">
                <!-- zone de connexion -->
                
                <form action="" method="POST">
                    <h1>Connexion</h1>

                    <?php
                        if(isset($erreur)){
                            echo "<p class='erreur'>".$erreur."</p>";
                        }

                    ?>

                    <input type="radio" name="genre" value="etu" required/> <label><b>Etudiants</b></label>
                    <input type="radio" name="genre" value="prof" required/><label><b>Professeur</b></label>
                    <input type="radio" name="genre" value="admin" required/> <label><b>Admin</b></label><br>

                    
                    <label><b>E-mail</b></label>
                    <input type="text" placeholder="Entrer votre e-mail" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <input type="submit" id='submit' value='LOGIN' name="valider" >

                    <button class="btn btn-success grand" ><a class="test" href="../html/inscription.html">inscription</a></button></div>
                    
                </form>
                
        </div>
        
    </body>
</html>
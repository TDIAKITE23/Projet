<?php
    session_start();
    include "connexion.php";
        $test=0;
        $id=0;
        if($_POST['genre']=='etu'){
            $pseudo=$_POST['username'];
            $mdp=$_POST['password'];
            $req=$connexion->query("SELECT * FROM etudiant");

            while($res=mysqli_fetch_array($req)){
                if($res['MAIL']==$pseudo && $res['MDP']==$mdp){
                    $test=1;
                    $id=$res['ID'];
                }
            }
            if($test==0){
                header('Location: pageconnect.php');
            }
            else {
                $_SESSION['MAIL']=$pseudo;
                $_SESSION['MDP']=$mdp;
                $_SESSION['ID']=$id;
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
                    }
                }
                if($test==0){
                    header('Location: pageconnect.php');
                }
                else {
                    $_SESSION['MAIL']=$pseudo;
                    $_SESSION['MDP']=$mdp;
                    $_SESSION['ID']=$id;
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
                    }
                }
                if($test==0){
                    header('Location: pageconnect.php');
                }
                else {
                    $_SESSION['MAIL']=$pseudo;
                    $_SESSION['MDP']=$mdp;
                    $_SESSION['ID']=$id;
                    header('Location: admin.php');
                }
            }
            
        }
        



?>
<?php
    
    include "connexion.php";
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['email'];
    $mdp=$_POST['mdp'];

   

    if($_POST['ok']=='etu'){
        $req=$connexion->query("INSERT INTO etudiant(NOM,PRENOM,MAIL,MDP) values('$nom','$prenom','$mail','$mdp')");
        if($req){
            echo "inscription effectué";
        
        }
        else {
            echo "erreur";
        }
    }
    else{
        $req=$connexion->query("INSERT INTO professeurs(NOM,PRENOM,MAIL,MDP) values('$nom','$prenom','$mail','$mdp')");
        if($req){
            echo "inscription effectué";
        
        }
        else {
            echo "erreur";
        }

    }
    


?>
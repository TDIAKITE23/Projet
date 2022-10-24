<?php
    
    include "connexion.php";
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['email'];
    $mdp=$_POST['mdp'];
    $cur=$_POST['Cursus'];
    $mat=$_POST['mat'];

   

    if($_POST['ok']=='etu'){
        $req=$connexion->query("INSERT INTO etudiant(ID_CLASSES,NOM,PRENOM,MAIL,MDP) values('$cur','$nom','$prenom','$mail','$mdp')");
        if($req){
            echo "inscription effectué";
        
        }
        else {
            echo "erreur";
        }
    }
    else{
        $req=$connexion->query("INSERT INTO professeurs(ID_CLASSES,ID_MATIERES,NOM,PRENOM,MAIL,MDP) values('$cur','$mat','$nom','$prenom','$mail','$mdp')");
        if($req){
            echo "inscription effectué";
        
        }
        else {
            echo "erreur";
        }

    }
    


?>
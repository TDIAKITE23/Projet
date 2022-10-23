<?php
session_start();
include "connexion.php";
 

if(isset($_POST['id']) ){
    $id=$_POST['id'];
    $req=$connexion->query("DELETE FROM etudiant WHERE ID='$id' ");
    echo "test";
    if($req){
        header('location: afficheretu.php');
    }
    else{
        echo "erreur";
    }
}else{
    ECHO 'NON';
}



?>
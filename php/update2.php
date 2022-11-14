<?php
session_start();
include "connexion.php";

if(!$_SESSION['NOM']){
    header('location: pageconnect.php');
}
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['email'];
$mdp=$_POST['mdp'];

$req=$connexion->query("UPDATE etudiant SET NOM='$nom',PRENOM='$prenom',MAIL='$mail',MDP='$mdp' WHERE ID='$id'");

if($req){
    echo "mise à jour effectuée"."<br>";
    ?>
    <html><a href="./pageconnect.php">cliquez ici</a></html>
    <?php
}else{
    echo 'erreur';
}
?>
<?php
session_start();
include "connexion.php";

if(!$_SESSION['NOM']){
    header('location: pageconnect.php');
}
$id=$_SESSION['ID'];
$req=$connexion->query("SELECT * FROM etudiant WHERE ID='$id' ");

$res=mysqli_fetch_array($req);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modif</title>
</head>
<body>
    <form action="update2.php" method="post">
        <fieldset>
        <legend>modifier</legend>
            <input type="hidden" name="id" value="<?php echo $res["ID"]; ?>"/>
            <input name="nom" value="<?php echo $res["NOM"]; ?>" placeholder="nom"  type="text" required/><br><br>
            <input name="prenom" value="<?php echo $res["PRENOM"]; ?>" placeholder="prenom"  type="text" required/><br><br>
            <input name="email" value="<?php echo $res["MAIL"]; ?>" placeholder="mail"  type="mail" required/><br><br>
            <input name="mdp" value="<?php echo $res["MDP"]; ?>" placeholder="mot de passe"  type="password" required/><br><br>
            <input type="submit" value="update" />



        </fieldsed>
    </form>
</body>
</html>
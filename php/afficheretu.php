<?php
    session_start();
    include "connexion.php";
    if(!$_SESSION['NOM']){
        header('location: pageconnect.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher étudiants</title>
</head>
<body>
    <!-- Afficher les étudiants -->
    <?php
        $req=$connexion->query("SELECT * FROM etudiant");
        while ($res=mysqli_fetch_array($req)){
            ?>
            <p><?= $res['NOM']; ?> 

                <form action="modifier.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $res["ID"]; ?>"/>
                    <input type="submit" value="modifier" />
                </form>


                <form action="bannir.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $res["ID"]; ?>"/>
                    <input type="submit" value="Supprimer" />
                </form>
        
            </p>
            <?php
        }

    ?>
</body>
</html>
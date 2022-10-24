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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
    <link rel="stylesheet" href="../css/styleacceuil.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>AFFICHER LES ETUDIANTS</title>
</head>
<body>
    <!-- Afficher les étudiants -->
    <?php
        $req=$connexion->query("SELECT * FROM etudiant");
        while ($res=mysqli_fetch_array($req)){
            ?>
            <p><?= $res['PRENOM']." ".$res['NOM']; ?> 

                <form action="modifier.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $res["ID"]; ?>"/>
                    <input type="submit" value="modifier" />
                </form>

                <br>
                <form action="bannir.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $res["ID"]; ?>"/>
                    <input type="submit" value="Supprimer" />
                </form>

        
            </p>
            <hr>
            <?php
        }
        

    ?>
    <hr>
    <button class="btn btn-outline-primary"><a href="../html/inscription.html">Inscrire un étudiant</a></button>
</body>
</html>
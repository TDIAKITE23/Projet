<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table des matières</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
    <link rel="stylesheet" href="../css/matiere.css"/> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <h2>Voici la table des matières</h2>
    <table class ="myclass" border ="border">
        <tr>
            <th>ID</th>
            <th>Matieres</th>

        </tr>
        <?php
            include "connexion.php";

            $req=$connexion->query("SELECT ID,NOM FROM matieres");
            while($res=mysqli_fetch_array($req)){
                ?>
                <tr>
                    <td><?php echo $res['ID'] ?></td>
                    <td><?php echo $res['NOM'] ?></td>
                </tr>
                <?php
            }



        ?>
    </table>
</body>
</html>
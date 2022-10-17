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
        <div id="container">
                <!-- zone de connexion -->
                
                <form action="verification.php" method="POST">
                    <h1>Connexion</h1>
                    
                    <label><b>E-mail</b></label>
                    <input type="text" placeholder="Entrer votre e-mail" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <input type="submit" id='submit' value='LOGIN' >

                    <button class="btn btn-Succes grand" ><a href="../html/accueil.html">inscription</a></button>
                    
                </form>
                
        </div>
        
    </body>
</html>
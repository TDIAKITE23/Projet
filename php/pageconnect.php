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

        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="../img/Logo.jpg" width="40" height="40" cd > DiakiSaad
            </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="../html/acceuil.html" class="nav-link" href="#"> Acceuil </a>
            </li>
            <li class="nav-item">
                <a href="../html/contact.html" class="nav-link" href="#"> Contact </a>
            </li>
            <li class="nav-item">
                <a href="../html/frais.html" class="nav-link" href="#"> frais </a>
            </li>
            </ul>
                
        
        </nav>


        <div id="container">
                <!-- zone de connexion -->
                
                <form action="verification.php" method="POST">
                    <h1>Connexion</h1>

                    <input type="radio" name="genre" value="etu" required/> <label><b>Etudiants</b></label>
                    <input type="radio" name="genre" value="prof" required/><label><b>Professeur</b></label>
                    <input type="radio" name="genre" value="admin" required/> <label><b>Admin</b></label><br>

                    
                    <label><b>E-mail</b></label>
                    <input type="text" placeholder="Entrer votre e-mail" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <input type="submit" id='submit' value='LOGIN' >

                    <button class="btn btn-success grand" ><a class="test" href="../html/inscription.html">inscription</a></button></div>
                    
                </form>
                
        </div>
        
    </body>
</html>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="principalestyle.css">
        <title>titre</title>
        <link rel="icon" href="images/PLAYBOX.png" type="image/png">
    </head>
    <body>
        <header>
            <div class="mon_logo">
            <a href="principale.php"><img src="images/PLAYBOX.png" alt="logo"  width="80px" height="80px"></a>
            </div> 
            <form action="" method="get">
                <input type="text" id="recherche" name="recherche" placeholder="Recherche...">
                <button type="submit" id="search-button">Rechercher</button>
            </form>
            <nav>
                <ul>
                    <li><a href="principale.php">Acceuil</a></li>
                    <li><a href="produits.php">Produits</a></li>
                    <li><a href="listcommentaires.php">Suggestions</a></li>
                    <li><a href="authentification.php">Contact-us</a></li>
                </ul>
            </nav>
        </header>

        <div class="formulaire">
            <form action="" method="post">
                <label for="usrname">Username</label>
                <input type="text" id="usrname" name="usrname" required>

                <label for="psw">Password</label>
                <input type="password" id="psw" name="psw" required>

                <input type="submit" value="Submit">
            </form>
            <p>new?&nbsp; &nbsp;&nbsp; &nbsp; <a href="signin.php">sign in</a></p>
        </div>

        <?php
            include('connection.php');
            connexion();
            $reponse = $bdd->query('select * from users');
            $authentification=false;
            if(isset($_POST['usrname']) and isset($_POST['psw'])){
                while($donnees = $reponse->fetch())
            {
                $A=$donnees['username'];
                $B=$donnees['password'];
                if($_POST['usrname']==$A and $_POST['psw']==$B){
                    $authentification=true;
                    header( "location: commentaires.php");
                }
            }
            if($authentification==false){
                echo "<center> Mot de passe incorrect</center>";
            }
            }
        ?>
        
        <div id="div2">
            <br><p style="margin-left: 40%; ">copyright 2023 PLAYBOX</p><br><br>
        </div>

    </body>
</html>
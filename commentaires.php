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
            <form action="/search" method="get">
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
                
                <label for="email_c">Email</label>
                <input type="email" id="email_c" name="email_c" required>

                <label for="commentaire">commentaire</label>
                <input type="text" id="commentaire" name="commentaire" required>

                <input type="submit" value="Submit">
            </form>
            <p><a href="listcommentaires.php">voir la liste des commentaires</a></p>
        </div>
        <?php 
            include('connection.php');
            connexion();
            if(isset($_POST['commentaire']) and isset($_POST['email_c'])){

                if(!empty($_POST['commentaire']) and !empty($_POST['email_c'])){   

                        $sql="insert into commentaires(email_c, commentaire) values('".$_POST['email_c']."','".$_POST['commentaire']."')";

                        $bdd->exec($sql);


                        echo "<center>Le commentaire est ajouté avec succés</center>";

                }

                else

                echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 

            }
        ?>

        
        <div id="div2">
            <br><p style="margin-left: 40%; ">copyright 2023 PLAYBOX</p><br><br>
        </div>




    </body>
</html>
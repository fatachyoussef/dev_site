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
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>

                <label for="Prenom">Prenom</label>
                <input type="text" id="Prenom" name="Prenom" required>

                <label for="email">Email</label>
                <input type="mail" id="email" name="email" required>

                <label for="naissance">date de naissance</label>
                <input type="date" id="naissance" name="naissance" required>

                <label for="phone">phone number</label>
                <input type="text" id="phone" name="phone" required>

                <label for="usrname">Username</label>
                <input type="text" id="usrname" name="usrname" required>

                <label for="pswrd">password</label>
                <input type="password" id="pswrd" name="pswrd" required>

                <input type="submit" value="Submit">
            </form>
        </div>

        
        <div id="div2">
            <br><p style="margin-left: 40%; ">copyright 2023 PLAYBOX</p><br><br>
        </div>
    </body>
    <?php
        include('connection.php');
            if(isset($_POST['nom']) and isset($_POST['Prenom']) and isset($_POST['email']) and isset($_POST['naissance']) and isset($_POST['phone']) and isset($_POST['usrname']) and isset($_POST['pswrd'])){

                if(!empty($_POST['nom']) and !empty($_POST['Prenom']) and !empty($_POST['email']) and !empty($_POST['naissance']) and !empty($_POST['phone']) and !empty($_POST['usrname']) and !empty($_POST['pswrd'])){

                    connexion();

                    $sql1="select * from users where email='".$_POST['email']."'";

                    $reponse = $bdd->query($sql1);

                    $donnees = $reponse->fetch();


                    if(empty($donnees)){   

                        $sql2="insert into users(username, password, email, phone, naissance, nom, prenom) values('".$_POST['usrname']."','".$_POST['pswrd']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['naissance']."','".$_POST['nom']."','".$_POST['Prenom']."')";

                        $bdd->exec($sql2);

                        header( "location: authentification.php");
                    }

                    else

                        echo "<center>this email is already exists</center>";

                }

                else

                echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 

            } 
    ?>
</html>
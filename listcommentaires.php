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


        <?php
            include('connection.php');
			connexion();
			$sql="select * from commentaires ";
			$reponse = $bdd->query($sql);
			$nbrDeLigne = $reponse->rowCount();
			echo "<center> <b>Il y a ".$nbrDeLigne." commentaire(s)</b></center>";
        ?>
			<center><table border="1">
			    <tr bgcolor="green"><th>Email</th><th>Commentaire</th></tr>
			<?php
				while($enreg = $reponse->fetch())
				{
				echo "<tr><td>".$enreg['email_c']."</td>";
				echo "<td>".$enreg['commentaire']."</td>";
				echo "</tr>";
				} 
			echo "</table>";
			?>

        
        <div id="div2">
            <br> <br> <br> <br> <br> <br> <br> <br> <br><p style="margin-left: 00%; ">copyright 2023 PLAYBOX</p><br><br>
        </div>
    </body>
</html>
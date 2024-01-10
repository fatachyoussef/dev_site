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



<div class="container">
  <img src="images/ps5.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Playstation</h1>
    <a href="produits.php" class="bouton_blanche">Voir l'article </a>
  </div>
</div>
<div class="container">
  <img src="images/xbox_serie_x.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Xbox</h1>
    <a href="produits.php" class="bouton_verte">Voir l'article </a>
  </div>
</div>

        <section>
            <article>
                <p>Cher(e) client(e),<br>Nous sommes ravis de vous accueillir sur notre site web e-commerce !
                <span id="dots">...</span></p>
                <span id="more"><p>Actuellement, nous avons mis en place un processus spécial pour les commandes, et nous vous invitons à nous contacter directement via WhatsApp pour toute demande d'achat.</p> <br>
                <strong>Comment commander :</strong>
                <ol>
                    <li>Parcourez notre sélection de produits sur le site.</li>
                    <li>Notez les articles que vous souhaitez commander.</li>
                    <li>Contactez-nous sur WhatsApp au [+212 123456789] avec la liste des articles et toute autre information pertinente.</li>
                    <li>Nous vous assisterons dans le processus de commande et répondrons à toutes vos questions.</li>
                </ol>
                <strong>Avantages de commander via WhatsApp :</strong>
                <ul>
                    <li>Assistance personnalisée</li>
                    <li>Réponses rapides à vos questions</li>
                    <li>Suivi en temps réel de votre commande</li>
                </ul>
                <p>Nous vous remercions de votre compréhension et de votre coopération. Notre équipe est impatiente de vous fournir une expérience d'achat exceptionnelle.</p>
                <p>Restez connecté et continuez à découvrir nos derniers produits !</p>
                <p>Cordialement,<br>PLAYBOX</p>
                </span>
                <button onclick="myFunction()" id="myBtn">Read more</button>
            </article>
            <aside>
            <h1>Bienvenue sur PLAYBOX - Votre Destination Gaming !</h1>
                    <p id="photo_zozor"><img src="images/PLAYBOX.png" alt="icon de PLAYBOX" width="200px" height="200px"/></p>
                    <p>Plongez dans l'univers palpitant du gaming avec PLAYBOX, votre adresse incontournable pour l'achat de consoles de jeux dernier cri. 
                        Nous sommes passionnés par le jeu autant que vous, et c'est cette passion qui nous motive à vous offrir une expérience d'achat exceptionnelle.</p>
                    <p>Rejoignez-nous dans l'aventure du gaming avec PLAYBOX. Préparez-vous à vivre des moments inoubliables et à repousser les limites du possible !</p>
                    <center>
                    <p><a href="https://web.facebook.com/profile.php?id=61553142958923&_rdc=1&_rdr"><img src="images/facebook1.png" alt="Facebook" width="50px" height="50px"/></a>
                    <a href="https://www.linkedin.com/in/fatach-youssef-03679025a/"><img src="images/linkedin.png" alt="linkedin" width="50px" height="50px" /></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FyoussefMC71"><img src="images/X.png" alt="X" width="50px" height="50px" /></a>
                    <a href="https://www.instagram.com/yousseffatach1"><img src="images/instagram.png" alt="instagram" width="50px" height="50px" /></a></center></p>
            </aside>
        </section>
        <div id="div2">
            <br><p style="margin-left: 40%; ">copyright 2023 PLAYBOX</p><br><br>
        </div>


<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

    </body>
</html>
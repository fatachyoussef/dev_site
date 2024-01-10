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
        <h1>Nos Produits</h1>
        <div id="boutton_produit">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('manette')"> manette</button>
            <button class="btn" onclick="filterSelection('console')"> console</button>
            <button class="btn" onclick="filterSelection('special')"> special</button>
        </div>








        <div class="row">
            <div class="column manette">
                <div class="content">
                    <img src="images/m_ps4_red.jpg" alt="Mountains" style="width:100%">
                    <h4>Manette PS4 Rouge</h4>
                    <p>Prix : 350.00DH</p>
                </div>
            </div>
            <div class="column manette">
                <div class="content">
                    <img src="images/m_ps4_blue.jpg" alt="Lights" style="width:100%">
                    <h4>Manette PS4 Bleu</h4>
                    <p>Prix : 350.00DH</p>
                </div>
            </div>
            <div class="column manette">
                <div class="content">
                    <img src="images/m_ps4_black.jpg" alt="Nature" style="width:100%">
                    <h4>Manette PS4 noire</h4>
                    <p>Prix : 300.00DH</p>
                </div>
            </div>
            <div class="column manette">
                <div class="content">
                    <img src="images/m_xbox_white.jpg" alt="Nature" style="width:100%">
                    <h4>Manette XBOX Blanche</h4>
                    <p>Prix : 250.00DH</p>
                </div>
            </div>
            <div class="column manette">
                <div class="content">
                    <img src="images/m_xbox_black.jpg" alt="Nature" style="width:100%">
                    <h4>Manette XBOX noire</h4>
                    <p>Prix : 250.00DH</p>
                </div>
            </div>

            <div class="column console">
                <div class="content">
                    <img src="images/xbox_one.jpg" alt="Car" style="width:100%">
                    <h4>XBOX ONE</h4>
                    <p>Prix : 4000.00DH</p>
                </div>
            </div>
            <div class="column console">
                <div class="content">
                    <img src="images/xbox_xs.jpg" alt="Car" style="width:100%">
                    <h4>XBOX XS</h4>
                    <p>Prix : 6000.00DH</p>
                </div>
            </div>
            <div class="column console">
                <div class="content">
                    <img src="images/ps5_cd.jpg" alt="Car" style="width:100%">
                    <h4>PS5 (version cd)</h4>
                    <p>Prix : 7999.00DH</p>
                </div>
            </div>
            <div class="column console">
                <div class="content">
                    <img src="images/ps4.jpg" alt="Car" style="width:100%">
                    <h4>PS4 normale</h4>
                    <p>Prix : 4000.00DH</p>
                </div>
            </div>

            <div class="column special">
                <div class="content">
                    <img src="images/ps_one.jpg" alt="People" style="width:100%">
                    <h4>PS ONE</h4>
                    <p>Prix : 700.00DH</p>
                </div>
            </div>
            
        </div>



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

        <footer>
            <div id="div2">
                <br><p style="margin-left: 40%; ">copyright 2023 PLAYBOX</p><br><br>
            </div>
        </footer>

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

            filterSelection("all") 

            function filterSelection(c) {
                var x, i;
                 x = document.getElementsByClassName("column");
                if (c == "all") c = "";
                for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                }
            }

            function w3AddClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) {
                        element.className += " " + arr2[i];
                    }
                }
            }

            function w3RemoveClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                    }
                }
                element.className = arr1.join(" ");
            }

            var btnContainer = document.getElementById("boutton_produit");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function(){
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script>


    </body>
</html>
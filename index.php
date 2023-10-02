<?php
$titre = "Accueil CASBT";
$urlstyle = "css/home.css";
require_once("include/header.php");
?>

<body>
<div class="accueil">
</div>

<div class="demarches">

</div>

<div class="actualites">
    <h1 id="titreActus">Les dernières actus</h1>
    <div class="conteneur">
        <div class="horizontalBloc">
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Mountain View</h2>
                    <p class="texte">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p><button class="btn">View Trips</button>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">To The Beach</h2>
                    <p class="texte">Plan your next beach trip with these fabulous destinations</p><button class="btn">View Trips</button>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Desert Destinations</h2>
                    <p class="texte">It's the desert you've always dreamed of</p><button class="btn">Book Now</button>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Explore The Galaxy</h2>
                    <p class="texte">Seriously, straight up, just blast off into outer space today</p><button class="btn">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
require_once("include/footer.php");
?>
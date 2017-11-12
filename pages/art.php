<?php
$app_mode = 'local';

if($app_mode == 'local'){
    $root_url = '/';
}
else {
    $root_url = '/new-portfolio/';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/styles.php');?>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/drawer.php');?>
<div class="page-content art-page">
    <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/navigation.php');?>
    <div class="content">
        <div class="side-bar">
            <div class="sections">
                <div class="section active" data-content-item="images">Paintings</div>
                <div class="section" data-content-item="shop">Shop</div>
            </div>
            <!--<div class="filters">
                <div class="title">Filters</div>
                <div class="filter-list">
                </div>
            </div>-->
        </div>
        <!--painting section-->
        <div class="content-item grid images active">
            <div class="image-group">
                <img src="../storage/paintings/jack-daxter.jpg" alt="ds9 painting by andrinja">
                <div class="title">Jak & Daxter</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/ds9.jpg" alt="ds9 painting by andrinja">
                <div class="title">DS9</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/prometheus.jpg" alt="prometheus painting by andrinja">
                <div class="title">Prometheus</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/dark-souls.jpg" alt="dark souls painting by andrinja">
                <div class="title">Dark Souls</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/kitties.jpg" alt="cats art by andrinja">
                <div class="title">Emi & Kappa</div>
                <div class="tags">
                    <div class="tag">Landscape inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/starfish.jpg" alt="fish art">
                <div class="title">Shooting star</div>
                <div class="tags">
                    <div class="tag">Landscape inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/space-dog.jpg" alt="space dog art">
                <div class="title">Space dog</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/overwatch.jpg" alt="overwatch art">
                <div class="title">Overwatch</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/final-fantasy-7-small.jpg" alt="Final Fantasy">
                <div class="title">Final Fantasy VII</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/northern-lights-small.jpg" alt="Northern lights">
                <div class="title">Northern lights</div>
                <div class="tags">
                    <div class="tag">Landscape inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/lord-of-rings.jpg" alt="Lord of Rings">
                <div class="title">Lord of Rings</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/interstellar.jpg" alt="Interstellar">
                <div class="title">Interstellar</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/huntigton-beach.jpg" alt="huntington beach">
                <div class="title">Huntigton beach</div>
                <div class="tags">
                    <div class="tag">Landscape inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/inspired.jpg" alt="The Expanse">
                <div class="title">Inspired by X</div>
                <div class="tags">
                    <div class="tag">Landscape inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/mcrn-donnager-the-expanse.jpg" alt="The Expanse">
                <div class="title">The Expanse mcrn donnager</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/buy/cactus.jpg" alt="cactus">
                <div class="title">Arizona cactus</div>
                <div class="tags">
                    <div class="tag">Landscape inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/vincent-van-gogh-inspired.jpg" alt="Inspired by Vincent Van Gogh">
                <div class="title">Inspired by Vincent Van Gogh</div>
                <div class="tags">
                    <div class="tag">Landscapes</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/longreach.JPG" alt="australia">
                <div class="title">Longreach, Australia</div>
                <div class="tags">
                    <div class="tag">Landscapes</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/darksiders.JPG" alt="movie inspired">
                <div class="title">Darksiders</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/dragon.JPG" alt="game inspired">
                <div class="title">Dragon age</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/no_mans_sky.JPG" alt="movie inspired">
                <div class="title">No man's sky</div>
                <div class="tags">
                    <div class="tag">Landscapes</div>
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/autumn.jpg" alt="landscape">
                <div class="title">Autumn landscape</div>
                <div class="tags">
                    <div class="tag">Landscapes</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/guild-wars.JPG" alt="landscape">
                <div class="title">Guild Wars</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/avatar.JPG" alt="avatar">
                <div class="title">Avatar</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/Normandy-mass-effect.JPG" alt="normandy">
                <div class="title">Normandy mass effect</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/ori.JPG" alt="ori">
                <div class="title">Ori and the blind forest</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/space-station.JPG" alt="space station">
                <div class="title">Space station</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/skull.JPG" alt="skull">
                <div class="title">Skull</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/star-wars.JPG" alt="star wars">
                <div class="title">Star Wars</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/star-wars-2.JPG" alt="star wars">
                <div class="title">Star Wars</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/x-wing-star%20wars.JPG" alt="star wars">
                <div class="title">X wing</div>
                <div class="tags">
                    <div class="tag">Movie inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/winter-mood.jpg" alt="winter">
                <div class="title">Winter mood</div>
                <div class="tags">
                    <div class="tag">Landscapes</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/buy/dragonage.JPG" alt="dragon">
                <div class="title">Dragon age</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/wow.JPG" alt="wow">
                <div class="title">World of warcraft</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/bastion_small.jpg" alt="bastion">
                <div class="title">Bastion</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/darksoul.jpg" alt="dark soul">
                <div class="title">Dark Soul</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/lol.jpg" alt="lol">
                <div class="title">League of Legends</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/lol2.jpg" alt="lol">
                <div class="title">Amumu</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
            <div class="image-group">
                <img src="../storage/paintings/darksiders.JPG" alt="lol">
                <div class="title">Darksiders</div>
                <div class="tags">
                    <div class="tag">Game inspired</div>
                </div>
            </div>
        </div>
        <div class="image-preview">
            <i class="material-icons close-image-preview">close</i>
            <img src="../storage/paintings/darksiders.JPG" alt="movie inspired">
        </div>
        <!--ship section-->
        <div class="content-item shop grid images">
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/cat.jpg" alt="kitty by andrinj">
                    <div class="price-tag">90 EUR</div>
                </div>
                <div class="title">Kitty on Mars</div>
                <div class="tags">
                    <div class="tag">movie inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/lady.jpg" alt="lady by andrinj">
                    <div class="price-tag">90 EUR</div>
                </div>
                <div class="title">Lady</div>
                <div class="tags">
                    <div class="tag">movie inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/life-is-strange.jpg" alt="life is strange by andrinja">
                    <div class="price-tag">90 EUR</div>
                </div>
                <div class="title">Life is Strange</div>
                <div class="tags">
                    <div class="tag">game inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/nature.jpg" alt="landscape inspired">
                    <div class="price-tag">90 EUR</div>
                </div>
                <div class="title">Latvian nature</div>
                <div class="tags">
                    <div class="tag">landscape inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/wonder-woman.jpg" alt="movie inspired">
                    <div class="price-tag">90 EUR</div>
                </div>
                <div class="title">Wonder Woman</div>
                <div class="tags">
                    <div class="tag">movie inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/cowboy.jpg" alt="movie inspired">
                    <div class="price-tag">90 EUR</div>
                </div>
                <div class="title">Cowboy bebop</div>
                <div class="tags">
                    <div class="tag">game inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/surfing.jpg" alt="landscape inspired">
                    <div class="price-tag">90 EUR</div>
                </div>
                <div class="title">Surfing on the beach</div>
                <div class="tags">
                    <div class="tag">game inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/laguna.jpg" alt="landscape inspired">
                    <div class="price-tag">150 EUR</div>
                </div>
                <div class="title">Laguna beach, California (large size)</div>
                <div class="tags">
                    <div class="tag">game inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/protoss.jpg" alt="game inspired">
                    <div class="price-tag">70 EUR</div>
                </div>
                <div class="title">Protoss base, Starcraft</div>
                <div class="tags">
                    <div class="tag">game inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/csgo.JPG" alt="game inspired">
                    <div class="price-tag">70 EUR</div>
                </div>
                <div class="title">Counter Strike</div>
                <div class="tags">
                    <div class="tag">game inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>
            <div class="image-group shop-image-group">
                <div class="image-hover">
                    <img src="../storage/buy/Jurassic_world.JPG" alt="game inspired">
                    <div class="price-tag">90 EUR</div>
                </div>
                <div class="title">Jurassic world</div>
                <div class="tags">
                    <div class="tag">game inspired</div>
                </div>
                <button class="buy-button">Buy</button>
            </div>

        </div>
        <div class="open-buy-page">
            <h1>How to order</h1>
            <div class="description">
                <div class="steps">
                    <i class="material-icons">arrow_forward</i>
                    <p>Press paypal button</p>
                </div>

                <div class="steps">
                    <i class="material-icons step-arrow">arrow_forward</i>
                    <p>Write your shipping address, full name and painting title in the text field</p>
                </div>

                <div class="steps">
                    <i class="material-icons step-arrow">arrow_forward</i>
                    <p>Send the payment via paypal. Don't worry shipping cost is included.</p>
                </div>

                <div class="steps">
                    <i class="material-icons step-arrow">arrow_forward</i>
                    <p>Any questions? Please contact me via email: andrinjasc2@gmail.com or <a href="https://twitter.com/AndrinjaSC2" target="_blank">twitter</a> </p>
                </div>
            </div>
            <button><a href="https://www.paypal.me/andrinja" target="_blank">Paypal</a></button>
        </div>
        <!--print section-->
        <div class="content-item prints">
        </div>

    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/script.php');?>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style2.css" />
        <link rel="images" href="img"/>
        <title>Nerrazen - Accueil</title>
        <script type="text/javascript" src="../js/menu_deroulant.js"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8039968599498379",
            enable_page_level_ads: true
            });
        </script>
    </head>
    <body>
        <header>
            <?php include("php/menu.php"); ?>       
        </header>
        <div id="corps">
            <div class="suivre">
                <h2>Lire mes histoires</h2>
            </div>
            <div class="groupe">
                <section id="ht">
                    <?php include("php/histoires.php"); ?>
                </section>
                <section id="ht2">
                    <?php include("php/biographie.php"); ?>
                </section>
            </div>
            <section>
                <?php include("php/reseaux.php"); ?>
            </section>
            <section id="maj">
                <?php  include("php/actualites.php"); ?>
            </section>
        </div>
        <footer>
              <h3>Copyright Nerrazen ©2017 - Tous droits réservés</h3>  
        </footer>  
    </body>
</html>
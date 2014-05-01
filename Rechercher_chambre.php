<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Recherche de la chambre">
        <meta name="author" content="Nizar">
        <title> Recherche de chambre </title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <!--[endif]-->
    </head>
    <body  role = "document">
        <!--Barre de navigation  -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="hotel.php"><i>Les hotels Du viole</i></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="hotel.php">Accueil</a></li>
                        <li class="active"><a href="Rechercher_chambre.php">Rechercher</a></li>
                        <li><a href=About.html>A propos du site</a></li>
                        <li><a href=Contact.html>Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        

        <?php
        require_once './Connect.php';
        require_once './Connexion.php';


        $connexion = Connexion(NOM, PASSE, BASE, SERVEUR);
        $requete = "SELECT * FROM `chambre` WHERE 1";
        $resultat = mysql_query($requete, $connexion) or die('Erreur SQL!' . $requete . '<br/>' . mysql_error());
        echo '<p> element dans la base de donnes : </p>';
        while (($chambre = mysql_fetch_object($resultat))) {
            $chid = $chambre->chambre_id;
            $nh = $chambre->nom_hotel;
            $nbe = $chambre->nb_etoile;
            $px = $chambre->prix;
            $nbp = $chambre->nb_pieces;
            $etg = $chambre->etages;
            $vl = $chambre->Ville;

            echo "chambre numero :      $chid <br>\n";
            echo "Nom de l'hotel :      $nh  <br>\n";
            echo "nombre d'etoile :     $nbe <br>\n";
            echo "prix de la chambre :  $px <br>\n";
            echo "nb de pieces :        $nbp <br>\n";
            echo "etages :                       $etg  <br>\n";
            echo "Ville :               $vl   <br>\n";
            echo "<p> </p>";
        }
        ?>
    </body>
</html>


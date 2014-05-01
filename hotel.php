<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="petit site de resevervation de chambres">
        <meta name="author" content="Nizar">
        <title> Hotels du viol </title>

        <link rel="stylesheet" href="fond.css" />
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

    <body role="document">

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
                        <li class="active"><a href="hotel.php">Accueil</a></li>
                        <li><a href="Rechercher_chambre.php">Rechercher</a></li>
                        <li><a href=About.html>A propos du site</a></li>
                        <li><a href=Contact.html>Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>


        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <h1 >Site de reservation de chambre d'hotel</h1>
                <p> </p>
            </div>
        </div>  

        <!--form -->
        <form class="form-verticale">
            <fieldset>

                <!-- Form Name -->
                <legend>Rechercher une chambre </legend>
                
                 <!-- Text input-->
                <div class="control
                     group">
                    <label class="control-label" for="textinput">Destination</label>
                    <div class="controls">
                        <input id="textinput" name="textinput" placeholder="destination,lieu,adresse..." class="input-xlarge" value="lieu" type="text">
                        
                    </div>
                </div>
                 
                <!-- Text input-->
                <div class="control
                     group">
                    <label class="control-label" for="textinput">Nom de l'hotel</label>
                    <div class="controls">
                        <input id="textinput" name="textinput" placeholder="nom de l'hotel" class="input-xlarge" value="nomhotel" type="text">
                        
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="selectbasic">Chambres</label>
                    <div class="controls">
                        <select id="selectbasic" name="selectbasic"  class="input-xlarge">
                            <option  value="choix_chamvre1"> 1 chambre, 1 adulte</option>
                            <option value="choix_chamvre2"> 1 chambre, 2 adulte</option>
                        </select>
                    </div>
                </div>
               
                
                <!--bouton qui va lancer la recherche -->
                <div class="control-group">
                    <div class="controls">
                        <a href="Rechercher_chambre.php"> <button id="singlebutton"  name="singlebutton" value="rechercher" class="btn btn-lg btn-primary">Recherchez </button> </a> 
                    </div>
                </div>

            </fieldset>
        </form>

        <?php
            require_once './Connect.php';
            require_once './Connexion.php';
        
        
            $connexion = Connexion(NOM, PASSE, BASE, SERVEUR);
            $requete  = "SELECT * FROM `chambre` WHERE 1";
            $resultat = mysql_query($requete, $connexion) or die('Erreur SQL!'.$requete.'<br/>'.  mysql_error());
             echo '<p> element dans la base de donnes : </p>';
               while(($chambre = mysql_fetch_object($resultat))){
                    $chid = $chambre->chambre_id ;
                    $nh = $chambre->nom_hotel ;
                    $nbe = $chambre->nb_etoile;
                    $px = $chambre->prix;
                    $nbp = $chambre->nb_pieces;
                    $etg = $chambre->etages;
                    $vl =  $chambre->Ville    ;       
                                     
                    echo "chambre numero :      $chid <br>\n";
                    echo "Nom de l'hotel :      $nh  <br>\n";
                    echo "nombre d'etoile :     $nbe <br>\n";
                    echo "prix de la chambre :  $px <br>\n";
                    echo "nb de pieces :        $nbp <br>\n";
                    echo "etages :              $etg  <br>\n";
                    echo "Ville :               $vl   <br>\n";
                    echo "<p> </p>";
                  
               }
            
           
            mysql_close($connexion);
        ?>







        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
    </body>
</html>

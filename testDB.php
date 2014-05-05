   <html>
    <head><title>test de la DB  </title>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="petit site de test ">
        <meta name="author" content="Nizar">
        

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
    <body>
        <h1>TEST !!!</h1>
        <p> </p>
        <form name="inscription" method="post" action="testDB.php">
            Nom d'hotel: <input type="text" name="nom" > <br/>
            Lieu  : <input type="text" name="nom" > <br/>
             : <input type="text" name="nom" > <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        
<!--          <div class="col-sm-4">
            <div class="list-group">
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div> /.col-sm-4 
        -->
        <?php
            require_once './Connect.php';
            require_once './Connexion.php';
        
        
            $connexion = Connexion(NOM, PASSE, BASE, SERVEUR);
            $requete  = "SELECT * FROM `chambre` WHERE 1";
            $resultat = mysql_query($requete, $connexion) or die('Erreur SQL!'.$requete.'<br/>'.  mysql_error());
      
            
            if (isset ($_POST['valider'])){
               echo '<h2>'.$_POST['nom'].'</h2>';  
               echo '<p> <h2> element dans la base de donnes : </h2></p>';
               echo '<div class="col-som-4">';
               echo '<div class="list-group">';
               while(($chambre = mysql_fetch_object($resultat))){
                    $chid = $chambre->chambre_id ;
                    $nh = $chambre->nom_hotel ;
                    $nbe = $chambre->nb_etoile;
                    $px = $chambre->prix;
                    $nbp = $chambre->nb_pieces;
                    $etg = $chambre->etages;
                    $vl =  $chambre->Ville    ;       
                    echo "\n <a href=".'#'." class=".'list-group-item'."> \n"; 
                    echo "\n chambre numero :     $chid <br>";
                    echo "\n <h1> $nh </h1> <br> ";
                    echo "\n nombre d'etoile :     $nbe <br> ";
                    echo "\n prix de la chambre :   $px <br> ";
                    echo "\n nb de pieces :         $nbp <br>";
                    echo "\n etages :               $etg  <br>";
                    echo "\nVille :                $vl   <br>";
                    echo "\n<p> </p>";
                    echo "\n </a>";
               }
               echo "\n </div>";
               echo "\n </div>";
            }
            mysql_close($connexion);
        ?>
        
    </body>
    </html>



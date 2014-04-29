   <html>
    <head><title>test de la DB  </title></head>
    <body>
        <h1>TEST !!!</h1>
        <p> </p>
        <form name="inscription" method="post" action="testDB.php">
            Nom : <input type="text" name="nom" > <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        
        <?php
            require_once './Connect.php';
            require_once './Connexion.php';
        
        
            $connexion = Connexion(NOM, PASSE, BASE, SERVEUR);
            $requete  = "SELECT * FROM `chambre` WHERE 1";
            $resultat = mysql_query($requete, $connexion) or die('Erreur SQL!'.$requete.'<br/>'.  mysql_error());
            
            
            if (isset ($_POST['valider'])){
               echo '<h2>'.$_POST['nom'].'</h2>';  
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
            }
            mysql_clos($connexion);
        ?>
    </body>
    </html>



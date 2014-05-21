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
    <body> <!--Barre de navigation  -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="hotel.php"><i>Les hotels Nuit-Blanche</i></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="hotel.php">Accueil</a></li>
                        <li><a href="Rechercher_chambre.php">Rechercher</a></li>
                        <li><a href=About.html>A propos du site</a></li>
                        <li><a href=Contact.html>Contact</a></li>
                        <li><a href=Panier.php>Panier</a></li>
                        <li><a href=login.php>Login</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        
        <div id="forminscription">
             <h1> Inscription (un peu simple): </h1> <br/>   
             <form name="formulaire" method="post" action="inscription.php">
                <p>
                    <strong> Nom :          </strong> <input type="text" name="nominscrip" > <br/>
                </p>
                <p>
                    <strong> Prenom :       </strong> <input type="text" name="prenominscrip" > <br/>
                </p>
                
                <p>
                    <strong> Pseudo :      </strong> <input type="text" name="pseudoinscrip" > <br/>
                </p>
                
                <p>
                    <strong> Mail :      </strong> <input type="text" name="mailinscrip" > <br/>
                </p>
                
                <p>
                    <strong> Mot de passe : </strong> <input type="password" name="psswdinscrip" > <br/>
                </p>
                
                <p>
                    <strong> mot de passe (confirmation) : </strong> <input type="password" name="psswdinscripconfirm" > <br/>
                </p>
                <p>
                    <input type="submit"  name="inscrire" value="ok" > <br/>
                </p>

            </form>

        </div>



        <?php
        $nom = $_POST['nominscrip'];
        $prenom = $_POST['prenominscrip'];
        $pseudo = $_POST['pseudoinscrip'];
        $mail = $_POST['mailinscrip'];
        $passwd = $_POST['psswdinscrip'];
        $confirm = $_POST['psswdinscripconfirm'];
        $etat_panier = 0 ;
        if (isset($_POST['inscrire'])) {
            if (!$nom or ! $prenom or ! $pseudo or ! $mail or ! $passwd or ! $confirm) {
                echo '<p><strong> Un champ n' . "'" . 'est pas rempli !</p></strong> ' . "\n" . '';
                exit();
            } 
            else {
                if ($passwd != $confirm){
                    echo '<p><strong> Mot de passe pas identique</p></strong> ' . "\n" . '';
                    exit();
                    
                }
                if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    echo '<p><strong> email pas valide</p></strong> ' . "\n" . '';
                    exit();
                    }
                require_once './Connect.php';
                require_once './Connexion.php';
                
                
                
                
               // $sql = 'INSERT INTO ClientTable VALUES("","' . $pseudo . '","' . $sexe . '","' . $age . '","' . $today . '")';
                
               //(`client_id`, `nom`, `prenom`, `etat_panier`, `motdepasse`, `pseudo`, `mail`)
                $sql2 = 'INSERT INTO ClientTable  VALUES ("","'.$nom.'","'. $prenom.'","'. $etat_panier.'","' . $passwd . '","' . $pseudo . '","' . $mail . '")';
                
                $connexion = Connexion(NOM, PASSE,BASE,SERVEUR);
                mysql_query ($sql2) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
                mysql_close();
            }
        }
        ?> 

 </body>
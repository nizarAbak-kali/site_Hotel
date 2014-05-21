 <html>
    <head><title>login </title>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="login">
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
                    <a class="navbar-brand" href="hotel.php"><i>Les hotels Nuit-Blanche</i></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="hotel.php">Accueil</a></li>
                        <li><a href="Rechercher_chambre.php">Rechercher</a></li>
                        <li><a href=About.html>A propos du site</a></li>
                        <li><a href=Contact.html>Contact</a></li>
                        <li><a href=Panier.php>Panier</a></li>
                        <li class="active"><a href=login.php>Login</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
         <div id="titrelogin">
        <h1>LOGIN</h1>
         </div>
         <div id="formlogin">
         <form name="inscription" method="post" action="testDB.php">
             login :   <input type="datetime" name="login" > <br/>
            password: <input type="password" name="pwd" > <br/>
            <input type="submit" name="valider_login" value="OK"/>
        </form>
         </div>
         
         <p>
             Premiere inscription ?<br/>
             <a href="inscription.php"> <img src="image/confusion.jpg" width="50" height="50" alt="Monimage"></a>
            </p>     
             
             
         
    <?php
        
        require_once './Connect.php';
        require_once './Connexion.php';
        $connexion = Connexion(NOM, PASSE, BASE, SERVEUR);
        $requete  = "SELECT * FROM `chambre` WHERE 1";
        if(isset($_POST['valider_login'])){
            
            
        }
            
            
    
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 </body>
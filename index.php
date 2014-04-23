<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="petit site de resevervation de chambres">
        <meta name="author" content="Nizar">
        <title> Hotels du viol </title>

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
        <![endif]-->
    </head>

    <body role="document">

        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i>Les hotels Du viole</i></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Accueil</a></li>
                        <li><a href=About.html>A propos du site</a></li>
                        <li><a href=Contact.html>Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>


        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <h1 >Site de reservation de chambre</h1>
                <p> </p>
            </div>
        </div>  

        <!--form -->
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Rechercher une chambre </legend>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Nom de l'hotel</label>
                    <div class="controls">
                        <input id="textinput" name="textinput" placeholder="nom de l'hotel" class="input-xlarge" type="text">
                        
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="control-group">
                    <label class="control-label" for="selectbasic">Chambres</label>
                    <div class="controls">
                        <select id="selectbasic" name="selectbasic" class="input-xlarge">
                            <option> 1 chambre, 1 adulte</option>
                            <option> 1 chambre, 2 adulte</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="control-groArrivéejeudi
                     Départvendredi
                     up">
                    <div class="controls">
                        <button id="singlebutton" name="singlebutton" class="btn btn-lg btn-primary">Recherchez</button>
                    </div>
                </div>

            </fieldset>
        </form>










        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
    </body>
</html>

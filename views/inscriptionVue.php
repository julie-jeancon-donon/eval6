<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>

<a class="retour d-none d-md-block" href="connexion.php">Retour connexion</a>
<div class="container">
	<div class="row">
        <div class="col-md-8 col-lg-6 mx-auto mt-5">
            <p class="welcome">Bienvenue à la bibliothèque</p>
        </div>
    </div>

    <div class="row">
        <div class="col-10 col-md-6 col-lg-3 mx-auto">
            <form method="post" action="connexion.php" class="mt-5 bgform">

                <div class="form-group mb-4">
                    <label for="title" class="mb-0 pb-0 mt-2 typo">Prénom :</label>
                    <input type="text" class="form-control rad" id="prenom" aria-describedby="nameHelp" placeholder="Titre" name=title autofocus required>
                </div>

                <div class="form-group mb-4">
                    <label for="title" class="mb-0 pb-0 mt-2 typo">E-mail :</label>
                    <input type="text" class="form-control rad" id="mail" aria-describedby="nameHelp" placeholder="Titre" name=title autofocus required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="author" class="mb-0 pb-0 mt-2 typo">Mot de passe :</label>
                    <input type="text" class="form-control rad" id="mdp" placeholder="Auteur" name="author" required>
                </div>

                <input type="submit" name="connect" value="Inscription" class="d-block mx-auto mb-2 w-50 p-2 deco">
            </form>

            <a class="retour d-md-none" href="connexion.php">Retour connexion</a>
        
        </div>
    </div>

</div>

<script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
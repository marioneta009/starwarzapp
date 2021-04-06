<?php

// Require credentials
require __DIR__ . '/credentials.php';

$starWarsNames = ['Darth Vader', 'Ahsoka Tano', 'Kylo Ren', 'Obi-Wan Kenobi', 'R2-D2', 'The Mandalorian', 'Luke Skywaker', 'Baby Yoda'];

if (isset($_REQUEST['logout'])) {
    $userInfo = null;
    header("Location: /");
}

if(isset($_REQUEST['user'])){
  $userInfo = $_REQUEST['user'];
}else{
  $userInfo = null;
}

?>
<html>
    <head>
        <script src="public/jquery-3.0.0.min.js" type="text/javascript"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
 
        <!-- font awesome from BootstrapCDN -->
        <link href="public/bootstrap.min.css" rel="stylesheet">

        <script src="public/app.js"> </script>
        <link href="public/app.css" rel="stylesheet">

    </head>
    <body class="home">
        <div class="container">
        <div class="row">

            <div class="col-md-12 login-page clearfix">
              <?php if(!$userInfo): ?>
              <div class="login-box auth0-box before">
                <input id="data" type="text" value="<?php echo MYUSER ?>">
                <img class="img-responsive" src="public/img/star_warsapp.png" />
                <p>Star Wars - The Awakening!</p>
                <a class="btn btn-primary btn-login">SignIn</a>
              </div>
              <?php else: ?>
              <div class="logged-in-box auth0-box logged-in">
                <h1 id="logo">Star Wars Welcomes You to the Family!</h1>
                <img class="avatar" width="200" src="public/img/avatarbabyyoda.png"/>

                <h2>Welcome <span class="nickname"><?php echo $userInfo ?></span></h2>
                <h2> Assigned Codename : <b><?php echo $starWarsNames[rand(0, 7)]; ?></b> </h2>
                <a class="btn btn-primary btn-lg" href="?logout">Logout</a>
                <a id="refresh" class="btn btn-primary btn-lg" href="#">Refresh</a>
              </div>
              <?php endif ?>
            </div>
        
        </div>
        </div>
    </body>
</html>

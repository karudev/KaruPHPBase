<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../web/ico/favicon.png">

    <title>KaruTourisme</title>

    <!-- Bootstrap core CSS -->
    <link href="../web/css/bootstrap.css" rel="stylesheet">

   

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../web/js/html5shiv.js"></script>
      <script src="../web/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted">KaruTourisme</h3>
      </div>

        <div>
            <?php include $fileName; ?>
        </div>

      <div class="footer">
        <p>&copy; KaruTourisme 2013</p>
      </div>
        <input id="url_base" type="hidden" value="<?php echo URL_BASE ?>"  />
    </div> <!-- /container -->
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
   <script src="../web/js/jquery-1.10.1.min.js"></script>
   <script src="../web/js/bootstrap.js"></script>
   <script src="../web/js/home.js"></script>
</html>

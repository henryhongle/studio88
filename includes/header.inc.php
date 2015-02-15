<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./ico/favicon.ico">

    <title><?php echo $page_title; ?></title>
    <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="./css/custom.css" rel="stylesheet"> 

    <!--Jquery -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php"><img src="./ico/logo.png" class="logo"/></a>
         
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li <?php if ($currentPage == 'about.php') { echo 'class="active"';} ?>><a href="about.php">ABOUT</a></li>
            <li <?php if ($currentPage == 'work.php') { echo 'class="active"';} ?>><a href="work.php">WORK</a></li>
            <li <?php if ($currentPage == 'services.php') { echo 'class="active"';} ?>><a href="services.php">SERVICES</a></li>
            <li <?php if ($currentPage == 'clients.php') { echo 'class="active"';} ?>><a href="clients.php">CLIENTS</a></li>
            <li <?php if ($currentPage == 'blog.php') { echo 'class="active"';} ?>><a href="blog.php">BLOG</a></li>
            <li <?php if ($currentPage == 'contact.php') { echo 'class="active"';} ?>><a href="contact.php">CONTACT</a></li>
            <li><a href="#" title="like us on facebook" class="hidden-sm hidden-md hidden-xs"><i class="fa fa-facebook-square fa-lg"></i></a></li>
            <li><a href="#" title="follow us on instagram" class="hidden-sm hidden-md hidden-xs"><i class="fa fa-instagram fa-lg"></i></a></li>
            <li><a href="#" title="follow us on twitter" class="hidden-sm hidden-md hidden-xs"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="#" title="Clients log in here" class="hidden-sm hidden-md hidden-xs"><i class="fa fa-user fa-lg"></i></a></li>
            <li><a href="#" class="hidden-lg">CLIENT LOGIN</a></li>     
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


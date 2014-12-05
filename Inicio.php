<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">



<div class="container theme-showcase" role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Bienvenido</h1>
        <div class='table-responsive sok_font'>
        <?php
        echo"<center><form class='sam'  action='valida.php' method='POST'>

	   <table class='table table-bordered' >

	   	   <tr>
	   &nbsp;&nbsp;<font size='4' color='#1e90ff'>Usuario:<br></font><input class='roundeb matricula' type='text' name ='usuario' size='40'></tr>

	   <br><tr>&nbsp;&nbsp;<font size='4' color='#1e90ff'>Password:<br></font><input class='roundeb' type='password' name='password' size='40'></tr>

	   <tr><br><br><input class='btn btn-info' type='submit' value='Ingresar' ></tr>

	   </Table>
	   </form></center>";
        ?>
            </div>
    </div>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SopesBook</title>
    <!-- Bootstrap -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="codigos.css" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">SopesBook</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Principal</a></li>
        <li><a href="search.php">Bitácora</a></li>
        <li><a href="insert.php">Publicar entradas</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron text-center" style="background-color:#BCF5A9">

  <h1>SopesBook</h1>
  <p>"Somos tan buenos, que ni siquiera existimos"</p> 
</div>

<div class="container">
<h2>- Historias -</h2>
<div class="panel panel-info">
  <div class="panel-heading">Historias recientes</div>
  <div class="panel-body">
<textarea class="form-control" rows="5" readonly>
aier me komi un pan
oi komi poio
ojala mañana pueda komerme unoz miz shokolates
</textarea>
</div>
</div>
<br>

<h2>-  Usuarios -</h2>
<input type="text" class="form-control" placeholder="Introduce un ID de usuario">
<button type="button" class="btn btn-success">Buscar publicaciones</button>
<br>
<br>
<div class="panel panel-success">  
<div class="panel-heading">Historias del usuario</div>
  <div class="panel-body">
<textarea class="form-control" readonly  rows="3">

</textarea>
 </div>
</div>
</div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>



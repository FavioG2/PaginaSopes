<!DOCTYPE html>
<html lang="en">
  <head>
<?php
$index = 0;
?>
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
      <li><a href="index.php">Principal</a></li>
	<li class="active"><a href="search.php">Bitácora</a></li>
	<li><a href="insert.php">Publicar entradas</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron text-center" style="background-color:#BCF5A9">

  <h1>SopesBook</h1>
  <p>"Somos tan buenos, que ni siquiera existimos"</p> 
</div>

<div class="container">
<h2>- Bitácora -</h2>

<?php 
$mng = new MongoDB\Driver\Manager("mongodb://192.168.122.146:27017");
$index = 0;
echo 
"<form action='' method='post'> 
<input type = 'text' name = 'canal' placeholder = 'escribe el canal'/>
<input type='submit' name='use_button' value='Buscar' /> 
</form>"; 
$insertado = '0';
$canal;
if(isset($_POST['use_button'])) 
{ 
     $insertado = '1';
     $canal = $_POST['canal'];
} 

?>

<div class ="panel panel-success">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>id</th>
        <th>canal</th>
	<th>mensaje</th>
      </tr>
    </thead>
    <tbody>
	<td colspan="4"></td>
<?php

if($insertado=='1'){
$filter = ['canal' => $canal ];
    $query = new MongoDB\Driver\Query($filter); 

    $rows = $mng->executeQuery("bitacora.bitacora", $query);
$top = $index + 10;
$iter = $index;
$pos = 0;
foreach ($rows as $row) {
	echo "<tr>";   
	echo "<td>"; 
        echo "$row->fecha";
	echo "</td><td>$row->_id</td><td>$row->canal</td><td>$row->mensaje</td>";
	echo "</tr>";    
}
}
?>

    </tbody>
  </table>
<br>
</div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>



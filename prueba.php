<h1>a prueba </h1>
<?php
try {

$mng = new MongoDB\Driver\Manager("mongodb://192.168.122.146:27017");
    $stats = new MongoDB\Driver\Command(["dbstats" => 1]);
    $res = $mng->executeCommand("bitacora", $stats);
    $query = new MongoDB\Driver\Query([]); 
     
    $rows = $mng->executeQuery("bitacora.bitacora", $query);
    
    foreach ($rows as $row) {
    
        echo "$row->fecha : $row->canal\n";
    }

    $stats = current($res->toArray());

    print_r($stats);





} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}
?>

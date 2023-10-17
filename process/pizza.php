<?php

include_once("conn.php");

$method = $_SERVER["REQUEST_METHOD"];

if($method === "GET") {

    $bordasQuery = $conn->query("SELECT * FROM borda;");
    $bordas = $bordasQuery->fetchAll();

    $bordasQuery = $conn->query("SELECT * FROM massa;");
    $massas = $massasQuery->fetchAll();

    $saboresQuery = $conn->query("SELECT * FROM sabor;");
    $sabores = $saboresQuery->fetchAll();

}  else if( $method === "POST") {
    
}



?>
<?php


include 'start.php';


//$req_uri = $_SERVER['REQUEST_URI'];
//$route =  str_replace(SUBDIR, '', $req_uri  );


// $req_uri = str_replace(SUBDIR, '', $_SERVER['REQUEST_URI'] );
// $tokens = explode('/',rtrim($req_uri , '/'));
// $controller = ($tokens[0]);

$controller = 'brands';

$c_name = $controller  . 'Controller';




$c1= new  $c_name ($t1 , $db);










?>
<?php
ini_set("display_errors",1);error_reporting(-1);

require __DIR__ . '\vendor\autoload.php';

include_once("vendor/rok9ru/trpo-core/EquationInterface.php");
include_once("vendor/rok9ru/trpo-core/LogInterface.php");
include_once("vendor/rok9ru/trpo-core/LogAbstract.php");
include_once("vendor/altoronogon/Mallik/MallikException.php");
include_once("vendor/altoronogon/Mallik/Linear.php");
include_once("vendor/altoronogon/Mallik/Square.php");
include_once("vendor/altoronogon/Mallik/Log.php");
$co_arr = [];

$version = fopen("version", "r");


$a=readline("a=");
$b=readline("b=");  
$c=readline("c="); 

Mallik\Log::log('Version '.file_get_contents('version'));
//Mallik\Log::log("Program version: $version");

//Mallik\Log::_write();
//Mallik\Log::log("Entered numbers: " . implode(", ", $co_arr));
Mallik\Log::log("Equation: $a*x^2 + $b*x + $c = 0");
try {
	$solver = new Mallik\Square($a, $b, $c);
	
	Mallik\Log::log("Roots: " . implode(", ", $solver->solve($a, $b, $c)));
	
}catch(Mallik\MallikException $ex) {
	Mallik\Log::log($ex->getMessage());
} 
Mallik\Log::write();
?>

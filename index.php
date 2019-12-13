<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("vendor/core/EquationInterface.php");
include_once("vendor/core/LogInterface.php");
include_once("vendor/core/LogAbstract.php");
include_once("vendor/Mallik/MallikException.php");
include_once("vendor/Mallik/Linear.php");
include_once("vendor/Mallik/Square.php");
include_once("vendor/Mallik/Log.php");
$co_arr = [];
$file = fopen("project/version", "r");
$version = fread($file, 1024);
Mallik\Log::log("Program version: $version");
foreach(["a", "b", "c"] as $co) {
	echo "Enter ".$co.": ";
	$line = stream_get_line(STDIN, 1024, PHP_EOL);
	$co_arr[$co] = $line === "" ? 0 : $line;
}
$a = $co_arr["a"];
$b = $co_arr["b"];
$c = $co_arr["c"];
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

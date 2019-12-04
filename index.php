<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("Mallik/rudException.php");
include_once("Mallik/Linear.php");
include_once("Mallik/Quadratic.php");
include_once("Mallik/Log.php");

$a = 1;
$b = 9;
$c = 1;

try {
	$solver = new Mallik\Quadratic($a, $b, $c);
	$roots = $solver->ur2($a, $b, $c);
	
	if (is_array($roots)) {
		Mallik\Log::log("two roots");
		Mallik\Log::log("roots: " . $roots[0] . " " . $roots[1]);
	} else {
		Mallik\Log::log("one root");
		Mallik\Log::log("root: " . $roots);
	}
}catch(Mallik\BTSException $ex) {
	Mallik\Log::log($ex->getMessage());
}
Mallik\Log::write();
?>

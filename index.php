<?php 
// show php errors
ini_set('display_errors', 1);
require (__DIR__.'/ConnectorOrsr.php');

$connector = new lubosdz\parserOrsr\ConnectorOrsr();
$connector->useTidy = false;

$data = $connector->getDetailByICO($_GET['ico']); // fails - must be 8 digits

echo json_encode($data);

$connector->resetOutput();

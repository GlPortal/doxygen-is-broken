<?php
$xml=simplexml_load_file("example.xml") or die("Error: Cannot create object");
//var_dump();
$className = $xml->compounddef->compoundname[0];
include('template.php');
//echo $xml->doxygen->compounddef . "<br>";
?>
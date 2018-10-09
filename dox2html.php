<?php
include('doxygenToHtml.php');
$xml=simplexml_load_file("example.xml") or die("Error: Cannot create object");
$className = $xml->compounddef->compoundname[0];
$definitions = $xml->compounddef;
include('template.php');
?>

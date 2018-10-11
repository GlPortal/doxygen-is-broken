<?php
include('doxygenToHtml.php');
$xml=simplexml_load_file("example.xml") or die("Error: Unable to load file.");
$className = $xml->compounddef->compoundname[0];
$definitions = $xml->compounddef;
include('template.php');
?>

<html>
<head>
<title>
Class Documentation for <?php echo $className ?>
</title>
</head>
<h1>
  Class Documentation for <?php echo $className ?>

</h1>
<?php
$privateSection = $publicSection = '';
foreach ($definitions->sectiondef as $section) {
    if($section['kind'] == 'private-static-attrib'){
        $privateSection .= '<h2>Private Members</h2>' . PHP_EOL;
        $privateSection .= getSectionHtml($section);

    } else if ($section['kind'] == 'public-static-func') {
        $publicSection .= '<h2>Public Members</h2>' . PHP_EOL;
        $publicSection .= getSectionHtml($section);
    }
}


if(!empty($publicSection)){
    echo $publicSection;
}

if(!empty($privateSection)){
    echo $privateSection;
}


?>
</html>

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
foreach ($definitions->sectiondef as $section) {
    if($section['kind'] == 'private-static-attrib'){
        echo '<h2>Private Members</h2>', PHP_EOL;
    } else if ($section['kind'] == 'public-static-func') {
        echo '<h2>Public Members</h2>', PHP_EOL;
    }
    echo '<p>', PHP_EOL;
    echo '<ul>', PHP_EOL;
    foreach ($section->memberdef as $member) {
        echo '<li>', PHP_EOL;
        echo $member->type, ' ', $member->name, PHP_EOL;
        echo '</li>', PHP_EOL;
    }
    echo '</ul>', PHP_EOL;
    echo '</p>', PHP_EOL;
}

?>
</html>

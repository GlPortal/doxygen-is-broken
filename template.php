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

    foreach ($section->memberdef as $member) {
        echo '<h3>';
        echo $member->type, ' ', $member->name;
        echo '(';
        foreach ($member->param as $key => $param) {
            if($key > 0) {
                echo ', ';
            }
            echo $param->type , ' ' , $param->declname;
        }
        echo ')';
        echo '</h3>', PHP_EOL;
    }

}

?>
</html>

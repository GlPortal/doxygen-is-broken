<?php
function getSectionHtml($section) {
    $result = '';
    foreach ($section->memberdef as $member) {
        $result .= '<h3>';
        $result .= $member->type . ' ' . $member->name;
        $result .= '(';
        foreach ($member->param as $key => $param) {
            if($key > 0) {
                $result .= ', ';
            }
            $result .= $param->type . ' ' . $param->declname;
        }
        $result .= ')';
        $result .= '</h3>'. PHP_EOL;
    }

    return $result;
}
?>

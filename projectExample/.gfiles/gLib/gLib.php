<?php
function findKey($array, $value)
{
    foreach ($array as $k => $v) {
        if (strcmp($v, $value) == 0)
            return $k;
    }
    return NULL;
}
function findValue($array, $key)
{
    foreach ($array as $k => $v) {
        if (strcmp($k, $key) == 0)
            return $v;
    }
    return NULL;
}
function keyExists($array, $key)
{
    foreach ($array as $k => $v) {
        if (strcmp($k, $key) == 0)
            return true;
    }
    return false;
}
function render($templateName, $tabArgs)
{
    $names = explode(".", $templateName);
    require_once("./".$names[0]."/templates/".$names[1].".php");
    //echo "coucou de render";
}
?>
<?php
    echo getcwd();
    require_once("./webConfiguration/GSettings.php");
    $gCurrentPath = getcwd();//when create project, write path here
    $settings = new GSetting();
    if ($settings->debug)
        echo 'debug enable <br>';

?>
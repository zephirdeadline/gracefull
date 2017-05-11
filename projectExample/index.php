<?php

    session_start();
    $_SESSION['user'] = array('init' => 'OK');
    //echo getcwd();

    require_once("./webConfiguration/GSettings.php");
    $settings = new GSetting();
    $_SESSION['pathProject'] = $settings->projectPath;

    if ($settings->debug)
        $_SESSION['debug'] = true;
    //load URL
    require_once("./webConfiguration/urls.php");
    require_once("./.gfiles/gLib/gLib.php");

    if (keyExists(gUrlSetting::$urls, $_SERVER['REQUEST_URI']))
    {
        $param = explode("." , findValue(gUrlSetting::$urls, $_SERVER['REQUEST_URI']));
        require_once("./".$param[0]."/views.php");
        if (function_exists($param[1]))
            echo $param[1]();
        else
            echo "view finction not found";
    }
    else
    {
        echo $_SERVER['REQUEST_URI'];

        echo 'url not found';
    }

?>
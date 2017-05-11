<?php
    session_start();
    if ($_SESSION['debug'])
    {
        require_once($_SESSION['pathProject']."/.gfile/.debug/ModelPanelDebug.php");
        $panelDebug = new ModelPanelDebug();
        $panelDebug->printrDebug();
    }
?>
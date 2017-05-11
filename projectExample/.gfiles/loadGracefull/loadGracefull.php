<?php
    //session_start();
function debugPanel()
{
        
        require_once("./.gfiles/.debug/ModelPanelDebug.php");
        $panelDebug = new PanelDebug($_SESSION, $_SERVER);
        $panelDebug->dumpDebug();
}
?>
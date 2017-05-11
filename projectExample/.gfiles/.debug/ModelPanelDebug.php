<?php 
 class PanelDebug{
    private $path = getcwd();
    private $session = $_SESSION;
    private $server = $_SERVER;
    private $file = __FILE__;

    private $panelDebug = array(
        'session' => $session,
        'server' => $server,
        'file' => $file,
        'path' => $path,
         );
    public function getPanelDebug()
    {
        return $panelDebug;
    }

    public function printrDebug()
    {
        print_r($panelDebug);
    }

    public function dumpDebug()
    {
        var_dump(panelDebug);
    }
 }
?>
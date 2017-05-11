<?php 
 class PanelDebug{
   // private $path = getcwd();

    private $session;
    private $server;
    private $file = __FILE__;
    private $panelDebug;
    function __construct($session, $server)
    {
        $this->$session = $session;
        $this->$server = $server;
        $panelDebug = array(
        'session' => $session,
        'server' => $server,
        'file' => $file,
        'path' => $path,
         );
    }

   
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
        var_dump($panelDebug);
    }
 }
?>
#! /usr/bin/env php
<?php
    function argParse($arg)
    {
        global $argv;
        if (strcmp($argv[1], "startapp") == 0)
        {
            if (count($argv) < 3)
            {
                echo "usage of startapp: ./manage startapp name\n";
                exit;
            }
            startapp();
        }
    }

    argParse($argv);

    function startapp()
    {
        global $argv;
        mkdir("module_".$argv[2]);
        mkdir("module_".$argv[2]."/templates");
        mkdir("module_".$argv[2]."/statics");
        $content = 'class gUrl'.$argv[2].'{
    public static $urls = array(
       
    );
  }';
        file_put_contents("module_".$argv[2]."/urls.php" ,$content);
        $f = fopen("module_".$argv[2]."/models.php", "w");
        fclose($f);
        $f = fopen("module_".$argv[2]."/views.php", "w");
        fclose($f);
    }

?>
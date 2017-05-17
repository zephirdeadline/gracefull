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
    if ($_SESSION['debug'])
    {
        require_once("./.gfiles/loadGracefull/loadGracefull.php");
        debugPanel();
    }

    $names = explode(".", $templateName);
    $nameTempl = "./".$names[0]."/templates/".$names[1].".html";

    if (file_exists($nameTempl))
    {
        echo 'the template exist';
        $fileContent = file_get_contents($nameTempl);
        $arrayOfLine = explode("\n", $fileContent);
        for ($i = 0; $i < count($arrayOfLine); $i++) {
            $line = $arrayOfLine[$i];
            

            //simple iteratif for loop on number
            if (preg_match("#\{\{ for (?P<name>[a-zA-Z0-9_]+)=(?P<content>[0-9]+) in (?P<num>[0-9]+) \}\}.*#", $line, $matches))
            {
                
                $j = 1;
                for ($n = $matches['content']; $n < $matches['num']; $n++)
                {
                    $tabArgs[$matches['name']] = $n;
                    $j = 1;
                    while (!preg_match("#\{\{ endfor \}\}#", $arrayOfLine[$i+$j])) {
                        echo replaceVar($arrayOfLine[$i+$j], $tabArgs);
                        $j++;
                    }
                }

                $i+=$j;
                
            }
            else if (preg_match("#\{\{ for (?P<content>[a-zA-Z0-9_]+) in (?P<num>[0-9]+) \}\}.*#", $line, $matches))
            {
                $j = 1;
                for ($n = 0; $n < $matches['num']; $n++)
                {
                    $j = 1;
                    while (!preg_match("#\{\{ endfor \}\}#", $arrayOfLine[$i+$j])) {
                        echo replaceVar($arrayOfLine[$i+$j], $tabArgs);
                        $j++;
                    }
                }

                $i+=$j;
                
            }
            else if (preg_match("#\{\{ for (?P<content>[a-zA-Z0-9_]+) in (?P<tab>[0-9]+) \}\}.*#", $line, $matches))
            {
                $j = 1;
                for ($n = 0; $n < count($tabArgs[$matches['tab']]); $n++)
                {
                    $j = 1;
                    while (!preg_match("#\{\{ endfor \}\}#", $arrayOfLine[$i+$j])) {
                        echo replaceVar($arrayOfLine[$i+$j], $tabArgs);
                        $j++;
                    }
                }

                $i+=$j;
                
            }
            else
                echo replaceVar($line, $tabArgs);
          
     }
    }
    else
        echo 'notemplate found';

      //require_once("./".$names[0]."/templates/".$names[1].".php");
    //echo "coucou de render";

}

function replaceVar($lineOfTab, $tabArgs)
{
    $line = $lineOfTab;
    while (preg_match("#\{\{ (?P<content>[a-zA-Z0-9_\[\]'\"]+) \}\}.*#", $line, $matches))
    {
        $line = preg_replace("#\{\{ ".$matches['content']." \}\}#", $tabArgs[$matches['content']], $line);
    }
    return $line;
}
?>
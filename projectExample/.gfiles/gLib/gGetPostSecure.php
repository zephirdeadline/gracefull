<?php

    function gSecureArray(&$array)
    {
        foreach ($array as $key => $value) {
            if (is_array($array[$key]))
            {
                $array[$key] = gSecureArray($array[$key]);
            }
            else
            {
                $array[$key] = strip_tags(pg_escape_string(trim($array[$key])));
            }
        }

    }

    function gGetSecurePost()
    {
        global $_POST;
        if (isset($_POST))
        {
            $_POST["idPost"] = md5($_POST);
            foreach ($_POST as $key => $value) {
                if (is_array($_POST[$key]))
                {
                    gSecureArray($_POST[$key]);
                }
                else
                {
                    $_POST[$key] = strip_tags(pg_escape_string(trim($_POST[$key])));
                }
            }
        }
    }

    function gCleanSpecialCharHtlmArray(&$arr)
    {
        if (is_array($arr)){
            foreach ($arr as $key => $value) {
                $arr[$key] = htmlspecialchars($value);
            }
        }
        else{
            htmlspecialchars($arr);
        }
    }
?>
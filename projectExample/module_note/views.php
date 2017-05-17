<?php
   //describe your view here

    function noteIndex()
    {
        //Load and parse a file.

        $args = array(); //list of var for the view

        render("module_note.index.html", $args);

    }

    function noteList()
    {
        //Load and parse a file.
        $args = array(); //list of var for the view
        $args['title'] = "Test ARG TAB";
        $args['desc'] = "Victory for args";
        $args['array'] = array('a' => 'a',
        'b' => 'b',
        'c' => 'c' );
        render("module_note.list.html", $args); 

    }

    function testPost()
    {

        //$args = array();
        global $_POST;
        //var_dump($_POST);
        if (isset($_POST['name']))
        {
            require_once("./.gfiles/gLib/gConnectDB.php");//TODO get
            
            //simple query send
           /* $conx = new ConnectdbPsql();
            $req = 'insert into users values(default, $1, $2)';
            $conx->gSendSimpleQuery($req, $_POST);*/

            //simple getting data
            /*$conx = new ConnectdbPsql();
            $req = 'select * from users where name=$1 AND age=$2';
            $res = $conx->gGetSimpleQuery($req, $_POST);
            foreach ($res as $r) {
                $_POST['name'] = $r['name'];
            }*/
            

        }

        //$args['']
        render("module_note.testPost.html", $_POST);
    }

?>
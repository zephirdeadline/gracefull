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

?>
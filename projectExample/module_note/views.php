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
        $args['hello'] = array('h' => 5, );;
        render("module_note.list.html", $args);

    }

?>
<?php
   //describe your view here

    function noteIndex()
    {
        //Load and parse a file.

        $args = array(); //list of var for the view

        render("module_note.index.php", $args);

    }

    function noteList()
    {
        //Load and parse a file.
        $args = array(); //list of var for the view

        render("module_note.list.php", $args);

    }

?>
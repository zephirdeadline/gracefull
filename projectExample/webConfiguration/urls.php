<?php
/*
  here setup your url path  
*/
  class gUrlSetting{
    public static $urls = array(
        '/projectExample/note/'      => "module_note.noteIndex", //name of the view function
        '/projectExample/note/list/' => "module_note.noteList",
        '/projectExample/'           => "module_note.noteIndex",

        //TODO parse url to remove the /
        '/projectExample/note'       => "module_note.noteIndex", //name of the view function
        '/projectExample/note/list'  => "module_note.noteList",
        '/projectExample'            => "module_note.noteIndex",
    );
  }



?>

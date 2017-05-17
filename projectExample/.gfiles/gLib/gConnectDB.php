<?
    class ConnectdbPsql{

        private $dbconn;
        function __construct()
        {
     
            $this->dbconn = pg_connect("host=localhost dbname=".GSetting::$dbName." user=".GSetting::$dbUser." password=".GSetting::$dbPass."");
        }


        public function getConnection()
        {
            return $dbconn;
        }

        public function gValidSendSimpleQuery($req, $args)
        {
            require_once("./.gfiles/gLib/gGetPostSecure.php");
            gSecureArray($args);
            pg_query("begin");
            pg_query_params($this->dbconn, $req, $args);
            pg_query("commit");
        }


        public function gSendSimpleQuery($req, $args)
        {
            require_once("./.gfiles/gLib/gGetPostSecure.php" );
            gSecureArray($args);
            pg_query_params($this->dbconn, $req, $args);
            
        }

        public function gGetSimpleQuery($req, $args)
        {
            require_once("./.gfiles/gLib/gGetPostSecure.php" );
            gSecureArray($args);
            $res = pg_query_params($this->dbconn, $req, $args);
            $arr = array();
            //var_dump($res);
            while (($r = pg_fetch_assoc($res))) {
                //var_dump($r);
                gCleanSpecialCharHtlmArray($r);
                $arr[] = $r;
            }
            return $arr;
        }


    }

?>
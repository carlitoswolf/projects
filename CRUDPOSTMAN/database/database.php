<?php 

    class Database extends Mysqli {
        function __construct(){
            parent::__construct('localhost','root','','pweb');
            $this->set_charset('utf8');
            $this->connect_error == NULL ? 'Connection is good' : die('The connection is fatal');
        }// end __construct
    } //end class connection

?>
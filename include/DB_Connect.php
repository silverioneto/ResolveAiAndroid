<?php
class DB_Connect {
 
    // constructor
    function __construct() {
         
    }
 
    // destructor
    function __destruct() {
        // $this->close();
    }
 
    // Connecting to database
    public function connect() {
        //require_once 'config.php';
        // connecting to mysql
       // $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
        $con = mysql_connect('localhost','root', '123') or die(mysql_error());
        // selecting database
        mysql_select_db('resolveai') or die(mysql_error());    
           
        mysql_query("SET NAMES 'utf8'");        
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
 
        // return database handler

        return $con;
    }
 
    // Closing database connection
    public function close() {
        mysql_close();
    }
 
}
 
?>
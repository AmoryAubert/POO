<?php 
class database{
    public function __construct($host,$dbname,$dbuser,$dbpassword){
        $this->host = $host;
        $this->dbname = $dbname;
        $this->dbuser = $dbuser;
        $this->dbpassword = $dbpassword;
    }
}
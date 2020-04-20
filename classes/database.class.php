<?php

class Database
{
    private $connection;
    
    function __construct()
    {
        $this->connect_db();
    }

    public function connect_db()
    {
		$this->connection = mysqli_connect('localhost', 'yuri', 'blabla', 'album_app') or die(mysqli_connect_error());
        if(mysqli_connect_error())
        {
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
    }
    
    public function sanitize($var)
    {
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }

    public function queryset($sql)
    {
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }


}
$database = new Database();
$database->connect_db();
?>
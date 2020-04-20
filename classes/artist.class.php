<?php
require_once(__DIR__ . '/database.class.php');

class Artist
{
    private $artistName;
    private $artistTwitter;
    private $id;

    function __construct($id, $artistName, $artistTwitter)
    {
        $this->artistName = $artistName;
        $this->artistTwitter = $artistTwitter;
        $this->id = $id;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_artistName()
    {
        return $this->artistName;
    }

    public function get_artistTwitter()
    {
        return $this->artistTwitter;
    }

    public function set_artistName($artistName)
    {
        $this->artistName = $artistName;
    }

    public function set_artistTwitter($artistTwitter)
    {
        $this->artistTwitter = $artistTwitter;
    }

    public function get_albums()
    {
        $query = "SELECT * FROM albums WHERE id_artist = " . $this->id;
        $response = $database->queryset($query);

        return $response;
    }

    public function add()
    {
        $query = "INSERT INTO artists VALUES (" . $this->id . ", '" . $this->artistName . "', '" . $this->artistTwitter . "')";
        $database->queryset($query);

        return 1;
    }

    public function update($id, $name, $twitter)
    {
        
        $query = "UPDATE artists SET artist_name = '$name', twitter_handle = '$twitter' WHERE id = " . $id;
        $result = $database->queryset($query);

        return $result;  
    }

    public function delete()
    {
        $query = "DELETE FROM artists WHERE id = " . $this->id;
        $database->queryset($query);

        return 1;
    }
}
?>
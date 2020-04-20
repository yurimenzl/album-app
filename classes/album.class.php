<?php

class Album
{
    private $albumId;
    private $albumArtist;
    private $albumName;
    private $albumYear;

    function __construct($albumId, $albumArtist, $albumName, $albumYear)
    {
        $this->albumId = $albumId;
        $this->albumArtist = $albumArtist;
        $this->albumName = $albumName;
        $this->albumYear = $albumYear;
    }

    public function get_albumId()
    {
        return $this->albumId;
    }

    public function get_albumArtist()
    {
        return $this->albumArtist;
    }

    public function get_albumName()
    {
        return $this->albumName;
    }

    public function get_albumYear()
    {
        return $this->albumYear;
    }

    public function set_albumId($albumId)
    {
        $this->albumId = $albumId;
    }

    public function set_albumArtist($albumArtist)
    {
        $this->albumArtist = $albumArtist;
    }

    public function set_albumName($albumName)
    {
        $this->albumName = $albumName;
    }

    public function set_albumYear($albumYear)
    {
        $this->albumYear = $albumYear;
    }
}
?>
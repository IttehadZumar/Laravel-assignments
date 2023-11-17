<?php 
class Song{
    public $songID;
    public $title;
}

$numb = new Song();
$numb->songID = 1;
$numb->title = 'Numb';
print_r($numb);

class Playlist{
    public $name;
    public $songs = [];

    public function addSong($song){
        $this->songs[] = $song;
    }
}

$playlist = new Playlist();
$playlist->name = 'Rock';
$playlist->addSong($numb); //ekta class er object er moddhe arekta class er object input neoa k bole composition
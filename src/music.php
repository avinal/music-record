
<?php
/*PHP program to build a class and store the music data
*/
class Music
{
    var $name;
    var $language;
    var $artist;
    var $genre;
    var $link;

    //constructor: initializes the value of name,language,and genre 

    function Music($name, $language, $genre, $artist, $link)
    {
        $this->name = $name;
        $this->language = $language;
        $this->genre = $genre;
        $this->artist = $artist;
        $this->link = $link;
    }
}

?>


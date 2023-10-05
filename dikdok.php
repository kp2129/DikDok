<?php
class Komentārs
{
    public $id;
    public $video_id;
    public $autora_id;
    public $teksts;

    function __construct($id, $video_id, $autora_id, $teksts)
    {
        $this->id = $id;
        $this->video_id = $video_id;
        $this->autora_id = $autora_id;
        $this->teksts = $teksts;
    }
}

class Video
{
    public $id;
    public $url;
    public $autora_id;
    public $nosaukums;

    function __construct($id, $url, $autora_id, $nosaukums)
    {
        $this->id = $id;
        $this->url = $url;
        $this->autora_id = $autora_id;
        $this->nosaukums = $nosaukums;
    }
}

<?php
class Advert {
    private $id;
    private $userid;
    private $title;

    public function __construct($data) {
        $this->id = $data['id'];
        $this->userid = $data['userid'];
        $this->title = $data['title'];
    }

    public function getId() {
        return $this->id;
    }       

    public function getUserId() {
        return $this->userid;
    }

    public function getTitle() {
        return $this->title;
    }
}
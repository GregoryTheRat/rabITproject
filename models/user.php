<?php
class User {
    private $id;
    private $name;

    //contructor from assoc array, for easy sql response handle
    public function __construct($data) {
        $this->id = $data['id'];
        $this->name = $data['name'];
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}
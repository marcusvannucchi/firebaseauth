<?php
namespace APP\models;

class todo {
     public $sid;
     public $title;
    public function __construct($id, $title){
        $this->id = $id;
        $this->title = $title;
    }




}
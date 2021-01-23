<?php

class Model {

    protected $json;

    public function __construct() {
        $this->json = file_get_contents('./data-1.json');
    }

    public function getDataJson() {       
        return json_decode($this->json, true);
    }

}
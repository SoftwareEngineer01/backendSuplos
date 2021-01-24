<?php

class Model {

    public static function getDataJson() {      
        $json = file_get_contents('./data/data-1.json');
        return json_decode($json, true);
    }

}
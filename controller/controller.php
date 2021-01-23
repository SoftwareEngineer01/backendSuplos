<?php

require_once "model/model.php";

class Controller {
    
    public static function getData() {
        $model = new Model();
        return $model->getDataJson();
    }

    public function getDataSelect($val){
        $model = new Model();
        $array = $model->getDataJson();
        $temp = array();             
        $fixed = array();

        foreach($array as $key => $value){
            if (!empty($value[$val]) && !in_array($value[$val], $temp)){
                $temp[] = $value[$val];
                $fixed[] = $value;
            }              
        } 

        return $fixed;
    }

    public function getDataParams($city=null, $type=null){
        $model = new Model();
        $array = $model->getDataJson();        
        $temp = array();             
        $fixed = array();

        foreach($array as $key => $value){
          if($value['Ciudad'] == $city && $value['Tipo'] == $type) {
                $fixed[] = $value; 
          }elseif($value['Ciudad'] == $city && $type == null) {
            $fixed[] = $value; 
          }elseif($value['Tipo'] == $type && $city == null){
            $fixed[] = $value; 
          }                     
        } 

        return $fixed;
    }

}








<?php

class Controller {
    
    public static function getData() {
      $model = Model::getDataJson();
      return $model;
    }

    public static function getDataSelect($val) {        
      $array = Model::getDataJson();
      $temp  = array();             
      $fixed = array();

      foreach($array as $key => $value){
          if (!empty($value[$val]) && !in_array($value[$val], $temp)){
              $temp[] = $value[$val];
              $fixed[] = $value;
          }              
      } 

      return $fixed;
    }

    public static function getDataParams($city=null, $type=null){
      $json  = file_get_contents('../data/data-1.json');
      $array = json_decode($json, true);                  
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
    
      return json_encode($fixed);
    }

    public static function getDataById($id) {
      $json  = file_get_contents('../data/data-1.json');
      $array = json_decode($json, true);                  
      $fixed = '';

      foreach ($array as $key => $value) {
        if($id == $value['Id']) {
          $fixed = $value;
        }
      }

      return $fixed;
    }

}








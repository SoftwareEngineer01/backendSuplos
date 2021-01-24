<?php 

require_once "controller.php";

class AjaxController {

    public $city;
    public $type;
   
    public function getData() {        
      $city = $this->city;
      $type = $this->type;
        
      $data = Controller::getDataParams($city, $type);
      echo $data;
    }

}

if(isset($_POST["ciudad"]) || isset($_POST["tipo"])){
    $data = new AjaxController();
    $data->city = $_POST["ciudad"];
    $data->type = $_POST["tipo"];
    $data->getData();
}


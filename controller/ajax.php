<?php 

require_once "controller.php";
require_once "../model/model.php";

class AjaxController {

    public $id;
    public $city;
    public $type;
   
    public function getData() {        
      $city = $this->city;
      $type = $this->type;
        
      $data = Controller::getDataParams($city, $type);
      echo $data;
    }

    public function getDataById() {
      $id = $this->id;
      $info = Controller::getDataById($id);
      echo json_encode($info);
    }

}

if(isset($_POST["ciudad"]) || isset($_POST["tipo"])){
  $data = new AjaxController();
  $data->city = $_POST["ciudad"];
  $data->type = $_POST["tipo"];
  $data->getData();
}elseif (isset($_POST['id'])) {
  $info = new AjaxController();
  $info->id = $_POST["id"];
  $info->getDataById();
}
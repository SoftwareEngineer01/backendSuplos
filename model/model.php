<?php

require_once 'connection.php';

class Model {

    public static function getDataJson() {      
        $json = file_get_contents('./data/data-1.json');
        return json_decode($json, true);
    }

    public static function addProperty($data) {
        $message = null;

        $stmt = Connection::connect()->prepare("INSERT INTO intelcost (id_intelcost, direction, city, telephone, zip_code, type, price)
                                                VALUES (:id_intelcost, :direction, :city, :telephone, :zip_code, :type, :price)");
        
        $stmt->bindParam(':id_intelcost', $data['Id'], PDO::PARAM_INT);
        $stmt->bindParam(':direction',    $data['Direccion'], PDO::PARAM_STR);
        $stmt->bindParam(':city',         $data['Ciudad'], PDO::PARAM_STR);
        $stmt->bindParam(':telephone',    $data['Telefono'], PDO::PARAM_STR);
        $stmt->bindParam(':zip_code',     $data['Codigo_Postal'], PDO::PARAM_STR);
        $stmt->bindParam(':type',         $data['Tipo'], PDO::PARAM_STR);
        $stmt->bindParam(':price',        $data['Precio'], PDO::PARAM_STR);
        
        if($stmt->execute()){
			$message = "El inmueble ha sido agregado";
		}else{
			$message = "Ha ocurrido un error al agregar el inmueble";
        }
        
        return $message;

		$stmt->close();
		$stmt = null;
    }

}
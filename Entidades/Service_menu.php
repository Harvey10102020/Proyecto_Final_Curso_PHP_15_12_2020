<?php
class Service_menu extends Service_plantilla{
    public static $service_menu;
    public function __construct(){
  
    }
    public static function getInstance() {
        if (!(self::$service_menu instanceof self) ) {
            self::$service_menu = new Service_menu();
        }
        return self::$service_menu;
    } 
    public function generar_menu($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
 
}




?>
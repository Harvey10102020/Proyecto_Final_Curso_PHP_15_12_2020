<?php
class Service_secciones extends Service_plantilla{
    public static $service_secciones;
    public function __construct(){
  
    }
    public static function getInstance() {
        if (!(self::$service_secciones instanceof self) ) {
            self::$service_secciones = new Service_secciones();
        }
        return self::$service_secciones;
    } 
    public function generar_seccion_inicio($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
 
    public function generar_seccion_curso($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
 

    public function generar_seccion_hobbies($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
 
    public function generar_seccion_perfil($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
 

}




?>
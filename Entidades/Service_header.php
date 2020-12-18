<?php
class Service_header extends Service_plantilla{
    public static $service_header;
    public function __construct(){
  
    }
    public static function getInstance() {
        if (!(self::$service_header instanceof self) ) {
            self::$service_header = new Service_header();
        }
        return self::$service_header;
    } 
    public function generar_header($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        // $_AJAX = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        // // return "Hola ".$_AJAX["Nombre"]." ".$_AJAX["Apellido"]." ".$_DATA['Mensaje'];
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
}
?>
<?php
class Service_imagenes extends Service_plantilla{
    public static $service_imagenes;
    public function __construct(){
  
    }
    public static function getInstance() {
        if (!(self::$service_imagenes instanceof self) ) {
            self::$service_imagenes = new Service_imagenes();
        }
        return self::$service_imagenes;
    } 
    public function generar_imagenes($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
      // $_AJAX = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        // // return "Hola ".$_AJAX["Nombre"]." ".$_AJAX["Apellido"]." ".$_DATA['Mensaje'];
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
}
?>
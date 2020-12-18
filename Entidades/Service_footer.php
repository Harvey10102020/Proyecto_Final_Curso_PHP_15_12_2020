<?php
class Service_footer extends Service_plantilla{ //ESTE ES EL ARCHIVO
    public static $service_footer;
    public function __construct(){
  
    }
    public static function getInstance() {
        if (!(self::$service_footer instanceof self) ) {
            self::$service_footer = new Service_footer();
        }
        return self::$service_footer;
    } 
    public function generar_footer($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
   // $_AJAX = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        // // return "Hola ".$_AJAX["Nombre"]." ".$_AJAX["Apellido"]." ".$_DATA['Mensaje'];
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
}
?>
<?php
class Service_login extends Service_plantilla{
    public static $service_login;
    public function __construct(){
  
    }
    public static function getInstance() {
        if (!(self::$service_login instanceof self) ) {
            self::$service_login = new Service_login();
        }
        return self::$service_login;
    } 
    public function generar_login($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        // $_AJAX = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        // // return "Hola ".$_AJAX["Nombre"]." ".$_AJAX["Apellido"]." ".$_DATA['Mensaje'];
        $datos = [];
        $datos["Datos"]= $_DATA;
        $datos["Plantilla"]= null;
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
}
?>
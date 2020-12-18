<?php
interface Clases{
    const token_class = array(
        "Service_header" => "e56fedcd769a99518fe7902cbb11e61c61dc26e7",
        "Service_usuario" => "2c6f9afc16501bf4a3bb70b8e24f6ec76b4ac93e",
        "Service_login" => "fd67105084705906aa84a42b1a5449c7af2d5b99",
        "Service_menu" => "49110853c9730e4d87ee68fad8809a263c464c9f",
        "Service_footer" => "c4288b27a72cc63a24bf5c9b28898432be0c583b",
        "Service_imagenes" => "18a49c7ad0d9084615cff555f0ae9c9134017024",
        "Service_secciones" => "d973d97dabf3f7115b328a702f12d1578ccc5764"
    );
}



interface Metodos{

    const token_methodo = array(


        "16082501835fdbf34738218" => array(
            "id" => "generar_header",
            "Datos" => array(
                "field_header1" => 'PHP',
                "field_header2" => 'Pure.com'
            ),
            "Plantilla" => array(
                "Nombre", 
                "Apellido"
            )
        )
,

        "16082484365fdbec741fffc" => array(
            "id" => "generar_login",
            "Datos" => array(
                "field_login1" => 'Acceso a Usuarios',
                "field_login2" => 'Correo Electrónico',
                "field_login3" => 'Sus datos estan protegidos. Ver Política de Privacidad.',
                "field_login4" => 'Contraseña',
                "field_login5" => '',
                "field_login6" => 'Iniciar Sesión',
                "field_login7" => 'Regresar'
               
            ),
            "Plantilla" => array(
                "Nombre", 
                "Apellido"
            )
        )
,

        "16081652725fdaa79844f31" => array(
            "id" => "generar_usuario",
            "Datos" => array(
                "field_index1" => 'Bienvenido',
                "field_index2" => 'Este es el inicio de sesión',
                "field_index3" => 'Iniciar Sesión'
               
            ),
            "Plantilla" => array(
                "Nombre", 
                "Apellido"
            )
        )
,
        "16081687405fdab524ec8e9" => array(
            "id" => "generar_menu",
            "Datos" => array(
                "field_menu1" => 'Inicio',
                "field_menu2" => 'Curso',
                "field_menu3" => 'Hobbies',
                "field_menu4" => 'Perfil'
            ),
            "Plantilla" => array(
                "Nombre", 
                "Apellido"
            )
        )
    ,
        "16081688765fdab5acaafc2" => array(
            "id" => "generar_footer",
            "Datos" => array(
                "field_fotter1" => "Harvey Muralla Ariza",
                "field_fotter2" => "Profesional en Negocios Internacionales con 3 años de experiencia en programación"
            ),
            "Plantilla" => array(
                "Nombre", 
                "Apellido"
            )
        )
,
            "6081688985fdab5c2abe96" => array(
                "id" => "generar_imagenes",
                "Datos" => array(
                    "field_custom1" => '<img class="d-block w-100" src="img/1.jpg" alt="Programación">',
                    "field_custom2" => '<img class="d-block w-100" src="img/2.jpg" alt="Musica">',
                    "field_custom3" => '<img class="d-block w-100" src="img/3.jpg" alt="Juegos">'
                ),
                "Plantilla" => array(
                    // "Nombre", 
                    // "Apellido"
                )
            )
,
        "16082539795fdc021b8dcdc" => array(
            "id" => "generar_seccion_inicio",
            "Datos" => array(
                "field_custom1" => '<img class="d-block w-100" src="img/1.jpg" alt="Programación">',
                "field_custom2" => '<img class="d-block w-100" src="img/2.jpg" alt="Musica">',
                "field_custom3" => '<img class="d-block w-100" src="img/3.jpg" alt="Juegos">'
            ),
            "Plantilla" => array(
                // "Nombre", 
                // "Apellido"
            )
        )
,
        "16082540235fdc0247159da" => array(
            "id" => "generar_seccion_curso",
            "Datos" => array(
                "field_custom1" => '<img class="d-block w-100" src="img/4.jpg" alt="Programación">',
                "field_custom2" => '<img class="d-block w-100" src="img/5.jpg" alt="Musica">',
                "field_custom3" => '<img class="d-block w-100" src="img/6.jpg" alt="Juegos">'
            ),
            "Plantilla" => array(
                // "Nombre", 
                // "Apellido"
            )
        )
,
        "16082540325fdc02501d74" => array(
            "id" => "generar_seccion_hobbies",
            "Datos" => array(
                "field_custom1" => '<img class="d-block w-100" src="img/7.jpg" alt="Programación">',
                "field_custom2" => '<img class="d-block w-100" src="img/8.jpg" alt="Musica">',
                "field_custom3" => '<img class="d-block w-100" src="img/9.jpg" alt="Juegos">'
            ),
            "Plantilla" => array(
                // "Nombre", 
                // "Apellido"
            )
        )
,
         "16082540935fdc028d52392" => array(
                "id" => "generar_seccion_perfil",
                "Datos" => array(
                    "field_custom1" => '<img class="d-block w-100" src="img/10.jpg" alt="Programación">',
                    "field_custom2" => '<img class="d-block w-100" src="img/11.jpg" alt="Musica">',
                    "field_custom3" => '<img class="d-block w-100" src="img/12.jpg" alt="Juegos">',
                    "field_custom4" => '<img class="d-block w-100" src="img/12.jpg" alt="Juegos">',
                    "field_custom5" => '<img class="d-block w-100" src="img/12.jpg" alt="Juegos">',
                    "field_custom6" => '<img class="d-block w-100" src="img/12.jpg" alt="Juegos">'
                ),
                "Plantilla" => array(
                    // "Nombre", 
                    // "Apellido"
                )
            )
        
);
    
} 
interface Mensajes{
    const Clases_Methodo = array(
        "Clase_Negativa" => "No existe la Clase",
        "Methodo_Negativa" => "El metodo no existe"
    );
}
?>
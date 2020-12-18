// $(document).ready(function() {
//     $.ajax({
//         type: "GET",
//         url: "Api.php",
//         success: function(response) {
//             console.log(response);
//         }
//     });
// })

// // (document).ready(function() {
//     $.ajax({
//         type: "POST",
//         url: "Api.php",
//         headers: {}
//         data: { listadedatos: null }
//         success: function(response) {
//             console.log(response);
//         }
//     });
// })

//GENEARDOR DE CLAVES

// $(document).ready(function() {
//     $.ajax({
//         type: "GET",
//         url: "Api.php",

//         success: function(response) {
//             console.log(response);
//         }
//     });
// })


$(document).ready(function() {
    let datos = ["HARVEY", "MURALLA ARIZA"];
    // let types_objects = [

    //     "menu",
    //     "header",
    //     "login",
    //     "index",
    //     "footer"
    // ];
    // let methods_objects = [

    //     "16081687405fdab524ec8e9",
    //     "16082501835fdbf34738218",
    //     "16082484365fdbec741fffc",
    //     "16081652725fdaa79844f31",
    //     "16081688765fdab5acaafc2"
    // ];
    // let class_objects = [

    //     "49110853c9730e4d87ee68fad8809a263c464c9f",
    //     "e56fedcd769a99518fe7902cbb11e61c61dc26e7",
    //     "fd67105084705906aa84a42b1a5449c7af2d5b99",
    //     "2c6f9afc16501bf4a3bb70b8e24f6ec76b4ac93e",
    //     "c4288b27a72cc63a24bf5c9b28898432be0c583b"
    // ];

    // $.ajax({
    //     type: "POST",
    //     url: "Api.php",
    //     headers: {
    //         "Token-Metodo": "16081652725fdaa79844f31",
    //         "Class": "2c6f9afc16501bf4a3bb70b8e24f6ec76b4ac93e",
    //     },
    //     data: { datos: null },
    //     success: function(response) {
    //         console.log(response);
    //     }
    // });


    // let length = methods_objects.length;
    // for (let h = 0; h < length; h++) {


    //     $.ajax({
    //         type: "POST",
    //         url: "Api.php",
    //         headers: {

    //             alert(methods_objects[h]);
    //             "Token-Metodo": methods_objects[h],
    //             "Class": class_objects[h],
    //         },
    //         data: { datos: null },
    //         success: function(response) {
    //             let json = JSON.parse(response);
    //             let length = Object.keys(json["Datos"]).length;

    //             for (let h = 0; h < length; h++) {

    //                 for (let i = 0; i < length; i++) {
    //                     let j = i + 1;
    //                     let fields = types_objects[h] + j;

    //                     let content = json["Datos"][fields];
    //                     document.getElementById(fields).innerHTML = content;

    //                 }
    //             }
    //         }
    //     });

    // }
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers: {
            "Token-Metodo": "16081687405fdab524ec8e9",
            "Class": "49110853c9730e4d87ee68fad8809a263c464c9f",
        },
        data: { datos: null },
        success: function(response) {
            let json = JSON.parse(response);
            let length = Object.keys(json["Datos"]).length;
            for (var i = 0; i < length; i++) {
                let j = i + 1;
                let fields = "field_menu" + j;
                let content = json["Datos"][fields];
                document.getElementById(fields).innerHTML = content;

            }

        }
    });
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers: {
            "Token-Metodo": "16082501835fdbf34738218",
            "Class": "e56fedcd769a99518fe7902cbb11e61c61dc26e7",
        },
        data: { datos: null },
        success: function(response) {
            let json = JSON.parse(response);
            let length = Object.keys(json["Datos"]).length;
            for (var i = 0; i < length; i++) {
                let j = i + 1;
                let fields = "field_header" + j;
                let content = json["Datos"][fields];
                document.getElementById(fields).innerHTML = content;

            }

        }
    });
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers: {
            "Token-Metodo": "16082484365fdbec741fffc",
            "Class": "fd67105084705906aa84a42b1a5449c7af2d5b99",
        },
        data: { datos: null },
        success: function(response) {
            let json = JSON.parse(response);
            let length = Object.keys(json["Datos"]).length;
            for (var i = 0; i < length; i++) {
                let j = i + 1;
                let fields = "field_login" + j;
                let content = json["Datos"][fields];
                document.getElementById(fields).innerHTML = content;

            }

        }
    });
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers: {
            "Token-Metodo": "16081652725fdaa79844f31",
            "Class": "2c6f9afc16501bf4a3bb70b8e24f6ec76b4ac93e",
        },
        data: { datos: null },
        success: function(response) {
            let json = JSON.parse(response);
            let length = Object.keys(json["Datos"]).length;
            for (var i = 0; i < length; i++) {
                let j = i + 1;
                let fields = "field_index" + j;
                let content = json["Datos"][fields];
                document.getElementById(fields).innerHTML = content;

            }

        }
    });
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers: {
            "Token-Metodo": "16081688765fdab5acaafc2",
            "Class": "c4288b27a72cc63a24bf5c9b28898432be0c583b",
        },
        data: { datos: null },
        success: function(response) {
            let json = JSON.parse(response);
            let length = Object.keys(json["Datos"]).length;
            for (var i = 0; i < length; i++) {
                let j = i + 1;
                let fields = "field_fotter" + j;
                let content = json["Datos"][fields];
                document.getElementById(fields).innerHTML = content;

            }

        }
    });
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers: {
            "Token-Metodo": "6081688985fdab5c2abe96",
            "Class": "18a49c7ad0d9084615cff555f0ae9c9134017024",
        },
        data: { datos: null },
        success: function(response) {
            let json = JSON.parse(response);
            let length = Object.keys(json["Datos"]).length;
            for (var i = 0; i < length; i++) {
                let j = i + 1;
                let fields = "field_custom" + j; //index
                let content = json["Datos"][fields];
                document.getElementById(fields).innerHTML = content;

            }

        }
    });


    $("#field_menu1").click(function() {
        $.ajax({
            type: "POST",
            url: "Api.php",
            headers: {
                "Token-Metodo": "16082539795fdc021b8dcdc",
                "Class": "d973d97dabf3f7115b328a702f12d1578ccc5764",
            },
            data: { datos: null },
            success: function(response) {
                let json = JSON.parse(response);
                let length = Object.keys(json["Datos"]).length;
                for (var i = 0; i < length; i++) {
                    let j = i + 1;
                    let fields = "field_custom" + j;
                    let content = json["Datos"][fields];
                    document.getElementById(fields).innerHTML = content;

                }

            }
        });
    });


    $("#field_menu2").click(function() {
        $.ajax({
            type: "POST",
            url: "Api.php",
            headers: {
                "Token-Metodo": "16082540235fdc0247159da",
                "Class": "d973d97dabf3f7115b328a702f12d1578ccc5764",
            },
            data: { datos: null },
            success: function(response) {
                let json = JSON.parse(response);
                let length = Object.keys(json["Datos"]).length;
                for (var i = 0; i < length; i++) {
                    let j = i + 1;
                    let fields = "field_custom" + j;
                    let content = json["Datos"][fields];
                    document.getElementById(fields).innerHTML = content;

                }

            }
        });
    });


    $("#field_menu3").click(function() {
        $.ajax({
            type: "POST",
            url: "Api.php",
            headers: {
                "Token-Metodo": "16082540325fdc02501d74",
                "Class": "d973d97dabf3f7115b328a702f12d1578ccc5764",
            },
            data: { datos: null },
            success: function(response) {
                let json = JSON.parse(response);
                let length = Object.keys(json["Datos"]).length;
                for (var i = 0; i < length; i++) {
                    let j = i + 1;
                    let fields = "field_custom" + j;
                    let content = json["Datos"][fields];
                    document.getElementById(fields).innerHTML = content;

                }

            }
        });
    });


    $("#field_menu4").click(function() {
        $.ajax({
            type: "POST",
            url: "Api.php",
            headers: {
                "Token-Metodo": "16082540935fdc028d52392",
                "Class": "d973d97dabf3f7115b328a702f12d1578ccc5764",
            },
            data: { datos: null },
            success: function(response) {
                let json = JSON.parse(response);
                let length = Object.keys(json["Datos"]).length;
                for (var i = 0; i < length; i++) {
                    let j = i + 1;
                    let fields = "field_custom" + j;
                    let content = json["Datos"][fields];
                    document.getElementById(fields).innerHTML = content;

                }

            }
        });
    });


    // $.ajax({
    //     type: "GET",
    //     url: "Api.php",

    //     success: function(response) {
    //         console.log(response);
    //     }
    // });

    // $.ajax({
    //     type: "POST",
    //     url: "Api.php",
    //     headers: {
    //         "Token-Metodo": "16081688765fdab5acaafc2",
    //         "Class": "c4288b27a72cc63a24bf5c9b28898432be0c583b",
    //     },
    //     data: { datos: null },
    //     success: function(response) {
    //         console.log(response);
    //     }
    // });



    // $.ajax({
    //     type: "POST",
    //     url: "Api.php",
    //     headers: {
    //         "Token-Metodo": "6081688985fdab5c2abe96",
    //         "Class": "18a49c7ad0d9084615cff555f0ae9c9134017024",
    //     },
    //     data: { datos: null },
    //     success: function(response) {
    //         console.log(response);
    //     }
    // });



});
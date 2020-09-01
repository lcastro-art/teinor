$(document).ready(function() {
    $("#a").click(function() {

        $("#form").toggle(300);
    });



    $("#busqueda").keyup(function() {
        var busqueda = $('#busqueda').val();
        console.log(busqueda);

        $.ajax({
            data: { 'busqueda': busqueda },
            url: 'views/ajax/ajax.php',
            type: 'post',
            dataType: 'JSON',
            beforeSend: function() {},
            success: function(response) {
                $(".peliculas").html("");

                var len = response.length;
                for (var i = 0; i < len; i++) {
                    var nombre = response[i].nombre;
                    var any = response[i].any;

                    var output = "<div class='tarjetas col text-center  pb-3 pt-3'><p class='nombre2'>" + nombre + "</p><p class='any2'><em>" + any + "</em></p></div>";
                    $(".peliculas").append(output);
                }

            },
            error: function() {
                alert("error");
            }
        });
    });

});


// var peticio_http;

// function buscar(busqueda) {
//     if (window.XMLHttpRequest) {
//         peticio_http = new XMLHttpRequest();
//     } else if (window.ActiveXObject) {
//         peticio_http = new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     peticio_http.onreadystatechange = mostrar;
//     peticio_http.open("POST", "./controllers/ajax.controller.php", true);
//     peticio_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     peticio_http.send("busqueda=" + busqueda);
// }

// function mostrar() {
//     if (peticio_http.readyState == 4 && peticio_http.status == 200) {
//         var resultat = peticio_http.responseText;
//         var res = resultat.split("/");
//         res.pop();
//         console.log(res);
//         document.getElementById("body").innerHTML = "";
//         for (var i = 0; i < res.length; i++) {
//             var p = document.createElement("p");
//             var t = document.createTextNode((i + 1) + ". " + res[i]);
//             p.appendChild(t);
//             document.getElementById("body").appendChild(p);
//         }
//     }
// }
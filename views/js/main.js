$(document).ready(function() {
    $("#a").click(function() {

        $("#form").toggle(300);
    });



    $("#busqueda").keyup(function() {
        var busqueda = $('#busqueda').val();

        $.ajax({
            data: { 'busqueda': busqueda },
            url: 'views/ajax/buscar.ajax.php',
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

    $("#up").click(function() {
        $orden = "up";
        $.ajax({
            data: { 'ordenar': $orden },
            url: 'views/ajax/ordenar.ajax.php',
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

    $("#down").click(function() {
        $orden = "down";
        $.ajax({
            data: { 'ordenar': $orden },
            url: 'views/ajax/ordenar.ajax.php',
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
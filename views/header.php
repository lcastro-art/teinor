<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="views/js/jquery.min.js"></script>
    <script src="views/js/main.js"></script>
    <title>Teinor</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center m-5">Películas</h1>

        <div class="row row">
            <div class="col-md-6 col-sm-12">
                <button id="a" type="button" class="btn btn-outline-primary mb-3" >Añadir</button>

                <form method="post" class="form-inline" id="form">
                
                
                    <label for="nombre" class="sr-only">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control mb-2 mr-2" required placeholder="Nombre">

                    <label for="any" class="sr-only">Año</label>
                    <input id="any" type="number" name="any" class="form-control mb-2 mr-2" required placeholder="Año">

                    <button type="submit" name="enviar" class="btn btn-primary mb-2">Enviar</button>
                
                </form>

            </div>

            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-2">
                        <p class="ordenar">Ordenar por año: </p>
                        <button class="btn btn-primary" id="up">
                            <i class="fas fa-arrow-up"></i>
                        </button>
                        <button class="btn btn-primary" id="down">
                            <i class="fas fa-arrow-down"></i>
                        </button>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <input id="busqueda" type="text" class="form-control" placeholder="Buscar película ...">
                    </div>
                </div>
            </div>
        </div>

    

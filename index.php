<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parcial</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;,">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">API Fetch</h1>
                <form method="POST" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="pokemon" id="pokemon" class="form-control" placeholder="Ingrese el nombre del Pokémon">
                        <button type="submit" class="btn btn-primary">Consultar</button>
                    </div>
                </form>
                <p id="estado" class="text-center"></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>DATO</th>
                            <th>VALOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NOMBRE</td>
                            <td id="nombreMorty"></td>
                        </tr>
                        <tr>
                            <td>PESO</td>
                            <td id="pesoMorty"></td>
                        </tr>
                        <tr>
                            <td>TIPO</td>
                            <td id="tipoMorty"></td>
                        </tr>
                        <tr>
                            <td>CREADO</td>
                            <td id="creadoMorty"></td>
                        </tr>
                        <tr>
                            <td>IMAGEN</td>
                            <td><img src="" alt="" id="imagenMorty" class="img-fluid"></td>
                        </tr>
                    </tbody>
                </table>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parcial</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;,">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
/* #table {
    background-color: #E6F0FF;
} */

.metallic-blue {
      background-color: rgba(0, 123, 255, 0.5); 
      color: #fff; 
}
</style>
<body>
<header class="py-3 metallic-blue">
    <div class="container">
      <h1 class="text-center">COMANDO DE INFORMÁTICA Y TECNOLOGÍA</h1>
    </div>
  </header>
<div class="container mt-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center display-6 fw-bold text-primary bg-warning p-3">Personajes de la serie de Ricky Mortin</h1>
                <form id="formMorty" method="POST" class="mb-4">
                <div class="input-group">
                    <input type="text" name="morty" id="morty" class="form-control" placeholder="Ingrese el nombre del Personaje">
                </div>
                <div class="input-group mt-1">
                    <button type="submit" class="btn btn-primary">Consultar</button>
                    <button type="reset" class="btn btn-danger">Limpiar Formulario</button>
                </div>
                </form>
                <p id="estado" class="text-center bg-info"></p>
                <table id="tablaMorty" class="table table-bordered table-hover">
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
                            <td>Estado</td>
                            <td id="pesoMorty"></td>
                        </tr>
                        <tr>
                            <td>Genero</td>
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
            </div>
        </div>
    </div>
    <!--  -->
    <!-- aqui empieza el html del segundo endpoint -->
    <!--  -->
    <div class="container mt-5 bg-light">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="text-center display-6 fw-bold text-primary bg-warning p-3">Episodios de la serie de Ricky Mortin</h1>
        <form id="formEpisodio"method="POST" class="mb-4">
            <div class="input-group">
                <input type="text" name="episodio" id="episodio" class="form-control" placeholder="Ingrese el ID del episodio">
            </div>
            <div class="input-group mt-1">
                <button type="submit" class="btn btn-primary">Consultar</button>
                <button type="reset" class="btn btn-danger">Limpiar Formulario</button>
            </div>
        </form>
        <p id="estadoEpisodio" class="text-center bg-info"></p>
        <table id="tablaEpisodio" class="table table-bordered table-hover" style="display: none;">
            <thead>
            <tr>
                <th>DATO</th>
                <th>VALOR</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>ID</td>
                <td id="episodioId"></td>
            </tr>
            <tr>
                <td>Nombre del episodio</td>
                <td id="episodioName"></td>
            </tr>
            <tr>
                <td>Episodio al aire</td>
                <td id="episodioAire"></td>
            </tr>
            <tr>
                <td>CREADO</td>
                <td id="episodioCreado"></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>

    <!-- aqui empieza mi tercer endpoint busqueda de location por id  -->

    <div class="container mt-5 bg-light">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="text-center display-6 fw-bold text-primary bg-warning p-3">Ubicaciones de la serie de Ricky Mortin</h1>
        <form id="formLocation"method="POST" class="mb-4">
            <div class="input-group">
                <input type="text" name="location" id="location" class="form-control" placeholder="Ingrese el ID de la ubicación">
            </div>
            <div class="input-group mt-1">
                <button type="submit" class="btn btn-primary">Consultar</button>
                <button type="reset" class="btn btn-danger">Limpiar Formulario</button>
            </div>
        </form>
        <p id="estadoLocation" class="text-center bg-info"></p>
        <table id="tablaLocation" class="table table-bordered table-hover" style="display: none;">
            <thead>
            <tr>
                <th>DATO</th>
                <th>VALOR</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>ID</td>
                <td id="locationId"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td id="locationName"></td>
            </tr>
            <tr>
                <td>Tipo</td>
                <td id="locationTipo"></td>
            </tr>
            <tr>
                <td>Dimension</td>
                <td id="locationDimension"></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>

    <footer class="py-3 metallic-blue">
        <div class="container">
        <p class="text-center">COMANDO DE INFORMÁTICA Y TECNOLOGÍA &copy; 2023</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
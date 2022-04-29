<?php include("../template/cabecera.php"); ?>
<?php
$id=(isset($_POST['txtID']))?$_POST['txtID']:"";
$nombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";

$imagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

// if (isset ($_POST['accion'])) {
//     $nombre=$_POST["nombre"];

//     echo'<script>alert("Hola:'.$nombre.'");</script>';
// }
echo $id."<br>";
echo $nombre."<br>";
echo $imagen."<br>";
echo $accion."<br>";

# variables definidas para la conexion con la BD
$host="localhost";
$bd="pagina_php";
$usuario="root";
$contra="12345678";

# fracmento de codigo para generar la conexion.
try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contra);
    if ($conexion) {echo "Conectado.. a la bd";}
} catch (Exception $ex) {
    echo $ex->getMessage();
}


switch($accion){
    case"Agregar":
        //INSERT INTO `libros`(`id`,`nombre`,`imagen`) VALUES (null,'libro de pyhton','imagen2.jpf')
        echo "presionado el boton de agregar";
        break;
    case"Modificar":
        echo "presionado el boton de modificar";
        break;
    case"Cancelar":
        echo "presionado el boton de eliminar";
        break;
}
?>

    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Datos de Productos
            </div>
            <div class="card-body">
                <form method="POST"  enctype="multipart/form-data">
                    <div class = "form-group">
                        <label for="txtID">ID: </label>
                        <input type="text" class="form-control" name="txtID" id="txtID"  placeholder="ID">
                    </div>
                    <div class = "form-group">
                        <label for="txtNombre">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre"  placeholder="nombre del producto">
                    </div>

                    <div class = "form-group">
                        <label for="txtImagen">Imagen: </label>
                        <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="imagen">
                    </div>
                    
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                        <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                        <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Aprende php</td>
                    <td>imgen.jpg</td>
                    <td>seleccionar|borrar</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php include("../template/pie.php");?>
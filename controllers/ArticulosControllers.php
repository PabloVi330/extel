<?php
require_once '../models/ArticulosModels.php';

class ArticulosController
{
    private $articuloModel;

    public function __construct()
    {
        $this->articuloModel = new ArticuloModel();
    }


    public function crearArticulo()
    {
        $data = $_POST;
 
        $directorioDestino = 'uploads/products/';

        $nombresImagenes = [];
        $imagenes = $_FILES['imagenes'];
        $c = 1;
        foreach ($imagenes['tmp_name'] as $key => $tmp_name) {
            $nombreArchivo = $c . $data["codigo_A"] . '.png';
            $rutaArchivo = $directorioDestino . $nombreArchivo;
            if (move_uploaded_file($tmp_name, $rutaArchivo)) {
                $nombresImagenes[] = $nombreArchivo;
                $c++;
            } else {
                // Manejar errores si la carga de la imagen falla
                // Puedes agregar código aquí para manejar los errores según tus necesidades
            }
        }
        $data["imagenes"] = json_encode($nombresImagenes);
        $response = $this->articuloModel->crearArticulo($data);

        echo json_encode($response);

        // $response = $this->articuloModel->crearArticulo($_POST);

    }  

    public function editarArticulo()
    {
        $response = $this->articuloModel->editarArticulo($_POST);
        echo json_encode($response);     //$response = $this->articuloModel->actualizarArticulo();

    }


    public function eliminarArticulo()
    {
        $response = $this->articuloModel->eliminarArticulo($_POST);
        echo json_encode($response);
    }


    public function obtenerArticulos()
    {

        $response = $this->articuloModel->obtenerArticulos();
        echo json_encode($response);
    }


    public function obtenerArticuloPorId()
    {

        $response = $this->articuloModel->obtenerArticuloPorID($_POST["id_articulo"]);
        echo json_encode($response);
    }

    public function obtenerArticuloPorCategoria()
    {

        $response = $this->articuloModel->obtenerArticuloPorDescripcion($_POST["id_categoria"]);
        echo json_encode($response);
    }

    public function obtenerArticuloPorDescripcion(){
       //echo json_encode($_POST);
        $response = $this->articuloModel->obtenerArticuloPorDescripcion($_POST['descripcion_A']);
       echo  json_encode($response);
    }
    public function filtrarArticulos()
    {
        $response = $this->articuloModel->filtrarArticulos($_POST['modelo'], $_POST['query']);
        echo json_encode($response);
    }
}



// Crear una instancia del controlador
$controller = new ArticulosController();

// Comprobar si se ha hecho una solicitud AJAX

if (isset($_GET['action']) && $_GET['action'] == 'guardarArticulos') {
    $controller->crearArticulo();
}

if (isset($_GET['action']) && $_GET['action'] == 'editararticulos') {
    $controller->editarArticulo();
}
if (isset($_GET['action']) && $_GET['action'] == 'eliminarArticulos') {
    $controller->eliminarArticulo();
}

if (isset($_GET['action']) && $_GET['action'] == 'obtenerArticulos') {
    $controller->obtenerArticulos();
}
if (isset($_GET['action']) && $_GET['action'] == 'obtenerArticuloPorId') {
    $controller->obtenerArticuloPorId();
}

if (isset($_GET['action']) && $_GET['action'] == 'obtenerArticuloPorCategoria') {
    $controller->obtenerArticuloPorCategoria();
}
if (isset($_GET['action']) && $_GET['action'] == 'obtenerArticuloPorDescripcion') {
    $controller->obtenerArticuloPorDescripcion();
}

if (isset($_GET['action']) && $_GET['action'] == 'filtrarArticulos') {
    $controller->filtrarArticulos();
}



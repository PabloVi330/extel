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
      
        $nombresImagenes = [];
        if (!empty($_FILES['imagenes']['name'][0])) {
            $directorioDestino = 'uploads/products/';
           
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
        } else {
            $nombresImagenes = ["producto.jpg"];
        }
        $img = json_encode($nombresImagenes);
        $data['imagenes_A']  = $img;
        $response = $this->articuloModel->crearArticulo($data);

        echo json_encode($response);

        // $response = $this->articuloModel->crearArticulo($_POST);

    }

    public function editarArticulo()
    {
        $data = $_POST;
        // echo '<pre>';print_r($data);echo '</pre>';
        // echo '<pre>';print_r($_FILES);echo '</pre>';
        if (!empty($_FILES['EDIimagenes']['name'][0])) {
            $directorioDestino = 'uploads/products/';
            $nombresImagenes = [];
            $imagenes = $_FILES['EDIimagenes'];
            $c = 1;
        
            foreach ($imagenes['tmp_name'] as $key => $tmp_name) {
                $nombreArchivo = $c . $data["Ecodigo_A"] . '.png';
                $rutaArchivo = $directorioDestino . $nombreArchivo;
        
                if (move_uploaded_file($tmp_name, $rutaArchivo)) {
                    $nombresImagenes[] = $nombreArchivo;
                    $c++;
                } else {
                    // Manejar errores si la carga de la imagen falla
                    // Puedes agregar código aquí para manejar los errores según tus necesidades
                }
            }
        
            $img = json_encode($nombresImagenes);
            $data['Eimagenes_A']  = $img;
        } else {
             echo json_encode(["error" => "No se enviaron imágenes válidas"]);
             exit;
        }
        //print_r($data);
        // Procesa los datos en tu modelo
        $response = $this->articuloModel->editarArticulo($data);

        // Devuelve la respuesta como JSON
        echo json_encode($response);
    }



    public function eliminarArticulo()
    {
        $response = $this->articuloModel->eliminarArticulo($_POST);
        echo json_encode($response);
    }


    public function obtenerArticulos()
    {



        try {
            $response = $this->articuloModel->obtenerArticulos();
            // Intenta convertir a JSON
            //print_r($response);
            foreach ($response as &$value) {
                $value['descripcion_A'] = json_decode($value['descripcion_A'], true);
            }
            $jsonResponse = json_encode($response);
            if ($jsonResponse === false) {
                // Ha ocurrido un error durante la conversión a JSON
                throw new Exception('Error al convertir a JSON');
            }

            // Envía la respuesta JSON al cliente
            echo $jsonResponse;
        } catch (Exception $e) {
            // Manejar la excepción, puedes imprimir el mensaje o hacer lo que necesites
            echo 'Error: ' . $e->getMessage();
        }
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

    public function obtenerArticuloPorDescripcion()
    {
        //echo json_encode($_POST);
        $response = $this->articuloModel->obtenerArticuloPorDescripcion($_POST['descripcion_A']);
        echo  json_encode($response);
    }
    public function filtrarArticulos()
    {
        $response = $this->articuloModel->filtrarArticulos($_POST['modelo'], $_POST['query']);
        echo json_encode($response);
    }



    public function productosPorCategoria()
    {
        $response = $this->articuloModel->productosPorCategoria();
        echo json_encode($response);
    }
}



$controller = new ArticulosController();

if (isset($_GET['action']) && $_GET['action'] == 'productosPorCategoria') {
    $controller->productosPorCategoria();
}

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

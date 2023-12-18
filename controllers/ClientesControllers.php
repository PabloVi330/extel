<?php
include_once '../models/ClientesModels.php';

class ClienteController
{

    private $cliente;

    public function __construct()
    {

        $this->cliente = new ClienteModel();
    }


    public function crearCliente()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
             echo '<pre>';
             print_r($data);
             echo '</pre>';
            if (!empty($_FILES['imagenes']['name'][0])) {
                $uploadDir = 'uploads/users/';
                $uploadedImages = [];
                $numimg = 0;
                foreach ($_FILES['imagenes']['tmp_name'] as $key => $tmp_name) {
                    $imageName = basename($_FILES['imagenes']['name'][$key]);
                    $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
                    $ci = $data['ci_Cl']; // Cambia 'codigoP' por la clave correcta en $_POST
                    // Construir un nuevo nombre de imagen usando el código del producto
                    $newImageName = $ci . $numimg . '.' . $imageExtension;
                    $targetPath = $uploadDir . $newImageName;
                    $numimg++;
                    if (move_uploaded_file($tmp_name, $targetPath)) {
                        $uploadedImages[] = $newImageName; // Almacenar el nuevo nombre de la imagen
                    } else {
                        echo "Error al mover la imagen $imageName";
                    }
                }
                if (!empty($uploadedImages)) {
                    echo "Imágenes recibidas: ";
                } else {
                    echo "No se recibieron imágenes";
                }
            } else {
                echo "No se enviaron imágenes";
            }
            $img = json_encode($uploadedImages);
            $data['imagenes']  = $img;

            $response = $this->cliente->crearCliente($data);
            echo json_encode($response);
        }
    }


    public function obtenerClientes()
    {
        $response = $this->cliente->obtenerClientes();
        echo json_encode($response);
    }

     public function obtenerClientesPorClasificacion()
    {
        $response = $this->cliente->obtenerClientesPorClasificacion();
        echo json_encode($response);
    }


    // Obtener un usuario por ID en formato JSON
    public function obtenerClientePorID()
    {
         
        $result = $this->cliente->obtenerClientePorID($_POST['id_cliente']);
        $usuario = $result->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            // Devuelve el usuario en formato JSON
            echo json_encode($usuario);
        } else {
            // Devuelve una respuesta JSON de error
            echo json_encode(array('message' => 'Usuario no encontrado'));
        }
    }

    // Actualizar un usuario
    public function editarCliente()
    {
       
        if ($this->cliente->editarCliente($_POST)) {
            echo json_encode(array('message' => 'Usuario actualizado con éxito'));
        } else {
            // Devuelve una respuesta JSON de error
            echo json_encode(array('message' => 'Error al actualizar el usuario'));
        }
    }

    // Eliminar un usuario
    public function eliminarCliente()
    {
        if ($this->cliente->eliminarCliente($_POST['id_cliente'])) {
            // Devuelve una respuesta JSON de éxito
            echo json_encode(array('message' => 'Usuario eliminado con éxito'));
        } else {
            // Devuelve una respuesta JSON de error
            echo json_encode(array('message' => 'Error al eliminar el usuario'));
        }
    }
}
$controller = new ClienteController();

if (isset($_GET['action']) && $_GET['action'] == 'crearCliente') {
    $controller->crearCliente();
}

if (isset($_GET['action']) && $_GET['action'] == 'editarCliente') {
    $controller->editarCliente();
}
if (isset($_GET['action']) && $_GET['action'] == 'eliminarCliente') {
    $controller->eliminarCliente();
}
 
if (isset($_GET['action']) && $_GET['action'] == 'obtenerClientes') {
    $controller->obtenerClientes();
}

if (isset($_GET['action']) && $_GET['action'] == 'obtenerClientesPorClasificacion') {
    $controller->obtenerClientesPorClasificacion();
}


if (isset($_GET['action']) && $_GET['action'] == 'obtenerClientePorId') {
    $controller->obtenerClientePorID();
}

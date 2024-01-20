<?php
include_once '../models/UsuariosModels.php';

class UsuarioController
{

    private $usuario;

    public function __construct()
    {

        $this->usuario = new UsuarioModel();
    }


    public function crearUsuario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recibir datos del formulario
            $data = $_POST;
            // Procesar imágenes si se han enviado  5453129748
            if (!empty($_FILES['imagenes']['name'][0])) {
                $uploadDir = 'uploads/users/';
                $uploadedImages = [];
                $numimg = 0;
                foreach ($_FILES['imagenes']['tmp_name'] as $key => $tmp_name) {
                    $imageName = basename($_FILES['imagenes']['name'][$key]);
                    $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
                    $ci = $data['ci_U']; // Cambia 'codigoP' por la clave correcta en $_POST
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
                $uploadedImages = ["usuario.jpg"];
            }
            $img = json_encode($uploadedImages);
            $data['imagenes']  = $img;

            $response = $this->usuario->crearUsuario($data);
            echo json_encode($response);
        }
    }


    public function obtenerUsuarios()
    {
        $response = $this->usuario->obtenerUsuarios();
        echo json_encode($response);
    }

    public function obtenerUsuariosPorSucursal()
    {
        $response = $this->usuario->obtenerUsuariosPorSucursal();
        echo json_encode($response);
    }

    // Obtener un usuario por ID en formato JSON
    public function obtenerUsuarioPorID()
    {
         
        $result = $this->usuario->obtenerUsuarioPorID($_POST['id_usuario']);
        echo json_encode($result);
    }

    // Actualizar un usuario
    public function editarUsuario()
    {
       
        if ($this->usuario->editarUsuario($_POST)) {// Devuelve una respuesta JSON de éxito
            echo json_encode(array('message' => 'Usuario actualizado con éxito'));
        } else {
            // Devuelve una respuesta JSON de error
            echo json_encode(array('message' => 'Error al actualizar el usuario'));
        }
    }

    // Eliminar un usuario
    public function eliminarUsuario()
    {
        if ($this->usuario->eliminarUsuario($_POST)) {
            // Devuelve una respuesta JSON de éxito
            echo json_encode(array('message' => 'Usuario eliminado con éxito'));
        } else {
            // Devuelve una respuesta JSON de error
            echo json_encode(array('message' => 'Error al eliminar el usuario'));
        }
    }
}
$controller = new UsuarioController();
if (isset($_GET['action']) && $_GET['action'] == 'obtenerUsuarios') {
    $controller->obtenerUsuarios();
}

if (isset($_GET['action']) && $_GET['action'] == 'obtenerUsuariosPorSucursal') {
    $controller->obtenerUsuariosPorSucursal();
}
if (isset($_GET['action']) && $_GET['action'] == 'crearUsuarios') {
    $controller->crearUsuario();
}
if (isset($_GET['action']) && $_GET['action'] == 'obtenerUsuarioPorId') {
    $controller->obtenerUsuarioPorID();
}
if (isset($_GET['action']) && $_GET['action'] == 'editarUsuarios') {
    $controller->editarUsuario();
}
if (isset($_GET['action']) && $_GET['action'] == 'eliminarUsuarios') {
    $controller->eliminarUsuario();
}


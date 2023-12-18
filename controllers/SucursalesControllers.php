<?php
require_once '../models/SucursalesModels.php';
class SucursalController {

    private $sucursal;

    public function __construct() {
        $this->sucursal = new Sucursal();
    }

    public function crearSucursal() {
        $data = $_POST;
        return $this->sucursal->crearSucursal($data);
    }

    public function obtenerSucursales() {
        $respomse = $this->sucursal->obtenerSucursales();
        echo json_encode($respomse);
    }

    public function obtenerSucursal() {
        $id = intval($_POST['id_sucursal']);
        
        return $this->sucursal->obtenerSucursal($id);
        echo json_encode($id);
    }

    public function editarSucursal() {
        $response = $this->sucursal->editarSucursal($_POST);
        echo json_encode($response);
    }

    public function eliminarSucursal() {
        $response = $this->sucursal->eliminarSucursal($_POST);
        echo json_encode($response);
    }
}
$controller = new SucursalController();

if (isset($_GET['action']) && $_GET['action'] == 'crearSucursal') {
    $controller->crearSucursal();
}
if (isset($_GET['action']) && $_GET['action'] == 'obtenerSucursales') {
    $controller->obtenerSucursales();
}
if (isset($_GET['action']) && $_GET['action'] == 'edidarSucursales') {
    $controller->editarSucursal();
}
if (isset($_GET['action']) && $_GET['action'] == 'eliminarSucursales') {
    $controller->eliminarSucursal();
}
if (isset($_GET['action']) && $_GET['action'] == 'obtenerSucursal') {
    $controller->obtenerSucursal();
}
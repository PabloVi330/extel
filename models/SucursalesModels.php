<?php
require_once 'db_conection.php';
class Sucursal {
    private $conn;

    public function __construct() {
        $this->conn = DBConnection::getInstance();
    }


    public function crearSucursal($data) {
        
        $query = "INSERT INTO sucursal (nombreS, direccion_S,estado_S) VALUES (:nombreS, :direccion_S, :estado_S)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":nombreS",$data['nombre_S']);
        $stmt->bindValue(':direccion_S',$data['direccion_S']);
        $stmt->bindValue(':estado_S', 1);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerSucursales() {
        
        try {
            $query = "SELECT * FROM sucursal";
            $statement = $this->conn->prepare($query);
            $statement->execute();
            
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejo de errores
            return [];
        }      
    }

    public function obtenerSucursal($id) {
        $idd = intval($id);
        $query = "SELECT * FROM sucursal WHERE id_sucursal = :id_sucursal";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":id_sucursal", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            // Manejo de errores: Imprimir el mensaje de error
            echo "Error al obtener la sucursal: " . $e->getMessage();
            return $e->getMessage();; // O manejar el error de otra manera
        }
    }
    

    public function editarSucursal($data) {
        $query = "UPDATE sucursal SET nombreS = :nombreS, direccion_S = :direccion_S, estado_S = :estado_S WHERE id_sucursal = :id_sucursal";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":nombreS", $data['Enombre_S'] );
        $stmt->bindValue(":direccion_S",$data['Edireccion_S']);
        $stmt->bindValue(':estado_S',$data['Eestado_S']);
        $stmt->bindValue('id_sucursal',$data['Eid_S']);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarSucursal($data) {
        $query = "DELETE FROM sucursal WHERE id_sucursal = :id_sucursal";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":id_sucursal", $data['id_sucursal']);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

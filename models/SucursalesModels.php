<?php
require_once 'db_conection.php';
class Sucursal
{
    private $conn;

    public function __construct()
    {
        $this->conn = DBConnection::getInstance();
    }


    public function crearSucursal($data)
    {
        try {
            $query = "INSERT INTO sucursal (nombreS, direccion_S, telefono_S, estado_S) VALUES (:nombreS, :direccion_S, :telefono_S, :estado_S)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":nombreS", $data['nombre_S']);
            $stmt->bindValue(':direccion_S', $data['direccion_S']);
            $stmt->bindValue(':telefono_S', $data['telefono_S']);
            $stmt->bindValue(':estado_S', 1);

            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }

    public function obtenerSucursales()
    {

        try {
            $query = "SELECT * FROM sucursal";
            $statement = $this->conn->prepare($query);
            $statement->execute();
            $this->conn = null;
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->conn = null;
            return [];
        }
    }

    public function obtenerSucursal($id)
    {
        $idd = intval($id);
        $query = "SELECT * FROM sucursal WHERE id_sucursal = :id_sucursal";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":id_sucursal", $idd);
            $stmt->execute();
            //$this->conn = null;
            return $stmt->fetch();
        } catch (PDOException $e) {
            //$this->conn = null;
            return $e->getMessage();
        }
    }


    public function editarSucursal($data)
    {
        try {
            $query = "UPDATE sucursal SET nombreS = :nombreS, direccion_S = :direccion_S, telefono_S = :telefono_S, estado_S = :estado_S WHERE id_sucursal = :id_sucursal";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":nombreS", $data['Enombre_S']);
            $stmt->bindValue(":direccion_S", $data['Edireccion_S']);
            $stmt->bindValue(":telefono_S", $data['Etelefono_S']);
            $stmt->bindValue(':estado_S', $data['Eestado_S']);
            $stmt->bindValue('id_sucursal', $data['Eid_S']);

            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }

    public function eliminarSucursal($data)
    {
        try {
            $query = "DELETE FROM sucursal WHERE id_sucursal = :id_sucursal";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":id_sucursal", $data['id_sucursal']);

            $stmt->execute();
             $this->conn = null;
            return "ok";
        } catch (PDOException $e){
            $this->conn = null;
           return $e->getMessage();
        }
    }
}

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db_conection.php';
class ClienteModel
{
    private $conn;
    private $table = 'clientes';

    public function __construct()
    {
        $this->conn = DBConnection::getInstance();
    }


    public function crearCliente($data)
    {
        try {
            $query = 'INSERT INTO ' . $this->table . '
                    (ci_Cl, nombre_Cl, clasificacion_Cl, direccion_Cl, telefono_Cl, nit_Cl)
                    VALUES
                    (:ci_Cl, :nombre_Cl, :clasificacion_Cl, :direccion_Cl, :telefono_Cl, :nit_Cl)';

            $stmt = $this->conn->prepare($query);

            //$data['password_U'] = password_hash($data['password_U'], PASSWORD_DEFAULT);
            $stmt->bindParam(':ci_Cl', $data['ci_Cl']);
            $stmt->bindParam(':nombre_Cl', $data['nombre_Cl']);
            $stmt->bindParam(':clasificacion_Cl', $data['clasificacion_Cl']);
            $stmt->bindParam(':direccion_Cl', $data['direccion_Cl']);
            $stmt->bindParam(':telefono_Cl', $data['telefono_Cl']);
            $stmt->bindParam(':nit_Cl', $data['nit_Cl']);
            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }

    // Obtener todos los Clientes
    public function obtenerClientes()
    {
        try {
            $id_usuario = $_SESSION['id_usuario'];
            if ($_SESSION['area_U'] == 'administrador') {
                $query = "SELECT * FROM clientes";
            } else {
                $query = "SELECT * FROM clientes WHERE fk_id_usuario = $id_usuario";
            }

            $statement = $this->conn->prepare($query);
            $statement->execute();
            $this->conn = null;
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->conn = null;
            return [];
        }
    }

    // Obtener todos los Clientes
    public function obtenerClientesPorClasificacion()
    {
        try {
            $query = "SELECT *, COUNT(clasificacion_Cl) AS cantidad FROM `clientes`  GROUP BY clasificacion_Cl;";
            $statement = $this->conn->prepare($query);
            $statement->execute();
            $this->conn = null;
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->conn = null;
            return [];
        }
    }

    // Obtener un usuario por ID
    public function obtenerClientePorID($id_cliente)
    {
        try {
            $query = 'SELECT * FROM ' . $this->table . ' WHERE id_cliente = :id_cliente';
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id_cliente', $id_cliente);
            $stmt->execute();
            $this->conn = null;
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }


    public function editarCliente($data)
    {
        try {
            $query = 'UPDATE ' . $this->table . '
                    SET
                    ci_Cl = :ci_Cl,
                    nombre_Cl = :nombre_Cl,
                    clasificacion_Cl = :clasificacion_Cl,
                    direccion_Cl = :direccion_Cl,
                    telefono_Cl = :telefono_Cl,
                    nit_Cl = :nit_Cl,
                    autorizacion_Cl = :autorizacion_Cl,
                    porcentaje_Cl = :porcentaje_Cl,
                    limite_Cl = :limite_Cl
                    WHERE id_cliente = :id_cliente';

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':id_cliente', $data['Eid_cliente']);
            $stmt->bindParam(':ci_Cl', $data['Eci_Cl']);
            $stmt->bindParam(':nombre_Cl', $data['Enombre_Cl']);
            $stmt->bindParam(':clasificacion_Cl', $data['Eclasificacion_Cl']);
            $stmt->bindParam(':direccion_Cl', $data['Edireccion_Cl']);
            $stmt->bindParam(':telefono_Cl', $data['Etelefono_Cl']);
            $stmt->bindParam(':nit_Cl', $data['Enit_Cl']);
            $stmt->bindParam(':autorizacion_Cl', $data['Eautorizacion_Cl']);
            $stmt->bindParam(':porcentaje_Cl', $data['Eporcentaje_Cl']);
            $stmt->bindParam(':limite_Cl', $data['Elimite_Cl']);

            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }

    // Eliminar un usuario
    public function eliminarCliente($data)
    {
        try {

            $query = 'DELETE FROM ' . $this->table . ' WHERE id_cliente = :id_cliente';
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id_cliente', $data);

            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }
}

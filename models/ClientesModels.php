<?php
require_once 'db_conection.php';
class ClienteModel
{
    private $conn;
    private $table = 'clientes';

    public function __construct()
    {
        $this->conn = DBConnection::getInstance();
    }


    // Crear un nuevo usuario
    public function crearCliente($data)
    {
        $query = 'INSERT INTO ' . $this->table . '
                    (ci_Cl, nombre_Cl, clasificacion_Cl, direccion_Cl, telefono_Cl)
                    VALUES
                    (:ci_Cl, :nombre_Cl, :clasificacion_Cl, :direccion_Cl, :telefono_Cl)';

        $stmt = $this->conn->prepare($query);

        // Limpiar y vincular los parámetros
        //$data['password_U'] = password_hash($data['password_U'], PASSWORD_DEFAULT);
        $stmt->bindParam(':ci_Cl', $data['ci_Cl']);
        $stmt->bindParam(':nombre_Cl', $data['nombre_Cl']);
        $stmt->bindParam(':clasificacion_Cl', $data['clasificacion_Cl']);
        $stmt->bindParam(':direccion_Cl', $data['direccion_Cl']);
        $stmt->bindParam(':telefono_Cl', $data['telefono_Cl']);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Obtener todos los Clientes
    public function obtenerClientes()
    {
        try {
            $query = "SELECT * FROM clientes";
            $statement = $this->conn->prepare($query);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejo de errores
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

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejo de errores
            return [];
        }
    }

    // Obtener un usuario por ID
    public function obtenerClientePorID($id_cliente)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id_cliente = :id_cliente';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_cliente', $id_cliente);
        $stmt->execute();
        return $stmt;
    }

    // Actualizar un usuario
    public function editarCliente($data)
    {
        $query = 'UPDATE ' . $this->table . '
                    SET
                    ci_Cl = :ci_Cl,
                    nombre_Cl = :nombre_Cl,
                    clasificacion_Cl = :clasificacion_Cl,
                    direccion_Cl = :direccion_Cl,
                    telefono_Cl = :telefono_Cl
                    WHERE id_cliente = :id_cliente';

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id_cliente', $data['Eid_cliente']);
        $stmt->bindParam(':ci_Cl', $data['Eci_Cl']);
        $stmt->bindParam(':nombre_Cl', $data['Enombre_Cl']);
        $stmt->bindParam(':clasificacion_Cl', $data['Eclasificacion_Cl']);
        $stmt->bindParam(':direccion_Cl', $data['Edireccion_Cl']);
        $stmt->bindParam(':telefono_Cl', $data['Etelefono_Cl']);
       

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Eliminar un usuario
    public function eliminarCliente($data)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id_cliente = :id_cliente';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_cliente', $data);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

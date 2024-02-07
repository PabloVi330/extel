<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db_conection.php';
class UsuarioModel
{
    private $conn;
    private $table = 'usuario';

    public function __construct()
    {
        $this->conn = DBConnection::getInstance();
    }


    // Crear un nuevo usuario
    public function crearUsuario($data)
    {
        $query = 'INSERT INTO ' . $this->table . '
                    (fk_id_sucursal, usuario_U, password_U, nombre_U, ci_U, area_U, tipo_U, correo_U, telefono_U, estado_U, foto_U)
                    VALUES
                    (:fk_id_sucursal, :usuario_U, :password_U, :nombre_U, :ci_U,:area_U, :tipo_U, :correo_U, :telefono_U, :estado_U, :foto_U)';

        $stmt = $this->conn->prepare($query);

        // Limpiar y vincular los parámetros
        //$data['password_U'] = password_hash($data['password_U'], PASSWORD_DEFAULT);
        $stmt->bindParam(':fk_id_sucursal', $data['sucursal_U']);
        $stmt->bindParam(':usuario_U', $data['usuario_U']);
        $stmt->bindParam(':password_U', $data['password_U']);
        $stmt->bindParam(':nombre_U', $data['nombre_U']);
        $stmt->bindParam(':ci_U', $data['ci_U']);
        $stmt->bindParam(':area_U', $data['area_U']);
        $stmt->bindParam(':tipo_U', $data['tipo_U']);
        $stmt->bindParam(':correo_U', $data['correo_U']);
        $stmt->bindParam(':telefono_U', $data['telefono_U']);
        $stmt->bindValue(':estado_U', 1);
        $stmt->bindParam(':foto_U', $data['imagenes']);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Obtener todos los usuarios
    public function obtenerUsuarios()
    {
        try {
            $query = "SELECT u.*, s.nombreS
            FROM usuario u
            JOIN sucursal s ON u.fk_id_sucursal = s.id_sucursal";
            $statement = $this->conn->prepare($query);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejo de errores
            return [];
        }
    }

    // Obtener todos los usuarios
    public function obtenerUsuariosPorSucursal()
    {
        try {
            $suc = $_SESSION['fk_id_sucursal'];
            $query = "SELECT u.*, s.nombreS
            FROM usuario u
            JOIN sucursal s ON u.fk_id_sucursal = s.id_sucursal
            WHERE fk_id_sucursal = $suc";
            $statement = $this->conn->prepare($query);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejo de errores
            return [];
        }
    }

    // Obtener un usuario por ID
    public function obtenerUsuarioPorID($id_usuario)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id_usuario = :id_usuario';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar un usuario
    public function editarUsuario($data)
    {
        try {
            $query = 'UPDATE ' . $this->table . '
                    SET
                    fk_id_sucursal = :fk_id_sucursal,
                    usuario_U = :usuario_U,
                    nombre_U = :nombre_U,
                    ci_U = :ci_U,
                    area_U = :area_U,
                    tipo_U = :tipo_U,
                    correo_U = :correo_U,
                    telefono_U = :telefono_U,
                    estado_U = :estado_U,
                    foto_U = :foto_U
                    WHERE id_usuario = :id_usuario';

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':fk_id_sucursal', $data['Esucursal_U']);
            $stmt->bindParam(':usuario_U', $data['Eusuario_U']);
            $stmt->bindParam(':nombre_U', $data['Enombre_U']);
            $stmt->bindParam(':ci_U', $data['Eci_U']);
            $stmt->bindParam(':area_U', $data['Earea_U']);
            $stmt->bindParam(':tipo_U', $data['Etipo_U']);
            $stmt->bindParam(':correo_U', $data['Ecorreo_U']);
            $stmt->bindParam(':telefono_U', $data['Etelefono_U']);
            $stmt->bindParam(':estado_U', $data['Eestado_U']);
            $stmt->bindParam(':foto_U', $data['Efoto_U']);
            $stmt->bindParam(':id_usuario', $data['Eid_usuario']);

            $stmt->execute();
            return "ok";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // Eliminar un usuario
    public function eliminarUsuario($data)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id_usuario = :id_usuario';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_usuario', $data['id_usuario']);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

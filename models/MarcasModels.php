<?php
require_once 'db_conection.php';
class MarcaModel {
    private $conn;

    public function __construct() {
        $this->conn = DBConnection::getInstance();
    }

    public function crearMarca($categoria) {
        try {
            $sql = "INSERT INTO marcas (nombre_marca, foto_marca) VALUES (:nombre_marca, :foto_marca)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':nombre_marca',$categoria['nombre_marca']);
            $stmt->bindValue(':foto_marca',$categoria['foto_marca']);
            $stmt->execute();
            return "Categoría creada con éxito";
        } catch (PDOException $e) {
            return "Error al crear la categoría: " . $e->getMessage();
        }
    }

    public function obtenerMarcas() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM marcas");
            $stmt->execute();
            $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $categorias;
        } catch (PDOException $e) {
            return "Error al obtener las categorías: " . $e->getMessage();
        }
    }

    public function editarCategoria($data) {
        try {
            $sql = "UPDATE categoria SET nombre_C = :nombre_C, estado_C = :estado_C WHERE id_categoria = :id_categoria"; 
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre_C', $data['Enombre_C']);
            $stmt->bindParam(':estado_C', $data['Eestado_C']);
            $stmt->bindValue(':id_categoria', $data['Eid_categoria']);
            $stmt->execute();
            return "Categoría actualizada con éxito";
        } catch (PDOException $e) {
            return "Error al actualizar la categoría: " . $e->getMessage();
        }
    }

    public function eliminarCategoria($data) {
        try {
            $stmt = $this->conn->prepare("DELETE FROM categoria WHERE id_categoria = :id_categoria");
            $stmt->bindParam(':id_categoria', $data['id_categoria']);
            $stmt->execute();
            return "Categoría eliminada con éxito";
        } catch (PDOException $e) {
            return "Error al eliminar la categoría: " . $e->getMessage();
        }
    }
}
?>

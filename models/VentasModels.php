<?php
require_once('db_conection.php');
session_start();
class VentaModel
{

    private $conn;

    public function __construct()
    {
        $this->conn = DBConnection::getInstance();
    }

    public  function crearVenta($data)
    {
        try {

           
            $query = "INSERT INTO ventas (fk_id_sucursal, fk_id_usuario, fk_id_cliente, fecha_V, detalle_V, importe_V, facturado_V, tipo_V, estado_V, monto_V) VALUES (:fk_id_sucursal, :fk_id_usuario, :fk_id_cliente, :fecha_V, :detalle_V, :importe_V, :facturado_V, :tipo_V, :estado_V, :monto_V) ";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':fk_id_sucursal', $_SESSION['fk_id_sucursal'], PDO::PARAM_INT);
            $stmt->bindParam(':fk_id_usuario', $_SESSION['id_usuario'], PDO::PARAM_INT);
            $stmt->bindParam(':fk_id_cliente', $data['fk_id_cliente'], PDO::PARAM_INT);
            $stmt->bindParam(':fecha_V', $data['fecha_V'], PDO::PARAM_STR);
            $stmt->bindParam(':detalle_V', $data['detalle_V'], PDO::PARAM_STR);
            $stmt->bindParam(':importe_V', $data['importe_V'], PDO::PARAM_STR);
            $stmt->bindParam(':facturado_V', $data['facturado_V'], PDO::PARAM_INT);
            $stmt->bindParam(':tipo_V', $data['tipo_V'], PDO::PARAM_STR);
            $stmt->bindParam(':estado_V', $data['estado_V'], PDO::PARAM_STR);
            $stmt->bindParam(':monto_V', $data['nonto_V'], PDO::PARAM_INT);

            $stmt->execute();
            return  "ok";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }





    public function obtenerVentas()
    {

        if ($_SESSION['area_U'] == 'administrador' && $_SESSION['tipo_U'] == 1) {
            try {
                $query = "SELECT 
                            v.*,
                            s.nombreS AS nombre_sucursal,
                            u.nombre_U AS nombre_usuario,
                            c.nombre_Cl AS nombre_cliente
                          FROM 
                              ventas AS v
                          LEFT JOIN  
                              sucursal AS s ON v.fk_id_sucursal = s.id_sucursal
                          LEFT JOIN  
                              usuario AS u ON v.fk_id_usuario = u.id_usuario
                           LEFT JOIN 
                               clientes AS c ON v.fk_id_cliente = c.id_cliente
                           ORDER BY v.id_venta DESC";
                $stmt = $this->conn->query($query);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return false;
            }
        } else {
            try {
                $query = "SELECT 
                            v.*,
                            c.nombre_Cl AS nombre_cliente,
                            u.nombre_U AS nombre_usuario
                          FROM 
                              ventas AS v
                           LEFT JOIN 
                               clientes AS c ON v.fk_id_cliente = c.id_cliente
                          LEFT JOIN  
                              usuario AS u ON v.fk_id_usuario = u.id_usuario
                          WHERE  v.fk_id_sucursal = " . $_SESSION['fk_id_sucursal'];
                $stmt = $this->conn->query($query);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

    public function eliminarVenta($data)
    {
        $query = 'DELETE FROM ventas WHERE id_venta = :id_venta';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_venta', $data);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function imprimirVenta($id_venta)
    {
        try {
            $sql = "UPDATE ventas SET impreso_V = impreso_V + 1 WHERE id_venta = :id_venta";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_venta', $id_venta);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return "Error al incrementar el valor de impreso_E: " . $e->getMessage();
        }
    }


    public function obtenerVentasPorId($id_venta)
    {
        try {
            $query = "SELECT 
                            v.*,
                            s.nombreS AS nombre_sucursal,
                            u.nombre_U AS nombre_usuario,
                            c.nombre_Cl AS nombre_cliente
                        FROM 
                            ventas AS v
                        LEFT JOIN  
                            sucursal AS s ON v.fk_id_sucursal = s.id_sucursal
                        LEFT JOIN  
                            usuario AS u ON v.fk_id_usuario = u.id_usuario 
                        LEFT JOIN 
                            clientes AS c ON v.fk_id_cliente = c.id_cliente
                        WHERE id_venta = :id_venta";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id_venta', $id_venta);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejar el error de la base de datos
            return $e->getMessage();
        }
    }

    public function obtenerVentasPorFiltro($columana, $valor)
    {
        try {
            $query = "SELECT *
            FROM ventas 
            WHERE $columana = :$valor";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":$valor", $valor);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function obtenerVentasPorCore($query)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    
    public function pagarCredito($id_venta, $monto_V)
    {
        try {
            $sql = "UPDATE ventas SET monto_V = :monto_V WHERE id_venta = :id_venta";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':monto_V', $monto_V);
            $stmt->bindParam(':id_venta', $id_venta);
            $stmt->execute();
            return "ok";
        } catch (PDOException $e) {
            return "Error al incrementar el valor de impreso_E: " . $e->getMessage();
        }
    }
}

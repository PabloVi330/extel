<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db_conection.php';
class ArticuloModel
{
    private $conn;

    public function __construct()
    {
        // Reemplaza con el archivo que contiene la conexión a la base de datos
        $this->conn = DBConnection::getInstance();
    }
    //NOTE - METODOS FIJOS
    public function crearArticulo($data)
    {
        try {
            $codigo_A = $data['codigo_A'];
            $fk_id_sucursal = $_SESSION["fk_id_sucursal"];
            $fk_id_categoria = $data['id_categoria'];
            $fk_id_usuario = $_SESSION['id_usuario'];
            $fk_id_marca = $data['id_marca'];
            $descripcion_A = json_encode(['detalle' => $data['descripcion_A']]);
            $stock_A = $data['stock_A'];
            $cantidad_A = $data['cantidad_A'];
            $unimed_A = $data['unimed_A'];
            $precio_neto_A = $data['precio_neto_A'];
            $precio_distribucion_A = $data['precio_distribucion_A'];
            $precio_tecnico_A = $data['precio_tecnico_A'];
            $precio_publico = $data['precio_publico_A'];
            $precio_fact_A = $data['precio_fact_A'];
            $estado_A = 1;
            $imagenes_A = $data['imagenes_A'];


            $total =   $stock_A * $cantidad_A;

            $sql = "INSERT INTO articulo (codigo_A, fk_id_sucursal, fk_id_categoria, fk_id_usuario, descripcion_A, stock_A, cantidad_A, fk_id_marca, unimed_A, precio_neto_A, precio_distribucion_A, precio_tecnico_A, precio_publico_A, precio_fact_A, estado_A, imagenes_A)
                VALUES (:codigo_A, :fk_id_sucursal, :fk_id_categoria, :fk_id_usuario, :descripcion_A, :stock_A, :cantidad_A, :fk_id_marca, :unimed_A, :precio_neto_A, :precio_distribucion_A, :precio_tecnico_A, :precio_publico_A, :precio_fact_A, :estado_A, :imagenes_A)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':codigo_A', $codigo_A);
            $stmt->bindParam(':fk_id_sucursal', $fk_id_sucursal);
            $stmt->bindParam(':fk_id_categoria', $fk_id_categoria);
            $stmt->bindParam(':fk_id_usuario', $fk_id_usuario);
            $stmt->bindParam(':descripcion_A', $descripcion_A);
            $stmt->bindParam(':stock_A', $total);
            $stmt->bindParam(':cantidad_A', $cantidad_A);
            $stmt->bindParam(':fk_id_marca', $fk_id_marca);
            $stmt->bindParam(':unimed_A', $unimed_A);
            $stmt->bindParam(':precio_neto_A', $precio_neto_A);
            $stmt->bindParam(':precio_distribucion_A', $precio_distribucion_A);
            $stmt->bindParam(':precio_tecnico_A', $precio_tecnico_A);
            $stmt->bindParam(':precio_publico_A', $precio_publico);
            $stmt->bindParam(':precio_fact_A', $precio_fact_A);
            $stmt->bindParam(':estado_A', $estado_A);
            $stmt->bindParam(':imagenes_A', $imagenes_A);
            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }
    public function crearArticuloEnvio($data, $cantidad_envio, $sucursal)
    {

        try {
            $codigo_A = $data['codigo_A'];
            $fk_id_sucursal = $sucursal;
            $fk_id_categoria = $data['fk_id_categoria'];
            $fk_id_usuario = $_SESSION['id_usuario'];
            $fk_id_marca = $data['fk_id_marca'];
            $descripcion_A = $data['descripcion_A'];
            $stock_A = $cantidad_envio;
            $cantidad_A = $data['cantidad_A'];
            $unimed_A = $data['unimed_A'];
            $precio_neto_A = $data['precio_neto_A'];
            $precio_distribucion_A = $data['precio_distribucion_A'];
            $precio_tecnico_A = $data['precio_tecnico_A'];
            $precio_publico_A = $data['precio_publico_A'];
            $precio_fact_A = $data['precio_fact_A'];
            $estado_A = 1;
            $imagenes_A = $data['imagenes'];


            $sql = "INSERT INTO articulo (codigo_A, fk_id_sucursal, fk_id_categoria, fk_id_usuario, descripcion_A, stock_A, cantidad_A, fk_id_marca, unimed_A, precio_neto_A, precio_distribucion_A, precio_tecnico_A, precio_publico_A, precio_fact_A, estado_A, imagenes_A)
                VALUES (:codigo_A, :fk_id_sucursal, :fk_id_categoria, :fk_id_usuario, :descripcion_A, :stock_A, :cantidad_A, :fk_id_marca, :unimed_A, :precio_neto_A, :precio_distribucion_A, :precio_tecnico_A, :precio_publico_A,  :precio_fact_A, :estado_A, :imagenes_A)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':codigo_A', $codigo_A);
            $stmt->bindParam(':fk_id_sucursal', $fk_id_sucursal);
            $stmt->bindParam(':fk_id_categoria', $fk_id_categoria);
            $stmt->bindParam(':fk_id_usuario', $fk_id_usuario);
            $stmt->bindParam(':descripcion_A', $descripcion_A);
            $stmt->bindParam(':stock_A', $stock_A);
            $stmt->bindParam(':cantidad_A', $cantidad_A);
            $stmt->bindParam(':fk_id_marca', $fk_id_marca);
            $stmt->bindParam(':unimed_A', $unimed_A);
            $stmt->bindParam(':precio_neto_A', $precio_neto_A);
            $stmt->bindParam(':precio_distribucion_A', $precio_distribucion_A);
            $stmt->bindParam(':precio_tecnico_A', $precio_tecnico_A);
            $stmt->bindParam(':precio_publico_A', $precio_publico_A);
            $stmt->bindParam(':precio_fact_A', $precio_fact_A);
            $stmt->bindParam(':estado_A', $estado_A);
            $stmt->bindParam(':imagenes_A', $imagenes_A);

            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }
    public function editarArticulo($data)
    {
        try {

            $sql = "UPDATE articulo 
                    SET 
                        codigo_A = :codigo_A,
                        fk_id_sucursal = :fk_id_sucursal,
                        fk_id_categoria = :fk_id_categoria,
                        fk_id_usuario = :fk_id_usuario,  
                        fk_id_marca = :fk_id_marca,
                        descripcion_A = :descripcion_A,
                        stock_A = :stock_A,
                        cantidad_A = :cantidad_A,
                        unimed_A = :unimed_A,
                        precio_neto_A = :precio_neto_A,
                        precio_distribucion_A = :precio_distribucion_A,
                        precio_tecnico_A = :precio_tecnico_A,
                        precio_publico_A = :precio_publico_A,
                        estado_A = :estado_A,
                        imagenes_A = :imagenes_A
                    WHERE id_articulo = :id_articulo ";


            $stmt = $this->conn->prepare($sql);
            $descripcion_A = json_encode(['detalle' =>  $data['Edescripcion_A']]);
            $stmt->bindParam(":codigo_A", $data['Ecodigo_A']);
            $stmt->bindParam(":fk_id_sucursal", $data['Eid_sucursal']);
            $stmt->bindParam(":fk_id_categoria", $data['Eid_categoria']);
            $stmt->bindParam(":fk_id_usuario", $data['Eid_usuario']);
            $stmt->bindParam(":fk_id_marca", $data['Eid_marca']);
            $stmt->bindParam(":descripcion_A", $descripcion_A);
            $stmt->bindParam(":stock_A", $data['Estock_A']);
            $stmt->bindParam(":cantidad_A", $data['Ecantidad_A']);
            $stmt->bindParam(":unimed_A", $data['Eunimed_A']);
            $stmt->bindParam(":precio_neto_A", $data['Eprecio_neto_A']);
            $stmt->bindParam(":precio_distribucion_A", $data['Eprecio_distribucion_A']);
            $stmt->bindParam(":precio_tecnico_A", $data['Eprecio_tecnico_A']);
            $stmt->bindParam(":precio_publico_A", $data['Eprecio_publico_A']);
            $stmt->bindParam(":estado_A", $data['Eestado_A']);
            $stmt->bindParam(":imagenes_A", $data['Eimagenes_A']);
            $stmt->bindParam(":id_articulo", $data['Eid_articulo']);

            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return  "Error al actualizar el artículo: " . $e->getMessage();
        }
    }
    public function eliminarArticulo($data)
    {
        try {
            $query = 'DELETE FROM articulo WHERE id_articulo = :id_articulo';
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id_articulo', $data['id_articulo']);
            $stmt->execute();
            $this->conn = null;
            return "ok";
        } catch (PDOException $e) {
            $this->conn = null;
            return $e->getMessage();
        }
    }





    //SECTION - METODO DE EDITRA ARTICULO AL HACER LA COMPRA
    public function editarArticuloCompra($stock, $precioN, $codigo, $sucursal)
    {
        try {

            $sql = "UPDATE articulo 
                    SET 
                        stock_A = stock_A + '$stock',
                        precio_neto_A = '$precioN'
                    WHERE 
                        codigo_A = '$codigo' AND fk_id_sucursal = '$sucursal'";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();
            return "ok";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function editarArticuloCompraPrecioVenta($precio_neto, $precio_distribucion, $precio_tecnico, $precio_publico, $codigo_A)
    {
        try {

            $sql = "UPDATE articulo 
                    SET 
                        precio_neto_A = '$precio_neto',
                        precio_distribucion_A = '$precio_distribucion',
                        precio_tecnico_A = '$precio_tecnico',
                        precio_publico_A = '$precio_publico'
                    WHERE 
                        codigo_A = '$codigo_A'";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();
            return "ok";
        } catch (PDOException $e) {
            return "Error al actualizar el artículo: " . $e->getMessage();
        }
    }


    //SECTION METODOS DE ENVIOS

    public function reducirStock($id_articulo, $cantidad)
    {

        try {
            $query = "UPDATE articulo SET stock_A = stock_A - $cantidad WHERE id_articulo = $id_articulo";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return "ok";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function sumarStock1($id_articulo, $cantidad)
    {

        try {
            $query = "UPDATE articulo SET stock_A = stock_A + $cantidad WHERE id_articulo = $id_articulo";

            $stmt = $this->conn->prepare($query);

            if ($stmt->execute())
                return true;
            else
                return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function sumarStock($id_articulo, $cantidad)
    {

        try {
            $query = "UPDATE articulo SET stock_A = stock_A + $cantidad WHERE id_articulo = $id_articulo";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return "ok";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function  buscarArticuloEnSucursal($fk_id_sucursal, $codigo_A)
    {
        try {

            $query = "SELECT * FROM articulo WHERE fk_id_sucursal = $fk_id_sucursal AND codigo_A = '$codigo_A'";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            // Verificar si la consulta tuvo éxito
            if ($stmt->rowCount() > 0) {
                // La consulta devolvió resultados
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                // La consulta no devolvió resultados
                return "NO";
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }






    //STUB - LLAMADAS DE ARTICULOS
    public function obtenerArticulos()
    {
        try {

            $sql = "SELECT 
                        a.*,
                        s.nombreS AS nombre_sucursal,
                        c.nombre_C AS nombre_categoria,
                        u.nombre_U AS nombre_usuario,
                        m.nombre_marca AS nombre_marca,
                        MAX(CASE WHEN a.fk_id_sucursal = 1 THEN stock_A END) AS stock_sucursal_1,
                        MAX(CASE WHEN a.fk_id_sucursal = 2 THEN stock_A END) AS stock_sucursal_2,
                         MAX(CASE WHEN a.fk_id_sucursal = 3 THEN stock_A END) AS stock_sucursal_3,
                          MAX(CASE WHEN a.fk_id_sucursal = 4 THEN stock_A END) AS stock_sucursal_4
                    FROM 
                        articulo AS a
                    LEFT JOIN 
                        sucursal AS s ON a.fk_id_sucursal = s.id_sucursal
                    LEFT JOIN 
                        categoria AS c ON a.fk_id_categoria = c.id_categoria
                    LEFT JOIN 
                        usuario AS u ON a.fk_id_usuario = u.id_usuario
                    LEFT JOIN 
                        marcas AS m ON a.fk_id_marca = m.id_marca
                GROUP BY
            codigo_A";
            $stmt = $this->conn->query($sql);
            $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $articulos;
        } catch (PDOException $e) {
            return 'Error en la llamda a los articulos' . $e->getMessage();
        }
    }

    public  function obtenerArticuloPorID($id)
    {
        try {
            $sql = "SELECT * FROM articulo WHERE id_articulo = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function obtenerArticuloPorCategoria($id_categoria)
    {
        $sql = "SELECT * FROM articulo WHERE fk_id_categoria = :fk_id_categoria";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':fk_id_categoria', $id_categoria);
        $stmt->execute();
        $articulo = $stmt->fetch(PDO::FETCH_ASSOC);
        return $articulo;
    }

    public function obtenerArticuloPorDescripcion($descripcion_A)
    {
        try {
            $suc = $_SESSION['fk_id_sucursal'];
            $sql = "SELECT * FROM articulo WHERE descripcion_A LIKE :descripcion_A AND fk_id_sucursal = :suc";
            $stmt = $this->conn->prepare($sql);

            // Utiliza bindValue para asignar los valores de los parámetros
            $stmt->bindValue(':descripcion_A', '%' . $descripcion_A . '%', PDO::PARAM_STR);
            $stmt->bindValue(':suc', $suc, PDO::PARAM_INT);

            $stmt->execute();

            $articulo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $articulo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function filtrarArticulos($valor1, $valor2)
    {
        try {
            $id_sucursal = $_SESSION['fk_id_sucursal'];
            $query = "SELECT 
                 a.*,
                 m.nombre_marca
             FROM articulo a
             LEFT JOIN marcas m ON a.fk_id_marca = m.id_marca
             WHERE compatibilidad_A LIKE :valor1 AND descripcion_A LIKE :valor2 AND fk_id_sucursal =  $id_sucursal";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':valor1', '%/' . $valor1 . '/%', PDO::PARAM_STR);
            $stmt->bindValue(':valor2', '%' . $valor2 . '%', PDO::PARAM_STR);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function productosPorCategoria()
    {
        try {
            $query = "SELECT c.id_categoria, c.nombre_C, COUNT(a.id_articulo) AS cantidad_productos
            FROM categoria c
            LEFT JOIN articulo a ON c.id_categoria = a.fk_id_categoria
            GROUP BY c.id_categoria, c.nombre_C
            ORDER BY cantidad_productos DESC;
            ";
            $statement = $this->conn->prepare($query);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejo de errores
            return "nos se optubo datos";
        }
    }
}

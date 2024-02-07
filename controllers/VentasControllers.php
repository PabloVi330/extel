<?php

require_once('../models/VentasModels.php');
require_once('../models/ArticulosModels.php');

class VentaController
{

   private $venta;
   private $articulo;
   public function __construct()
   {
      $this->venta = new VentaModel();
      $this->articulo = new ArticuloModel();
   }

   public function crearVenta()
   {
      // echo '<pre>';
      // print_r($_POST);
      // echo '</pre>';
   
      $detalle_V = json_decode($_POST['detalle_V'], true);
      $estado_V = $_POST['estado_V'];
      $metodo_pago_V = $_POST['metodo_pago_V'];
      $importe_V = $_POST['importe_V'];
      $efectivo_V = $_POST['efectivo_V'];
      $transferencia_V = $_POST['transferencia_V'];


      if( $_POST['tipo_V'] == "venta" ){
         $pago = floatval($efectivo_V + $transferencia_V);
         if($pago < $importe_V){
            
            $_POST['estado_V'] = 'por pagar';
            $_POST['monto_V'] =   $pago;
         }
         if($pago >= $importe_V){
            $_POST['estado_V'] = 'cancelado';
            $_POST['efectivo_V'] = $importe_V - $transferencia_V;
            $_POST['monto_V'] =  floatval( $_POST['importe_V']);
         }
         
      }

      if( $_POST['tipo_V'] == "proforma"){

         $_POST['estado_V'] = 'por pagar';
         $_POST['monto_V'] =   0;
      }


      if($_POST['metodo_pago_V'] == 'trasnferencia' || $_POST['metodo_pago_V'] == "E_T"){
        $_POST['verificado_V'] = "NO";
      }else{
         $_POST['verificado_V'] = "SI";
      }

      

      $crearVenta = $this->venta->crearVenta($_POST);

      if ($crearVenta == "ok") {
         if ($_POST['tipo_V'] == "venta") {
            for ($i = 0; $i < count($detalle_V); $i++) {
               $reducirStock = $this->articulo->reducirStock($detalle_V[$i]['id_articulo'], $detalle_V[$i]['cantidad_venta']);
               if ($reducirStock == "ok") {
                  //echo json_encode($reducirStock);
               } else {
                 // echo json_encode($reducirStock);
               }
            }
         }
      } else {
         echo json_encode($crearVenta);
      }
      echo json_encode($crearVenta);
   }
   public function eliminarVenta()
   {
      $venta = $this->venta->obtenerVentasPorId($_POST['id_venta']);
      $detalle_V = json_decode($venta['detalle_V'], true);
      $eliminarVenta = $this->venta->eliminarVenta($_POST['id_venta']);
      if ($eliminarVenta) {

         for ($i = 0; $i < count($detalle_V); $i++) {
            $reducirStock = $this->articulo->sumarStock1($detalle_V[$i]['id'], $detalle_V[$i]['cantidad']);
            if ($reducirStock) {
               echo json_encode($reducirStock);
            }
         }
      }
   }

   public function obtenerVentas()
   {
      $ventas = $this->venta->obtenerVentas();
      echo json_encode($ventas);
   }

   public function obtenerVentasPorId()
   {
      
      $ventas = $this->venta->obtenerVentasPorId($_POST['id_venta']);
      echo json_encode($ventas);
   }

   public function obtenerVentasPorFiltro()
   {
      $venta = $this->venta->obtenerVentasPorFiltro('fk_id_mantenimiento', $_POST['id_mantenimiento']);
      echo json_encode($venta);
   }
   public function obtenerVentasPorCore()
   {
      $venta = $this->venta->obtenerVentasPorCore($_POST['sql']);
      echo json_encode($venta);
   }
   public function pagarCredito()
   {
      $venta = $this->venta->pagarCredito($_POST['id_venta'], $_POST['monto_V']);
      echo json_encode($venta);
   }
   public function confirmarTransferencia()
   {
      $venta = $this->venta->confirmarTransferencia($_POST['id_venta']);
      echo json_encode($venta);
   }
}

$controller = new VentaController();

if (isset($_GET['action']) && $_GET['action'] == 'crearVenta') {
   $controller->crearVenta();
}

if (isset($_GET['action']) && $_GET['action'] == 'eliminarVenta') {
   $controller->eliminarVenta();
}

if (isset($_GET['action']) && $_GET['action'] == 'obtenerVentas') {
   $controller->obtenerVentas();
}

if (isset($_GET['action']) && $_GET['action'] == 'obtenerVentasPorId') {
   $controller->obtenerVentasPorId();
}

if (isset($_GET['action']) && $_GET['action'] == 'obtenerVentasPorFiltro') {
   $controller->obtenerVentasPorFiltro();
}
if (isset($_GET['action']) && $_GET['action'] == 'obtenerVentasPorCore') {
   $controller->obtenerVentasPorCore();
}
if (isset($_GET['action']) && $_GET['action'] == 'pagarCredito') {
   $controller->pagarCredito();
}
if (isset($_GET['action']) && $_GET['action'] == 'confirmarTransferencia') {
   $controller->confirmarTransferencia();
}

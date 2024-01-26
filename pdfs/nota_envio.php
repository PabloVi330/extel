<?php
require_once('../TCPDF/tcpdf.php');
require_once('../models/EnviosModels.php');
require_once('../models/ArticulosModels.php');
require_once('../models/SucursalesModels.php');

class imprimirFactura{



public function traerImpresionFactura(){

$id_envio = $_GET['id_envio'];
$enviosModels = new EnvioModel();
$sucursalModels = new Sucursal();
$envio = $enviosModels->obtenerEnviosPorId($id_envio);
//print_r($envio);
$sucursal1 = $sucursalModels->obtenerSucursal($envio['fk_id_sucursal1']);
$sucursal = $sucursalModels->obtenerSucursal($envio['fk_id_sucursal']);
$enviosModels->imprimirEnvio($id_envio);
$detalle = json_decode($envio['detalle_E'],true);
$costo = $envio['total_E'];

$timestamp = strtotime($envio['fecha_E']);
$fecha = date("Y-m-d", $timestamp);
$hora = date("H:i:s", $timestamp);
         
         
         
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

// ---------------------------------------------------------

	
$bloque1 = <<<EOF


	<table  >
		
		<tr style="font-size:13px;">
			
			<td style="width:150px"><img src="logo.png"></td>

			<td   style="font-size:13px; background-color:white; width:140px">
				
				<div style="font-size:8.5px; text-align:right; line-height:15px; font-size:11px;">
				
					<br>
					Direccion: $sucursal1[direccion_S]

				</div>

			</td>
 
			<td style="background-color:white; width:140px">

				<div style="font-size:8.5px; text-align:right; line-height:15px; font-size:11px;">
					
					<br>
					Telefono: $sucursal1[telefono_S]
					
					<br>
				

				</div>
				
			</td>

			<td style="background-color:white; width:110px; text-align:center; color:red"><br><br>NOTA Nro. <br>{$envio['id_envio']}</td>

		</tr>

	</table>


EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------
$bloque2 = null;
if (is_array($envio)) {

$bloque2 = <<<EOF

	<table >
		
		<tr>
		   
			<td style="width:140px"><img src="images/back.jpg"></td>
			<td style="width:340px; color:#153959; font-size: 30px; font-weight: bold;">NOTA DE TRASPASO</td>
		
		</tr>

	</table>

	<table style="font-size:13px; padding:5px 10px;">
	
		<tr>
		
			<td style="border: 1px solid #666; background-color:white; width:390px">

				Enviado por : $envio[nombre_usuario] 

			</td>

			<td style="border: 1px solid #666; background-color:white; width:150px;">
			
				Fecha: $fecha

			</td>

		</tr>

		<tr>
		   
			<td style="border: 1px solid #666; background-color:white; width:390px">Responsable de recepción : $envio[responsable_E]</td>
			<td style="border: 1px solid #666; background-color:white; width:150px">Hora: $hora</td>

		</tr>
		<tr>
		   
			<td style="border: 1px solid #666; background-color:white; width:270px">Origen: $sucursal1[nombreS]</td>
			<td style="border: 1px solid #666; background-color:white; width:270px">Destino: $sucursal[nombreS]</td>

		</tr>

		<tr>
		
		<td style="border-bottom: 1px solid #666; background-color:white; width:540px"></td>

		</tr>

	</table>

EOF;
}



$pdf->writeHTML($bloque2, false, false, false, false, '');

// ---------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:12px; padding:5px 10px;">

		<tr>
		<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Codigo</td>
		<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">Producto</td>
		<td style="border: 1px solid #666; background-color:white; width:80px; text-align:center">Cantidad</td>
		<td style="border: 1px solid #666; background-color:white; width:80px; text-align:center">Valor Unit.</td>
		<td style="border: 1px solid #666; background-color:white; width:80px; text-align:center">Valor Total</td>

		</tr>

	</table>

EOF;
 
$pdf->writeHTML($bloque3, false, false, false, false, '');

// ---------------------------------------------------------
// [{"id":"293","codigo":"ghjghjghj","descripcion":"ghjghj","precio_neto":"30","precio_distribucion":"31.5","precio_tecnico":"33","precio_publico":"34.5","stock":"59","cantidad":1,"subtotal":"30","cantidad_envio":1,"unimed":"55"}]
foreach ($detalle as $key => $item) {

$c = new ArticuloModel();
$cc = $c->obtenerArticuloPorId($item['id']);
$valorUnitario = number_format($item["precio_neto"], 2);
$des = json_decode($cc['descripcion_A'], true);
$precioTotal = number_format($item["subtotal"], 2);
$costoTo =  number_format($costo, 2);

$bloque4 = <<<EOF

	<table style="font-size:11px; padding:5px 10px;">

		<tr>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">
				$cc[codigo_A]
			</td>

			<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
				$des[detalle]
			</td>

			<td style="border: 1px solid #666;  background-color:white; width:80px; text-align:center">
				$item[cantidad_envio]
			</td>

			<td style="border: 1px solid #666;  background-color:white; width:80px; text-align:center">Bs
				$valorUnitario
			</td>

			<td style="border: 1px solid #666; background-color:white; width:80px; text-align:center">Bs 
				$precioTotal
			</td>


		</tr>

	</table>


EOF;

$pdf->writeHTML($bloque4, false, false, false, false, '');

}

// ---------------------------------------------------------

$bloque5 = <<<EOF

	<table style="font-size:13px; padding:5px 10px;">

		<tr>

			<td style="background-color:white; width:340px; text-align:center"></td>

			<td style="border-bottom: 1px solid #666; background-color:white; width:100px; text-align:center"></td>

			<td style="border-bottom: 1px solid #666;  background-color:white; width:100px; text-align:center"></td>

		</tr>
		
	


		<tr>
		
			<td style="border-right: 1px solid #666;  background-color:white; width:340px; text-align:center"></td>

			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">
				Total:
			</td>
			
			<td style="border: 1px solid #666;  background-color:white; width:100px; text-align:center">
				Bs $costoTo
			</td>

		</tr>
		<tr>
		   
			<td style="width:140px"><img src="images/back.jpg"></td>
			<td style="width:140px"><img src="images/back.jpg"></td>
		
		
		</tr>
		<tr>
		   
		<td style="width:140px"><img src="images/back.jpg"></td>
		<td style="width:140px"><img src="images/back.jpg"></td>
	
	
	</tr>
	<tr>
		   
	<td style="width:140px"><img src="images/back.jpg"></td>
	<td style="width:140px"><img src="images/back.jpg"></td>


</tr>
		
		<tr>
		   
			<td style="width:140px"><img src="images/back.jpg"></td>
			<td style="width:140px"><img src="images/back.jpg"></td>
			<td style="width:340px; color:#153959; font-size: 15px; font-weight: bold;">   !Gracias por su preferencia!!!!!</td>
		
		</tr>

		


	</table>

EOF;

 $pdf->writeHTML($bloque5, false, false, false, false, '');



// ---------------------------------------------------------
//SALIDA DEL ARCHIVO 

$pdf->Output('Nota_Venta.pdf');

}

}

$factura = new imprimirFactura();
$factura -> traerImpresionFactura();

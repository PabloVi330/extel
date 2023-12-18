<?php
require_once('../TCPDF/tcpdf.php');
require_once('../models/VentasModels.php');
require_once('../models/ArticulosModels.php');


class imprimirFactura{



public function traerImpresionFactura(){

$id_venta = $_GET['id_venta'];
$ventasModels = new VentaModel();
$venta = $ventasModels->obtenerVentasPorId($id_venta);
$ventasModels->imprimirVenta($id_venta);
$detalle = json_decode($venta['detalle_V'],true);
$costo = $venta['importe_V'];
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
					Dirección: 6 de octubre junin y ayacucho #555

				</div>

			</td>
 
			<td style="background-color:white; width:140px">

				<div style="font-size:8.5px; text-align:right; line-height:15px; font-size:11px;">
					
					<br>
					Teléfono: 65420150
					
					<br>
					74624206

				</div>
				
			</td>

			<td style="background-color:white; width:110px; text-align:center; color:red"><br><br>NOTA N.<br>{$venta['id_venta']}</td>

		</tr>

	</table>


EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------
$bloque2 = null;
if (is_array($venta)) {

$bloque2 = <<<EOF

	<table >
		
		<tr>
		   
			<td style="width:140px"><img src="images/back.jpg"></td>
			<td style="width:340px; color:#153959; font-size: 30px; font-weight: bold;">NOTA DE VENTA</td>
		
		</tr>

	</table>

	<table style="font-size:13px; padding:5px 10px;">
	
		<tr>
		
			<td style="border: 1px solid #666; background-color:white; width:390px">

				Vendedor : $venta[nombre_usuario] 

			</td>

			<td style="border: 1px solid #666; background-color:white; width:150px; text-align:right">
			
				Fecha: $venta[fecha_V]

			</td>

		</tr>

		<tr>
		   
			<td style="border: 1px solid #666; background-color:white; width:540px">Cliente: $venta[nombre_cliente]</td>

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

foreach ($detalle as $key => $item) {

$c = new ArticuloModel();
$cc = $c->obtenerArticuloPorId($item['id_articulo']);
if($venta["facturado_V"] == 1){
	$valorUnitario = number_format($item["precio_facturado"], 2);
     $precioTotal = number_format($item["sub_total_facturado"], 2);
}else{
	$valorUnitario = number_format($item["precio_venta"], 2);
	$precioTotal = number_format($item["sub_total"], 2);
}
$bloque4 = <<<EOF

	<table style="font-size:11px; padding:5px 10px;">

		<tr>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">
				$cc[codigo_A]
			</td>

			<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
				$cc[descripcion_A]
			</td>

			<td style="border: 1px solid #666;  background-color:white; width:80px; text-align:center">
				$item[cantidad_venta]
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

			<td style="border: 1px solid #666;  background-color:white; width:100px; text-align:center">
				Neto:
			</td>

			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">
				Bs $costo
			</td>

		</tr>

	

		<tr>
		
			<td style="border-right: 1px solid #666;  background-color:white; width:340px; text-align:center"></td>

			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">
				Total:
			</td>
			
			<td style="border: 1px solid #666;  background-color:white; width:100px; text-align:center">
				Bs $costo
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

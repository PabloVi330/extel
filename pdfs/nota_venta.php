<?php
require_once('../TCPDF/tcpdf.php');
require_once('../models/VentasModels.php');
require_once('../models/ArticulosModels.php');
require_once('../models/SucursalesModels.php');


class imprimirFactura
{



	public function traerImpresionFactura()
	{

		$id_venta = $_GET['id_venta'];
		$ventasModels = new VentaModel();
		$sucursalModels = new Sucursal();
		$venta = $ventasModels->obtenerVentasPorId($id_venta);
		$sucursal = $sucursalModels->obtenerSucursal($venta['fk_id_sucursal']);
		$ventasModels->imprimirVenta($id_venta);
		$detalle = json_decode($venta['detalle_V'], true);
		$tipo_V = $venta['tipo_V'];
		$costo = $venta['importe_V'];
		$estado_V = $venta['estado_V'];
		
		 $timestamp = strtotime($venta['fecha_V']);
         $fecha = date("Y-m-d", $timestamp);
         $hora = date("H:i:s", $timestamp);
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
         //echo '<pre>';print_r($venta);echo '</pre>';
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
					Direccion: $sucursal[direccion_S]

				</div>

			</td>
 
			<td style="background-color:white; width:140px">

				<div style="font-size:8.5px; text-align:right; line-height:15px; font-size:11px;">
					
					<br>
					Telefono: $sucursal[telefono_S]
					
					<br>
					

				</div>
				
			</td>

			<td style="background-color:white; width:110px; text-align:center; color:red"><br><br>NOTA Nro: {$venta['id_venta']}</td>

		</tr>

	</table>


EOF;

		$pdf->writeHTML($bloque1, false, false, false, false, '');

		// ---------------------------------------------------------
		$bloque2 = null;
		if (is_array($venta)) {
			$titulo = '';
			$validez = '';
			if ($tipo_V == 'venta') {
				if($estado_V == 'por pagar'){
					$titulo = '<td style="width:340px; color:#153959; font-size: 20px; font-weight: bold;">NOTA DE VENTA (por pagar)</td>';
					$validez = '<td style="border: 1px solid #666; background-color:white; width:150px"> Hora: $hora </td>';
				}else{
					$titulo = '<td style="width:340px; color:#153959; font-size: 20px; font-weight: bold;">NOTA DE VENTA (cancelado)</td>';
				$validez = '<td style="border: 1px solid #666; background-color:white; width:150px">  Hora: '. $hora.' </td>';
				}
				
			}
			if ($tipo_V == 'proforma') {
				$titulo = '<td style="width:340px; color:#153959; font-size: 20px; font-weight: bold;">PROFORMA</td>';
				$validez = '<td style="border: 1px solid #666; background-color:white; width:150px">Validez: 15 dias Calendario</td>';
			}

			if ($tipo_V == 'pedido') {
				$titulo = '<td style="width:340px; color:#153959; font-size: 20px; font-weight: bold;">PEDIDO</td>';
				$validez = '<td style="border: 1px solid #666; background-color:white; width:150px"></td>';
			}
    

			$bloque2 = <<<EOF

	<table >
		
		<tr>
		   
			<td style="width:140px"><img src="images/back.jpg"></td>
			$titulo
		
		</tr>

	</table>
	

	<table style="font-size:13px; padding:5px 10px;">
	
		<tr>
		
			<td style="border: 1px solid #666; background-color:white; width:390px">

				Vendedor : $venta[nombre_usuario] 

			</td>

			<td style="border: 1px solid #666; background-color:white; width:150px; text-align:right">
			
				Fecha: $fecha

			</td>

		</tr>

		<tr>
		   
			<td style="border: 1px solid #666; background-color:white; width:390px">Cliente: $venta[nombre_cliente]</td>
			$validez

		</tr>
		

		<tr>
		
	 	<td style="border-bottom: 1px solid #666; background-color:white; width:540px">  </td>
          
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
			$des = json_decode($cc['descripcion_A'], true);
			if ($venta["facturado_V"] == 1) {
				$valorUnitario = number_format($item["precio_facturado"], 2);
				$precioTotal = number_format($item["sub_total_facturado"], 2);
			} else {
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
				$des[detalle]
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



		// ---------------------------------------------------------
        $metodepago =  $venta['metodo_pago_V'];
		$bloque55 = <<<EOF

		<table style="font-size:11px; padding:5px 10px;">
			
					<tr>
			
						<td style="background-color:white; width:340px; text-align:center"></td>
			
						<td style="border-bottom: 1px solid #666; background-color:white; width:100px; text-align:center"></td>
			
						<td style="border-bottom: 1px solid #666;  background-color:white; width:100px; text-align:center"></td>
			
					</tr>
					
					<tr>
					
						<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
		
						<td style="border: 1px solid #666;  background-color:white; width:200px; text-align:center">
							Metodo de Pago:
						</td>
			
						<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
						 $metodepago
						</td>
			
					</tr>
					<tr>
					
						<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
		
						<td style="border: 1px solid #666;  background-color:white; width:200px; text-align:center">
							Efectivo:
						</td>
			
						<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
						 $venta[efectivo_V]
						</td>
			
					</tr>
					<tr>
					
						<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
		
						<td style="border: 1px solid #666;  background-color:white; width:200px; text-align:center">
							Transferencia:
						</td>
			
						<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
						 $venta[transferencia_V]
						</td>
			
					</tr>
		
		     </table> 
EOF;

		$pdf->writeHTML($bloque55, false, false, false, false, '');


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
$factura->traerImpresionFactura();

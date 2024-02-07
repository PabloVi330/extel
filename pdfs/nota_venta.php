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
		$total_V = number_format($venta['importe_V'], 2 , ',', '.');
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
						<table style="border-collapse: collapse;">
							<tr style="font-size: 10px;">
								<td  style=" width: 120px;height: 90px;  background-color: white; padding: 3px; text-align: center; vertical-align: middle">
									<img src="logo.png"  style="margin-top: 1000px; display: inline-line;">
								</td>
								<td style="font-size: 13px; background-color: white; width: 300px; ">
									<div style="font-size: 8.5px; text-align: center;  font-size: 11px;">
										<h5 style=" line-height: 5px;">Direccion: $sucursal[direccion_S]</h5>
										<h5 style=" line-height: 5px;">Telefono: $sucursal[telefono_S]-67200205</h5>
										<h5 style=" line-height: 5px;">NIT: 3099512</h5>
								        <h5 style=" line-height: 5px;">Correo: adolfoblacutt@hotmail.com</h5>
									</div>
								</td>
								<td style="background-color: white; width: 110px; text-align: center; color: red;">
									<br><br>NOTA Nro: {$venta['id_venta']}
								</td>
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
				if ($estado_V == 'por pagar') {
					$titulo = '<td style="width:340px; color:#153959; font-size: 20px; font-weight: bold;">NOTA DE VENTA (por pagar)</td>';
					$validez = '<td style="border: 1px solid #666; background-color:white; width:150px"> Hora: ' . $hora . ' </td>';
				} else {
					$titulo = '<td style="width:340px; color:#153959; font-size: 20px; font-weight: bold;">NOTA DE VENTA (cancelado)</td>';
					$validez = '<td style="border: 1px solid #666; background-color:white; width:150px">  Hora: ' . $hora . ' </td>';
				}
			}

			$bloque2 = <<<EOF

						<table >
							
							<tr>
							
								<td style="width:140px"><img src="images/back.jpg"></td>
								$titulo
							
							</tr>

						</table>
						

						<table style="font-size:10px; padding:5px 10px;">
						
							<tr>
							
								<td style="border: 1px solid #666; background-color:white; width:390px">

									Vendedor : $venta[nombre_usuario] 

								</td>

								<td style="border: 1px solid #666; background-color:white; width:150px; ">
								
									Fecha: $fecha

								</td>

							</tr>

							<tr>
							
								<td style="border: 1px solid #666; background-color:white; width:390px">Cliente: $venta[razon_social]</td>
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

					<table style="font-size:10px; padding:5px 10px;">

						<tr>
						<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Codigo</td>
						<td style="border: 1px solid #666; background-color:white; width:230px; text-align:center">Producto</td>
						<td style="border: 1px solid #666; background-color:white; width:70px; text-align:center">Cantidad</td>
						<td style="border: 1px solid #666; background-color:white; width:70px; text-align:center">Valor Unit.</td>
						<td style="border: 1px solid #666; background-color:white; width:70px; text-align:center">Valor Total</td>
						</tr>

					</table>

				EOF;

		$pdf->writeHTML($bloque3, false, false, false, false, '');

		// ---------------------------------------------------------

		foreach ($detalle as $key => $item) {

			$c = new ArticuloModel();
			$cc = $c->obtenerArticuloPorId($item['id_articulo']);
			$des = json_decode($cc['descripcion_A'], true);
			$img = json_decode($cc['imagenes_A'], true);
			$imgNombre = urlencode($img[0]);
			$urlImg = '../controllers/uploads/products/' . $img[0];

			$valorUnitario = number_format($item["precio_venta"], 2, ',', '.');
			$precioTotal = number_format($item["sub_total"], 2 , ',', '.');
			

			$bloque4 = <<<EOF
			
				<table style="font-size:9px; padding:5px 10px;">

					<tr>
						<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">
							$cc[codigo_A]
						</td>

						<td style="border: 1px solid #666; background-color: white; width: 230px; text-align: center; display: flex; align-items: flex-start;">
							
								$des[detalle]
							
						</td>

					


						<td style="border: 1px solid #666;  background-color:white; width:70px; text-align:center">
							$item[cantidad_venta]
						</td>

						<td style="border: 1px solid #666;  background-color:white; width:70px; text-align:center">Bs
							$valorUnitario
						</td>
						
						

						<td style="border: 1px solid #666; background-color:white; width:70px; text-align:center">Bs 
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
					Bs $total_V
				</td>

			</tr>

		</table>

	EOF;

		$pdf->writeHTML($bloque5, false, false, false, false, '');



		// ---------------------------------------------------------
		$metodepago =  $venta['metodo_pago_V'];
		$efectivo_V = number_format($venta['efectivo_V'], 2 , ',', '.');
		$transferencia_V = number_format($venta['transferencia_V'], 2 , ',', '.');
		$bloque55 = <<<EOF

						<table style="font-size:11px; padding:5px 10px;">
							
									<tr>
									
										<td style="width:140px"><img src="images/back.jpg"></td>
										<td style="width:140px"><img src="images/back.jpg"></td>
		
									</tr>

									
									<tr>
									
										<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
						
										<td style="border: 1px solid #666;  background-color:white; width:400px; text-align:center">
											Metodo de Pago:
										</td>
									</tr>
									
									<tr>
									
										<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
						
										<td style="border: 1px solid #666;  background-color:white; width:200px; text-align:center">
											Efectivo:
										</td>
							
										<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
										$efectivo_V
										</td>
							
									</tr>
									<tr>
									
										<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
						
										<td style="border: 1px solid #666;  background-color:white; width:200px; text-align:center">
											Transferencia:
										</td>
							
										<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
										$transferencia_V
										</td>
							
									</tr>
						
							</table> 
				EOF;

		$pdf->writeHTML($bloque55, false, false, false, false, '');




		$saldo = $venta['importe_V'] - $venta['monto_V'];
		$monto_V = number_format($venta['monto_V'], 2 , ',', '.');
		$bloque555 = <<<EOF

						<table style="font-size:11px; padding:5px 10px;">
							
									<tr>
									
										<td style="width:140px"><img src="images/back.jpg"></td>
										<td style="width:140px"><img src="images/back.jpg"></td>
		
									</tr>

									
									<tr>
									
										<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
						
										<td style="border: 1px solid #666;  background-color:white; width:400px; text-align:center">
											Pagos
										</td>
									</tr>
									
									<tr>
									
										<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
						
										<td style="border: 1px solid #666;  background-color:white; width:200px; text-align:center">
											A cuenta:
										</td>
							
										<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
										$monto_V
										</td>
							
									</tr>
									<tr>
									
										<td style="border-right: 1px solid #666;  background-color:white; width:140px; text-align:center"></td>
						
										<td style="border: 1px solid #666;  background-color:white; width:200px; text-align:center">
											Saldo:
										</td>
							
										<td style="border: 1px solid #666; background-color:white; width:200px; text-align:center">
										$saldo
										</td>
							
									</tr>

									
						
							</table> 
				EOF;

		$pdf->writeHTML($bloque555, false, false, false, false, '');



		// ---------------------------------------------------------
		//SALIDA DEL ARCHIVO 

		$pdf->Output('Nota_Venta.pdf');
	}
}

$factura = new imprimirFactura();
$factura->traerImpresionFactura();

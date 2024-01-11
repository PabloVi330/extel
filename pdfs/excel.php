<?php

require 'vendor/autoload.php'; // Ajusta la ruta según tu configuración
include('../models/db_conection.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Crear una instancia de la hoja de cálculo
$spreadsheet = new Spreadsheet();

// Obtener la hoja activa
$sheet = $spreadsheet->getActiveSheet();
$estiloTituloColumnas = [
    'font' => [
        'bold' => true,
        'size' => 9,
        'color' => [
            'rgb' => 'FFFFFF'
        ]
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'startColor' => [
            'rgb' => '538DD5'
        ]
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
        ]
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
    ]
];

// Inicializar variables
$tt = 0;
$it = 0;

// Tu lógica para obtener datos de la base de datos
$db = DBConnection::getInstance();
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
    $stmt = $db->query($sql);
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
}
$fila = 4;
// Iterar sobre clientes

$sheet->mergeCells('A' . $fila . ':F' . $fila);
$sheet->setCellValue('A' . $fila, "INVENTARIO RED EXTEL INGENIERIA");
$sheet->getStyle('A' . $fila . ':M' . $fila)->applyFromArray($estiloTituloColumnas);

// Incrementar la fila para los encabezados
$fila++;

$sheet->getColumnDimension('A')->setWidth(10);
$sheet->setCellValue('A' . $fila, 'CODIGO_A');
$sheet->getColumnDimension('B')->setWidth(15);
$sheet->setCellValue('B' . $fila, 'GRUPO');
$sheet->getColumnDimension('C')->setWidth(45);
$sheet->setCellValue('C' . $fila, 'DESCRIPCION');
$sheet->getColumnDimension('D')->setWidth(10);
$sheet->setCellValue('D' . $fila, 'PRECIO COMPRA.');
$sheet->getColumnDimension('E')->setWidth(10);
$sheet->setCellValue('E' . $fila, 'P. V. DISTRIBUCION.');
$sheet->getColumnDimension('F')->setWidth(10);
$sheet->setCellValue('F' . $fila, 'P.V. TECNICOS');
$sheet->getColumnDimension('G')->setWidth(10);
$sheet->setCellValue('G' . $fila, 'P.V. PUBLICO');
$sheet->getColumnDimension('H')->setWidth(10);
$sheet->setCellValue('H' . $fila, 'P.V. STOCK TOTAL');
$sheet->getColumnDimension('I')->setWidth(10);
$sheet->setCellValue('I' . $fila, 'P.V. VALOR TOTAL ');
$sheet->getColumnDimension('J')->setWidth(10);
$sheet->setCellValue('J' . $fila, 'P.V. STOCK REDEXTEL');
$sheet->getColumnDimension('K')->setWidth(10);
$sheet->setCellValue('K' . $fila, 'P.V. STOCK ALMACEN COD');
$sheet->getColumnDimension('L')->setWidth(10);
$sheet->setCellValue('L' . $fila, 'P.V. STOCK TIENDA TOLSEN');
$sheet->getColumnDimension('M')->setWidth(10);
$sheet->setCellValue('M' . $fila, 'P.V. STOCK EX TERMINAL');
$sheet->getStyle('A' . $fila . ':M' . $fila)->applyFromArray($estiloTituloColumnas);

$fila++;  
foreach ($productos as $producto) {
    
    $descripcion = json_decode($producto['descripcion_A'], true);
    $stockTotal = $producto['stock_sucursal_1'] + $producto['stock_sucursal_2'] + $producto['stock_sucursal_3'] + $producto['stock_sucursal_4'];
    $valorTotal = $producto['precio_neto_A'] * $stockTotal;
    $sheet->setCellValue('A' . $fila, $producto['codigo_A']);
    $sheet->setCellValue('B' . $fila, $producto['nombre_categoria']);
    $sheet->setCellValue('C' . $fila, $descripcion['detalle']);
    $sheet->setCellValue('D' . $fila, $producto['precio_neto_A']);
    $sheet->setCellValue('E' . $fila, $producto['precio_distribucion_A']);
    $sheet->setCellValue('F' . $fila, $producto['precio_tecnico_A']);
    $sheet->setCellValue('G' . $fila, $producto['precio_publico_A']);
    $sheet->setCellValue('H' . $fila, $stockTotal); 
    $sheet->setCellValue('I' . $fila, $valorTotal);    
    $sheet->setCellValue('J' . $fila, $producto['stock_sucursal_1']);
    $sheet->setCellValue('K' . $fila, $producto['stock_sucursal_2']);
    $sheet->setCellValue('L' . $fila, $producto['stock_sucursal_3']);
    $sheet->setCellValue('M' . $fila, $producto['stock_sucursal_4']); 
    $fila++;    
}

// Crear un escritor
$writer = new Xlsx($spreadsheet);

// Configurar encabezados para la descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="inventario.xlsx"');
header('Cache-Control: max-age=0');

// Enviar el archivo al navegador
$writer->save('php://output');
exit();

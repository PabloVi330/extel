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
$mes = $_GET['mes'];
$clasificacion = $_GET['clasificacion'];
$tipo = $_GET['tipo'];
// Tu lógica para obtener datos de la base de datos
$db = DBConnection::getInstance();
try {
    $sql = "SELECT * FROM `clientes` WHERE clasificacion_Cl = '$clasificacion'";
    $stmt = $db->query($sql);
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
}
$fila = 4;
// Iterar sobre clientes
foreach ($clientes as $cliente) {
    $idCliente = $cliente['id_cliente'];

    $sheet->mergeCells('A' . $fila . ':F' . $fila);
    $sheet->setCellValue('A' . $fila, $cliente['nombre_Cl']);
    $sheet->getStyle('A' . $fila . ':F' . $fila)->applyFromArray($estiloTituloColumnas);

    // Incrementar la fila para los encabezados
    $fila++;

    $sheet->getColumnDimension('A')->setWidth(7);
    $sheet->setCellValue('A' . $fila, 'Item');
    $sheet->getColumnDimension('B')->setWidth(10);
    $sheet->setCellValue('B' . $fila, 'Fecha');
    $sheet->getColumnDimension('C')->setWidth(17);
    $sheet->setCellValue('C' . $fila, 'Codigo');
    $sheet->getColumnDimension('D')->setWidth(10);
    $sheet->setCellValue('D' . $fila, 'Cant.');
    $sheet->getColumnDimension('E')->setWidth(10);
    $sheet->setCellValue('E' . $fila, 'Unit.');
    $sheet->getColumnDimension('F')->setWidth(10);
    $sheet->setCellValue('F' . $fila, 'Precio');

    // Incrementar la fila para los datos
    $fila++;

    $sql1 = "SELECT fecha, MAX(codigo) AS codigo, copias, precio, sub_total FROM copias WHERE tipo = '$tipo' AND MONTH(fecha) = $mes AND fk_id_cliente = $idCliente GROUP BY codigo;";
    $stmt1 = $db->query($sql1);
    $copias = $stmt1->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($copias)) {
        foreach ($copias as $copia) {
            $ffe = date("d-m-Y", strtotime($copia['fecha']));
            $tto = $copia['sub_total'];
            $tt += $tto;
            $it++;

            // Obtener el estilo de la celda actual
            $style = $sheet->getStyle('A' . $fila);

            // Aplicar el tamaño de fuente al estilo
            $style->getFont()->setSize(9);

            // Rellenar las celdas con los datos

            // Rellenar las celdas con los datos
            $sheet->setCellValue('A' . $fila, $it);
            $sheet->setCellValue('B' . $fila, $ffe);
            $sheet->setCellValue('C' . $fila, $copia['codigo']);
            $sheet->setCellValue('D' . $fila, $copia['copias']);
            $sheet->setCellValue('E' . $fila, $copia['precio']);
            $sheet->setCellValue('F' . $fila, $tto);

            // Incrementar la fila para el siguiente conjunto de datos
            $fila++;
        }
    }
  
    try {
        $sql2 = "SELECT a.fecha_C, a.fk_id_articulo3, a.cantidad, a.precio, art.descripcion_A
        FROM anillados a
        JOIN articulo art ON a.fk_id_articulo3 = art.id_articulo
        WHERE a.tipo = 'credito' AND MONTH(a.fecha_C) = $mes AND a.fk_id_cliente = $idCliente;";
        $stmt2 = $db->query($sql2);
        $anillados = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    if (!empty($anillados)) {
        foreach ($anillados as $anillado) {
            $ffe = date("d-m-Y", strtotime($anillado['fecha_C']));
            $tto = $anillado['cantidad'] * $anillado['precio'];
            $tt += $tto;
            $it++;

            // Obtener el estilo de la celda actual
            $style = $sheet->getStyle('A' . $fila);

            // Aplicar el tamaño de fuente al estilo
            $style->getFont()->setSize(9);

            // Rellenar las celdas con los datos
            $texto = $anillado['descripcion_A'];
            $partes = explode('(', $texto, 2);
            $resultado = trim($partes[0]);

            //echo $resultado;



            // Rellenar las celdas con los datos
            $sheet->setCellValue('A' . $fila, $it);
            $sheet->setCellValue('B' . $fila, $ffe);
            $sheet->setCellValue('C' . $fila,   trim($resultado));
            $sheet->setCellValue('D' . $fila, $anillado['cantidad']);
            $sheet->setCellValue('E' . $fila, $anillado['precio']);
            $sheet->setCellValue('F' . $fila, $tto);

            // Incrementar la fila para el siguiente conjunto de datos
            $fila++;
        }
    }

    $sheet->mergeCells('A' . $fila . ':E' . $fila);
    $sheet->setCellValue('A' . $fila, 'Total');
    $sheet->setCellValue('F' . $fila, $tt);
    $sheet->getStyle('A' . $fila . ':F' . $fila)->applyFromArray($estiloTituloColumnas);

    // Incrementar la fila para el siguiente cliente
    $fila++;$fila++;$fila++;
}

// Crear un escritor
$writer = new Xlsx($spreadsheet);

// Configurar encabezados para la descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Vales.xlsx"');
header('Cache-Control: max-age=0');

// Enviar el archivo al navegador
$writer->save('php://output');
exit();

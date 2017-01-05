<?php
require_once 'Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'hello world!');
$objPHPExcel->getActiveSheet()->setTitle('Chesse1');
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="helloworld.xlsx"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
?>
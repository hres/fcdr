<?php
header('Content-Type: 'application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="test.xlsx"');
header('Cache-Control: max-age=0');


$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
ob_end_clean();
ob_start();
$objWriter->save('php://output');
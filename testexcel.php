<?php
header('Content-Type: 'application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="test.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
ob_end_clean();
// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');
// It will be called file.xls
header('Content-Disposition: attachment; filename="sectionlist.xlsx"');
$objWriter->save('php://output');
?>
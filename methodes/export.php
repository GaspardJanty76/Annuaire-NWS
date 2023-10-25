<?php
require __DIR__ . '/../vendor/autoload.php';
include ('connexion.php');
$connexion = connexionBdd();

// Créez un nouvel objet PhpSpreadsheet
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Sélectionnez la feuille active
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Nom');
$sheet->setCellValue('B1', 'Prénom');
$sheet->setCellValue('C1', 'Email');
$sheet->setCellValue('D1', 'Téléphone');
$sheet->setCellValue('E1', 'Spécialité');

$sql = "SELECT * FROM eleves WHERE suppression = 0 ORDER BY nom";
$result = $connexion->query($sql);

$row = 2;

if ($result->num_rows > 0) {
    while ($data = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $row, $data['nom']);
        $sheet->setCellValue('B' . $row, $data['prenom']);
        $sheet->setCellValue('C' . $row, $data['email']);
        $sheet->setCellValue('D' . $row, $data['tel']);
        $sheet->setCellValue('E' . $row, $data['specialite']);

        $row++;
    }
}

$filename = 'tableau_excel.xlsx';

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer->save('php://output');

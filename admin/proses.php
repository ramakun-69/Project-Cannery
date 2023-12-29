<?php
include('../koneksi.php');
require ('../vendor/autoload.php');
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;


 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 1;$i < count($sheetData);$i++)
	{
        
        $bulan = $sheetData[$i]['1'];
        $tahun = $sheetData[$i]['2'];
        $tkline = $sheetData[$i]['3'];
        $tktidakhadir = $sheetData[$i]['4'];
        $tkproduksi = $sheetData[$i]['5'];
        $tonaseproses = $sheetData[$i]['6'];
        $tonasekirim = $sheetData[$i]['7'];
        $stock = $sheetData[$i]['8'];
        $jamkerja = $sheetData[$i]['9'];
        $sc = $sheetData[$i]['10'];
        $scjam = $sheetData[$i]['11'];
        $mppsc = $sheetData[$i]['12'];
        $kapasitas = $sheetData[$i]['13'];
        $recovery = $sheetData[$i]['14'];
        $akumrec = $sheetData[$i]['15'];
        $akumkap = $sheetData[$i]['16'];
        $mppkg = $sheetData[$i]['17'];
        $choice = $sheetData[$i]['18'];




        mysqli_query($koneksi,"insert into resume_cannery_bulanan (id,bulan,tahun,tkline,tktidakhadir,tkproduksi,tonaseproses,tonasekirim,stock,jamkerja,sc,scjam,mppsc,kapasitas,recovery,akumrec,akumkap,mppkg,choice) values ('',
            '$bulan','$tahun','$tkline','$tktidakhadir','$tkproduksi','$tonaseproses','$tonasekirim','$stock','$jamkerja','$sc','$scjam','$mppsc','$kapasitas','$recovery','$akumrec','$akumkap','$mppkg','$choice')");
    }
    header("Location: transaksi_bulanan.php"); 
}
?>
<?php
// memanggil library FPDF
include_once('fpdf.php');
include_once'../conf/konek.php';

$id = base64_decode($_GET['id']);
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm',array(180,85));
// membuat halaman baru
$pdf->AddPage();

// mengatur font tulisan
$pdf->SetFont('Arial','B',15);
// mengatur posisi tulisan dan kolomnya
$pdf->setXY(10,10);
//membuat multiple cell agar saat tulisan banyak akan pindah baris
$pdf->MultiCell(110,20,'Wonosobo Cyber Security Meetup',1,'C');
$pdf->setXY(120,10);
// multiple cell yang diisi gambar
$pdf->MultiCell(50,20,$pdf->Image('../hasil/baner.jpg', 129,11,34,18),1);


$pdf->SetFont('Times','',10);
$pdf->setXY(10,30);
$pdf->MultiCell(110,10,'Topik : # Reverse Engineering # Mengontrol Smartphone Android Teman',1,'C');

// query menampilkan data untuk dicetak pdf
$query = "SELECT * FROM csm WHERE csm_id=:id";
$stmt = $kon->prepare($query);
$stmt->bindParam('id',$id);
$stmt->execute();            	
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	$nm_file = $row['id']."-".$row['nama'].".png";
	$waktu = substr($row['waktu'], 0,19);

    $pdf->setXY(120,30);
    $pdf->MultiCell(50,10,$row['nama'],1,'C');
    $pdf->setXY(10,40);
    $pdf->MultiCell(50,5,'Waktu : Sabtu, 31 Maret 2018 Mulai dari 9:00 - 13:00',1,'C');
    $pdf->setXY(60,40);
    $pdf->MultiCell(60,5,'Tempat : Resto Ongklok Jl. Dieng KM.02 Bugangan Wonosobo',1,'C');
    $pdf->setXY(10,50);
    $pdf->MultiCell(110,10,'Di order oleh '.$row['nama'].' pada '.$waktu,1,'C');
	$pdf->setXY(120,40);
	$pdf->MultiCell(50,20,$pdf->Image('../hasil/qr/'.$nm_file, 137,41,18,18),1);
	$nama_tiket = $row['nama'].".pdf";
}

// output pdf dan simpan otomatis dengan nama yang kita inginkan
$pdf->Output('D:/xampp/htdocs/cocok/hasil/tiket/'.$nama_tiket,'F');
header("location:../index.php");
?>
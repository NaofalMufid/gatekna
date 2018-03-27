<?php
include_once("../phpqrcode/qrlib.php");
$tempdir = "../hasil/qr/";

// cek apakah folder yang diinginkan untuk menyimpan hasil qr gen ada
if(!file_exists($tempdir))
{
    mkdir($tempdir);
}

// paramater inputan untuk qr code generator
$isi_teks = $_POST['isi_teks'];
$nama_file = $_POST['nama_file'].".png";
$quality = "H";
$ukuran = 5;
$padding = 0;

// melakukan generate qr code memanfaatkan Kelas QRCode dengan method png
QRCode::png($isi_teks,$tempdir.$nama_file,$quality,$ukuran,$padding);	
header("location:../index.php");

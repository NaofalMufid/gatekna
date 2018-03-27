<?php
session_start();
// login etok-etok
if (empty($_SESSION['nama']))
{
	header("location:login.php");
}            
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon">

    <title>:: QR Generator ::</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-pushpin"></i> CCLUB UNSIQ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
    		<li><a href="index.php"><i class="glyphicon glyphicon-th-large"></i> Dashboard</a></li>
	        <li><a href="index.php?kanal=qr"><i class="glyphicon glyphicon-info-sign"></i> QR</a></li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Account</a></li>
            <li><a href="conf/cek.php?act=metu"><i class="glyphicon glyphicon-off"></i> Keluar</a></li>
            </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">  

          <!--Home Page Administrator-->  
          <h1 class="page-header">Dashboard</h1>
          <div class="row">
            <div class="col-sm-6 col-md-9">
            <?php
            // koneksi ke database melalui file lain
        	include_once"conf/konek.php";

            if(!isset($_GET['kanal'])){
            ?>
        	<table class="table table-responsive table-bordered">
        		<thead>
        			<tr>
        				<th>NO</th>
        				<th>Nama</th>
        				<th>Email</th>
        				<th colspan="2">QR Gen</th>
        				<th colspan="2">Tiket</th>
        			</tr>
        		</thead>
            <!--Tampil Data-->
            	<?php

            	// membuat query untuk menampilkan data
            	$query = "SELECT * FROM csm ORDER BY nama";
            	$stmt = $kon->prepare($query);
            	$stmt->execute();
            	$no=0;
            	while($data = $stmt->fetch(PDO::FETCH_ASSOC))
            	{

            	$no++;

            	// menampung data untuk menjadi paramter di qr code generator
					$waktu = substr($data['waktu'], 0,19);
            		$isi_teks = $data['nama']."(".$data['email'].")=>".$waktu;
            		$nama_file = $data['id']."-".$data['nama'];
            		$id = base64_encode($data['csm_id']);

            	// pengecekan apa sudah dibuakan qr dari setiap baris
        			$qrcode = "hasil/qr/".$data['id']."-".$data['nama'].".png";	
        			$tiket = "hasil/tiket/".$data['nama'].".pdf";
            		if (file_exists($qrcode)) {
                        $tb = '<input type="submit" name="pejet" value="Buat QR" class="btn btn-danger disabled">';
                        $tkt = '<a href="phpfpdf/index.php?id='.$id.'" target="_self" class="btn btn-success">Tiket</a>';
            			$qr = "<span class='text-primary'> QR Ada</span>";
                        $ket = "<span class='text-primary'> Tiket Ada</span>";
                        
                    } else {
                        $tb = '<input type="submit" name="pejet" value="Buat QR" class="btn btn-danger">';
                        $tkt = '<a href="phpfpdf/index.php?id='.$id.'" target="_blank" class="btn btn-success" disabled>Tiket</a>';
                        $qr = "<span class='text-danger'> QR Kosong</span>";
                        $ket = "<span class='text-danger'> Tiket Kosong</span>";
            		}

                    if (file_exists($tiket)) {
                        $ket = "<span class='text-primary'> Tiket Ada</span>";
                    } else {
                        $ket = "<span class='text-danger'> Tiket Kosong</span>";
                    }
                    
            	?>
            		<tbody>
            			<tr>
            				<td><?=$no?></td>
            				<td><?=$data['nama']?></td>
            				<td><?=$data['email']?></td>
            				<td>
            					<form method="POST" action="conf/qrgen.php">
            						<input type="hidden" name="isi_teks" value="<?=$isi_teks?>">
            						<input type="hidden" name="nama_file" value="<?=$nama_file?>">
            						<?=$tb?>
            					</form>	
            				</td>
            				<td><?=$qr?></td>
            				<td><?=$tkt?></td>
            				<td><?=$ket?></td>
            			</tr>
            		</tbody>
            	<?php

            	}
            	?>
            <!--end-->
        	</table>
          	<?php
          	}

          	// menampilkan hasil qr dihalaman lain
        	if (isset($_GET['kanal'])) {
        		include_once"hasil/hasil.php";
        	}
        	?>	
            </div>
          </div>
        </div>
      </div>  
      <div class="navbar">
          <p class="">&COPY; <?php echo date("Y"); ?> CClub UNSIQ</p>
      </div>
      </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf-8"> 
                $(document).ready(function(){
                        $(".tip").tooltip();
                });
        </script>
    </body>
</html>


<table class="table table-responsive table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>QR</th>
		</tr>
	</thead>
	            <!--Tampil Data-->
            	<?php

            	$query = "SELECT * FROM csm ORDER BY nama";
            	$stmt = $kon->prepare($query);
            	$stmt->execute();
            	$no=0;
            	while($data = $stmt->fetch(PDO::FETCH_ASSOC))
            	{
            		$dir = "hasil/qr/".$data['id']."-".$data['nama'].".png";	
            		if (file_exists($dir)) {
            			$qr = '<img src="hasil/qr/'.$data['id'].'-'.$data['nama'].'.png" class="img img-responsive" width="30">';
            		} else {
            			$qr = "<span class='text-danger'>Belum</span>";
            		}
	            	
	            	$no++;	
	            	?>
	            		<tbody>
	            			<tr>
	            				<td><?=$no?></td>
	            				<td><?=$data['nama']?></td>
	            				<td><?=$qr?></td>
	            			</tr>
	            		</tbody>
	            	<?php
				}
            	?>
            <!--end-->
</table>
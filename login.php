<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon">

    <title>:: Melbuo Sek ::</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
  	<div class="container">
  		<div class="col-sm-12 col-md-6">
  			<form method="POST" action="conf/cek.php">
  			<table>
  				<tr>
					<th>
						Masuk
					</th>
  				</tr>
  				<tr>
  					<td>
  						<div class="form-group">
  							<input type="text" name="user" placeholder="Username" class="form-control">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td>
  						<div class="form-group">
  							<input type="password" name="sandi" placeholder="Password" class="form-control">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td>
  						<div class="form-group">
  							<input type="submit" name="pejet" value="Login" class="btn btn-primary">
  						</div>
  					</td>
  				</tr>
  			</table>
  			</form>
  		</div>
  	</div>
  	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>


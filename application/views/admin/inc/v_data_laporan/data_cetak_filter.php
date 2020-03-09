<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Filter</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"> 
				<form action="" id="FormLaporan">
					<select name="" id="bulan" class="form-control">
					<option value="0">Semua Data</option>
					<?php foreach ($bulan as $row) { ?>
						<option value="<?php echo $row->id ?> "><?php echo $row->id ?></option>
					<?php } ?>
					</select>
					<button type="submit" class="btn btn-primary">Tampil Data</button>
				</form>
			</div>
			<div class="col-md-9">
				
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
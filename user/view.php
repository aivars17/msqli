<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container-flout">
		<div class="row"><div class="col"><h1>admin</h1></div></div>
		<div class="row">
			<div class="col-7">
				<table  class="table table-bordered ">
					<tr class="table-primary">
						<th>ID</th>
						<th class="text-center">Pavadinimas</th>
						<th class="text-center">Kaina</th>
						<th class="text-center">Apibūdinimas</th>
						<th class="text-center">Spalva</th>
						<th class="text-center">Svoris (g)</th>
						<th class="text-center">Pagaminimo šalis</th>
						<th class="text-center">Trinti</th>
					</tr>
						<?php echo $dbtable;  ?>
					<tr class="table-success" style="font-weight: bold;">
						<td colspan="2" class=" text-right">Bendra suma:</td>
						<td id="total" class='text-center'></td>
					</tr>
				</table>	
			</div>
			<div class="col-5">
				<h2>Administratoriaus panele</h2>
				<form method="POST">
					<div class="row">
						<div class="form-group col">
						<label for="Pavadinimas">Pavadinimas</label>
						<input class="form-control " type="text" name="Name">
					</div>
					<div class="form-group col">
						<label>Kaina</label>
						<input class="form-control " type="value" name="Price">
					</div>
					</div>
					<div class="form-group">
						<label>Apibūdinimas</label>
						<input class="form-control " type="text" name="About">
					</div>
					<div class="row">
						<div class="form-group col">
						<label>Spalva</label>
						<input class="form-control " type="text" name="Color">
					</div>
					<div class="form-group col">
						<label>Svoris</label>
						<input class="form-control " type="text" name="Weight">
					</div>
					</div>
					<div class="form-group">
						<label>Pagaminimo šalis</label>
						<input class="form-control " type="text" name="MadeIn">
					</div>
					<div class="row">
						<div class="form-group">
						<button class="btn col" type="submit" name="submit">Pridėti</button>
					
					</div>
					</div>
					
					
				</form>
			
			</div>
		</div>
	</div>
	
</body>
</html>
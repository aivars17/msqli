<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container-flout">
		<div class="row">
			<div class="col-7">
				<table  class="table table-bordered ">
					<tr class="table-primary">
						<th>ID</th>
						<th class="text-center">Pavadinimas</th>
						<th class="text-center">Kaina</th>
						<th class="text-center">Apibūdinimas</th>
					</tr>
						<?php echo $dbtable;  ?>
					<tr class="table-success" style="font-weight: bold;">
						<td colspan="2" class=" text-right">Bendra suma:</td>
						<td id="total" class='text-center'></td>
					</tr>
				</table>	
			</div>
			<div class="col-5"></div>
		</div>
	</div>
	
</body>
</html>
<?php
	$products = ['sensor','capacitor','1N4148 Diode set of 5','BC337 NPN general purpose transistor pack of 2','Electrolytic Capacitor 25volts pack of 5', 'IC base 14pin pack of 2'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6">
				<form method="post">
					<input type="text" placeholder="Search..." class="form-control" name="searchbox" list="searchbox">
					<datalist id="searchbox"></datalist>
					<button name="submit" class="mt-2 btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<?php

		if (isset($_POST['submit'])) {
			# code...
				?>
				<div>Search Results</div>
				<div>

					<!-- DISPLAY THE BEST RESULTS FROM THE PRODUCTS ARRAY -->
					
					<!-- Basic search should be there like searching capacitor must diplay all the products having capatior is name + best algo that can be applied for optimization -->
					<!-- This case should be solved if I type "capacitor 25V" then it should display "Electrolytic Capacitor 25volts pack of 5" as the result -->

				</div>
				<?php
		}

	?>

</body>
</html>

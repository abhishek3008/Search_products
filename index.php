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

	<div>Search Results</div>
	<div>
		<?php 
			$input = $_POST['searchbox'];

			$results = array_map(function ($item) use ($input) {
			    $input = strtolower($input);
			    $lowerItem = str_replace(" ", "", strtolower($item));

			    if (preg_match("/^.*{$input}.*$/m", $lowerItem)) return $item;
			}, $products);

			$results = array_values(array_filter($results));
		?>

		<ul>
			<?php 
				if (sizeof($results) > 0) {
					foreach ($results as $result) {
						echo "<li>{$result}</li>";
					}
				} else {
					echo "No result found.";
				}
			?>
		</ul>

	</div>

</body>
</html>

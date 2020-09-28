<?php
	include('session.php');
	if (isset($_POST['search'])) {
		$searchInput = $_POST['search'];
		$query = "SELECT city, defence, troops FROM outposts WHERE city LIKE '$searchInput'";
	} else {
		$query = "SELECT city, defence, troops FROM outposts";
	}
	$result = $db->query($query);
	if (!$result) {
		$error = $db->error;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SQL Challenge</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <style>
            h1 {
                color: black;
                font-style: oblique;
                font-weight: 1000;
            }
            h3 {
                color: black;
                font-style: oblique;
                font-weight: 1000;
            }
        </style>
	</head>

	<body>
		<?php if (isset($error)) {
			echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$error.'</div>';
		} ?>

		<div class="container">
			<h1>Welcome</h1>
			<a href="logout.php"><button type="button" class="btn btn-primary">Log Out</button></a>
			<h3>Search Outpost</h3> 
			<form method="post" action="" class="form-search">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="input-group">
							<input type="text" class="form-control" name="search" id="searchInput" placeholder="City" autofocus>
							<span class="input-group-btn">
								<input type="submit" name="submit" value="Search" class="btn btn-primary">
							</span>
						</div>
					</div>
				</div>
			</form>
			<div class="well col-xs-12 col-sm-6">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>City</th>
								<th>Defence</th>
								<th>Troops</th>
							</tr>
						</thead>
						<tbody>
						<?php if ($result && $result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>".$row["city"]."</td><td>".$row["defence"]."</td><td>".$row["troops"]."</td></tr>";
							}
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
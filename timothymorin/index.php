<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">


    <!-- all bootstrap cnd contents -->

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>form</title>
</head>
<body>

	<div class="jumbotron">
		<h2>TEST FORM with mail</h2>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">

				<form action="process.php" method="post">
					<p>Name
						<input type="text" name="name" class="form-control">
					</p>
					<p>State
						<input type="text" name="state" class="form-control">
					</p>
					<p>Email
						<input type="text" name="mail" class="form-control">
					</p>
					<p>password
						<input type="text" name="pwd" class="form-control">
					</p>
					<button name="btn-send" class="form-control btn btn-info">SUBMIT</button> <br>
					
				</form>

			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
    
</body>
</html>
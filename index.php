<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="user_data.php" method="POST">
					<h4>REGISTRATION</h4>
					<label for="name" class="form-group">
						<input type="text" name="name" class="form-control"  required>
						<span>Name</span>
						<span class="border"></span>
					</label>
					<label for="email" class="form-group">
						<input type="email" name="email" class="form-control"  required>
						<span>Email</span>
						<span class="border"></span>
					</label>
					<label for="dob" class="form-group">Date of Birth
						<input type="date" name="dob" class="form-control"  required>
					</label>
					<label for="gender" class="form-group">Gender
						<select name="gender">
							<option selected>--select--</option>
							<option>Male</option>
							<option>Female</option>
							<option>Prefer not to say</option>
						</select>
					</label>
					<label for="country" class="form-group">Country
						<select name="country">
							<option selected>--select--</option>
							<option>Nigeria</option>
							<option>Ghana</option>
							<option>South-Africa</option>
						</select>
					</label><br>
					<button type="submit">Submit</button><br>
				</form>
			</div>
		</div>
		
	</body>
</html>
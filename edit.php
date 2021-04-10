<?php

    include('conn.php');
    $id = $_GET['id'];
    $query = mysqli_query($conn, "select * from `users` where id='$id'");
    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mysql Commands</title>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Edit</h2>
		</div>

		<div class="w-50 m-auto">
        <form method="POST" action="update.php?id=<?php echo $id; ?>">
				<div class="form-group">
					<label>Username</label>
					<input type="text" value="<?php echo $row['user']; ?>" name="user" class="form-control">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" value="<?php echo $row['email']; ?>" name="mail" class="form-control">
				</div>

				<div class="form-group">
					<label>Mobile</label>
					<input type="text" value="<?php echo $row['mobile']; ?>" name="num" class="form-control">
				</div>

				<button type="submit" class="btn btn-success" name="submit">Submit</button>
                <button class="btn btn-warning"><a href="index.php">Back</a></button>
			</form>
		</div>
	</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>		
</html>

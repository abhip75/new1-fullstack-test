<html>
<head>
	<title>My Page</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  
</head>
<body>

	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Contact Info</h2>
		</div>

		<div class="w-50 m-auto">
			<form action="add.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="mail" class="form-control">
				</div>

				<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="num" class="form-control">
				</div>

				<button type="submit" class="btn btn-success" name="add">Submit</button>
			</form>
		</div>
	</section>

	
    <div class="w-50 m-auto">
        <table border="1">
            <thead>
                <th>Username</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
             </thead>
            <tbody>
                <?php 
                    include('conn.php');
                    $query = mysqli_query($conn,"select * from users");
                    while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $row['user']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td>
                                <button class="btn-danger btn"><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></button>
                                <button class="btn btn-warning"><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></button>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>		
</html>
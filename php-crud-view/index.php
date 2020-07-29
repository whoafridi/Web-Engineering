<?php  include('con.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Basic-php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<form method="post" action="con.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
        <div class="input-group">
			<label>email</label>
			<input type="text" name="email" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
				<button class="btn" type="submit" name="save" >Submit</button>
		</div>
	</form>
</body>

<table>
	<thead>
		<tr>
			<th>Name</th>
            <th>email</th>
			<th>Address</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
		</tr>
	<?php } ?>
</table>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiple File Upload dengan PHP | Syntax-x.blogspot.com</title>
</head>
<body>
	<?php
		include 'proses.php';
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
		<input type="submit" value="Upload!">
	</form>
</body>
</html>
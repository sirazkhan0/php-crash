<!DOCTYPE html>
<html>

<head>
	<title>$_FILES</title>
</head>

<body> 
	<form method="post" enctype="multipart/form-data">
		<fieldset style="width: 20rem;">
			<legend>$_FILES</legend>
			<label>File Upload</label>
			<input type="file" name="files">
			<input type="submit" name="submit">
			<hr>
			<?php
			echo "<pre>";
			print_r($_FILES);
			?>
		</fieldset>
	</form>
</body>

</html>
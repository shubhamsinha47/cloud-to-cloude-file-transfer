<?php
	if (isset($_POST['submit'])) {
		$url = $_POST['file_url'];
		file_put_contents("Tmpfile.zip", fopen($url, 'r'));
		echo "DONE";
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ISK | File DownLoader</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		#layout {
			margin-top: 150px;
		}
	</style>
</head>
<body>
	<div class="container" id="layout">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<form method="POST">
					<div class="form-group">
						<label for="file_url">Zip File URL.</label>
						<input type="url" name="file_url" class="form-control" placeholder="Enter the zip url.." required="true">
						<small id="file_helper" class="form-text text-muted">Make sure you enter only zip file URL.</small>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Multi form file uploader using Jquery, PHP, Ajax, and Bootstrap - HackandPhp programming blog</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/upload.js" type="text/javascript"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">

	<style>
		input[type=file] {
			float: left;
		}
	</style>

</head>

<body>

	<div class="container">

		<h3>Multi form file uploader using Jquery, PHP, Ajax, and Bootstrap - HackandPhp programming blog </h3>
		<hr>

		<div class="row">
			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<ul class="list-inline">
					<li><button class="btn btn-success addmore" type="button"><i class="fa fa-plus"></i> Add More</button></li>
					<li> <button class="btn btn-danger delete" type="button"><i class="fa fa-trash"></i> Delete</button></li>
					<li><button class="btn btn-sm btn-primary upload-all"><i class="fa fa-upload"></i> Upload All</button></li>
					<li><button class="btn btn-sm btn-danger cancel-all"><i class="fa fa-ban"></i> Cancel All</button></li>
				</ul>
			</div>
		</div>

		<table class="table table-bordered table-hover" id="table_auto">
			<tr id="row_0">
				<td><input class="case" type="checkbox" /></td>
				<td>
					<form action="#">
						<div class="col-sm-3">
							<input id="avatar" class="file-loading" type="file" name="image">
						</div>
						<div class="col-sm-5">
							<div class="progress progress-striped active">
								<div class="progress-bar" style="width:0%"></div>
							</div>
						</div>
						<div class="col-sm-4">
							<button class="btn btn-sm btn-info upload" type="submit"><i class="fa fa-upload"></i> Upload</button>
							<button type="button" class="btn btn-sm btn-danger cancel"><i class="fa fa-ban"></i> Cancel</button></div>
					</form>
				</td>
				<td></td>
				<td></td>
			</tr>
		</table>

		<hr>

	</div>
</body>

</html>
<?php
if (isset($_POST['upload'])){
$filename = $_FILES['image']['tmp_name'];
$destination = "uploaded_img/".$_FILES['image']['name'];
$size = $_FILES['image']['size'];

if($size >5000000){
	echo "<div class='alert alert-danger'>images is too large than 5mb</div>";
}else{
	$end=move_uploaded_file($filename, $destination);

	if($end){
	 echo "<div class='alert alert-success'>image uploaded successfully</div> <p><img src='".$destination."'style='height:100px; width:100px; border-radius:10px;'></p>";	
	}else{
		echo "<div class='alert alert-danger'>error uploading</div>";
		header('location:realproject.php');
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>image | uploaded</title>
	<link rel="stylesheet" type="text/css" href="b5/css/bootstrap.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h3 class="text-center border-bottom">image uploaded</h3>
				<form method="post" enctype="multipart/form-data">
					<input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/jfif" class="form-control">
					<button type="submit" class="btn-primary" name="upload">upload</button>
				</form>
			</div>
			<div class="col-md-3"></div>

		</div>
	</div>

</body>
</html>
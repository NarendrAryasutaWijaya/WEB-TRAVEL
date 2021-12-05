<!DOCTYPE html>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style4.css">
		<title></title>
	</head>
	<body>
		<h3 style="text-align:center;margin-top:5%;magin-right:40%;color:white;">UPLOAD PROFILE</h3>
    
		<div class="formp">
		<form action="proses_upload_profile.php" method="post" enctype="multipart/form-data">
			NAMA LENGKAP :
      <br>
			<input type="text" name="nama_toko" value="" class="form-control">
			<br>

			TELEPON :
			<input type="text" name="kategori" value="" class="form-control">
			<br>
			
			FOTO KTP:
			
			<!-- mulai upload file -->
			<input type="file" name="file">
			<!-- akhir upload file -->
			
			<input type="submit" name="simpan" value="UPLOAD" class="btn btn-primary"style="background-color:orange">
		</form>
      </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous">
		</script>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		 
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	     <link rel="stylesheet" type="text/css" href="style1.css">
		 <title></title>

	</head>
	<body>
	<div class="tampilp">
		 <h3 style="text-align:center;">PROFILE</h3>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th></th>
		 <th></th>
		 <th></th>
		 <th></th>
		 <th></th>
		 </tr>
		 </thead>
</tbody>
</div> 
    </div>
		 <?php
		 include "koneksi.php";
		$qry_toko=mysqli_query($conn,"select * from toko");
		 $no=0;
		 while($data_toko=mysqli_fetch_array($qry_toko)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_toko['nama_toko']?></td>
		<td><?=$data_toko['kategori']?></td>
		
		<!-- mulai upload file -->
		<td><img src="<?php echo "file/".$data_toko['foto_toko']; ?>"></td>
		<!-- akhir upload file -->
		
		<td><a
		href="ubah_siswa.php?id_siswa=<?=$data_toko['id_toko']?>"
		class="btn btn-success">Ubah</a> | <a
		href="hapus.php?id_siswa=<?=$data_toko['id_toko']?>"
		onclick="return confirm('Apakah anda yakin menghapus data 
		ini?')" class="btn btn-danger">Hapus</a></td>
		 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
		 </table>
		 <script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
		dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	</body>
</html>
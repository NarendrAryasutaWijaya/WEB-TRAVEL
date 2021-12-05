<?php
	if($_POST){
		$nama_toko=$_POST['nama_toko'];
		$kategori=$_POST['kategori'];
		
		//mulai upload file
		$nama = $_FILES['file']['name'];
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];
		//akhir upload file
		
		if(empty($nama_toko)){
			echo "<script>alert('nama toko tidak boleh kosong');location.href='upload_profile.php';</script>";
		} elseif(empty($kategori)){
			echo "<script>alert('kategori tidak boleh kosong');location.href='upload_profile.php';</script>";
		} else {
			include "koneksi.php";
			
			//mulai upload file
			move_uploaded_file($file_tmp, 'file/'.$nama);
			$insert=mysqli_query($conn,"insert into toko (nama_toko,kategori, foto_toko) value ('".$nama_toko."','".$kategori."', '".$nama."')");
			//akhir upload file
			
			if($insert){
				echo "<script>alert('Sukses mengupload profile');location.href='upload_profile.php';</script>";
			} else {
				echo "<script>alert('Gagal mengupload profile');location.href='upload_profile.php';</script>";
			// echo "insert into toko (nama_toko,kategori) value ('".$nama_toko."','".$kategori."')";
			}
		}
		
		// $x = explode('.', $nama);
		// $ekstensi = strtolower(end($x));
		// $ekstensi_diperbolehkan	= array('png','jpg');

			// if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				// if($ukuran < 1044070){
					// move_uploaded_file($file_tmp, 'file/'.$nama);
					// $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
					// if($query){
						// echo 'FILE BERHASIL DI UPLOAD';
					// }else{
						// echo 'GAGAL MENGUPLOAD GAMBAR';
					// }
				// }else{
					// echo 'UKURAN FILE TERLALU BESAR';
				// }
			// }else{
				// echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			// }
		
	}
?>
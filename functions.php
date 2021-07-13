<?php
$con = mysqli_connect("localhost","root","","bmt-amanah");





function daftar($data) {
	global $con;

	$username=htmlspecialchars($data["username"]);
	$password=mysqli_real_escape_string($con, $data["password"]);
	$nama=htmlspecialchars($data["nama"]);
	$nama_ibu=htmlspecialchars($data["nama_ibu"]);
	$jk=htmlspecialchars($data["jk"]);
	$alamat=htmlspecialchars($data["alamat"]);
	$email=htmlspecialchars($data["email"]);
	$no_ktp=htmlspecialchars($data["no_ktp"]);
	$no_hp=htmlspecialchars($data["no_hp"]);


	//cek username
	$result=mysqli_query($con, "SELECT username FROM tb_profil WHERE username='$username'"); 
	if (mysqli_fetch_assoc($result)) {
		echo " 
			<script>
	          alert('username sudah digunakan');
	        </script>
	        ";
	    return false;
	}

	//enkripsi
	$password = password_hash($password, PASSWORD_DEFAULT);

	//upload gambar
	$foto_ktp = upload_ktp();
	if(!$foto_ktp){
		return false;
	}


	$foto_transfer=upload_transfer();
	if (!$foto_transfer) {
		return false;
	}

	$foto_profil=upload_profil();
	if (!$foto_profil) {
		return false;
	}


	$sql="INSERT INTO tb_profil VALUES
    ('','$username','$password','$nama','$nama_ibu','$jk','$alamat','','$email','$no_ktp','$no_hp','$foto_ktp','$foto_transfer','$foto_profil')";

  	mysqli_query($con,$sql);


  	return mysqli_affected_rows($con);
}

function upload_ktp(){
	$namaFile = $_FILES['foto_ktp']['name'];
	$ukuranFile = $_FILES['foto_ktp']['size'];
	$error = $_FILES['foto_ktp']['error'];
	$tmpName = $_FILES['foto_ktp']['tmp_name'];

	//cek gambar
	if ($error === 4) {
		echo " 
			<script>
	          alert('Silahkan upload gambar terlebih dahulu');
	        </script>
	        ";
	    return false;
	}
	//cek format gambar
	$ekstensigambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensigambarValid)) {
		echo " 
			<script>
	          alert('format gambar harus jpg, jpeg dan png');
	        </script>
	        ";
	    return false;
	}
	//cek ukuran
	if ($ukuranFile > 1000000) {
		echo " 
			<script>
	          alert('ukuran gambar maks 1 MB');
	        </script>
	        ";
	    return false;
	}
	//simpan gambar
	//generate nama file baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/images/foto_ktp/' . $namaFileBaru);

	return $namaFileBaru;


}

function upload_transfer(){
	$namaFile = $_FILES['foto_transfer']['name'];
	$ukuranFile = $_FILES['foto_transfer']['size'];
	$error = $_FILES['foto_transfer']['error'];
	$tmpName = $_FILES['foto_transfer']['tmp_name'];

	//cek gambar
	if ($error === 4) {
		echo " 
			<script>
	          alert('Silahkan upload gambar terlebih dahulu');
	        </script>
	        ";
	    return false;
	}
	//cek format gambar
	$ekstensigambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensigambarValid)) {
		echo " 
			<script>
	          alert('format gambar harus jpg, jpeg dan png');
	        </script>
	        ";
	    return false;
	}
	//cek ukuran
	if ($ukuranFile > 1000000) {
		echo " 
			<script>
	          alert('ukuran gambar maks 1 MB');
	        </script>
	        ";
	    return false;
	}
	//simpan gambar
	//generate nama file baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/images/foto_transfer/' . $namaFileBaru);

	return $namaFileBaru;


}

function upload_profil(){
	$namaFile = $_FILES['foto_profil']['name'];
	$ukuranFile = $_FILES['foto_profil']['size'];
	$error = $_FILES['foto_profil']['error'];
	$tmpName = $_FILES['foto_profil']['tmp_name'];

	//cek gambar
	if ($error === 4) {
		echo " 
			<script>
	          alert('Silahkan upload gambar terlebih dahulu');
	        </script>
	        ";
	    return false;
	}
	//cek format gambar
	$ekstensigambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensigambarValid)) {
		echo " 
			<script>
	          alert('format gambar harus jpg, jpeg dan png');
	        </script>
	        ";
	    return false;
	}
	//cek ukuran
	if ($ukuranFile > 1000000) {
		echo " 
			<script>
	          alert('ukuran gambar maks 1 MB');
	        </script>
	        ";
	    return false;
	}
	//simpan gambar
	//generate nama file baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/images/foto_profil/' . $namaFileBaru);

	return $namaFileBaru;


}

?>
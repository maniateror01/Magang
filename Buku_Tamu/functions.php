<?php 
//koneksi ke database butuh function yitu mysqli_connect
$conn = mysqli_connect("localhost", "root", "", "buku_tamu");


function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["re-password"]);

	// cek username sudah ada ata belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('coba nama lain');
			  </script>";
		return false;
	}

	// cek konfirmasi password 
	if ($password !== $password2) {
		echo "<script>
		alert('konfirmasi password anda tidak sama');
		</script>";

		return false;
	} else {
		echo mysqli_error($conn);
	}

	// enkripsi password 
	$password = password_hash($password, PASSWORD_DEFAULT);

	// cara menambahkan ke database
	mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);



	
	
}


 ?>




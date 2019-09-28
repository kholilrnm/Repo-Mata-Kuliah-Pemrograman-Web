setTimeout(function() { 
	var alertt = confirm("Data ini sudah jadi, apakah ingin mengganti dari awal/kosong");
	if (alertt == true) {
		window.location.href = "halaman-kedua.php"
	}
	else {
		// kosong
	}

}, 3100);
<?php

session_start();

require '../functions.php';

$id = $_POST['id_kamera'];

if (isset($_POST["ulasan"])) {

	if (tambah_ulasan($_POST) > 0) {
		$_SESSION['ulasan'] = true;
		echo "
			 <script>
				document.location.href = './detail.php?id=$id';
			 </script>
			 ";
	} else {
		$_SESSION['ulasan'] = false;
		echo "
			 <script>
				document.location.href = './detail.php?id=$id';
			 </script>
			 ";
	}
}

<?php

session_start();

if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

require '../functions.php';

$id = $_POST['id_kamera'];

if (isset($_POST["submit"])) {

    if (tambah_ulasan($_POST) > 0) {
        echo "
			 <script>
				alert('data berhasil ditambahkan');
				document.location.href = './detail.php?id=$id';
			 </script>
			 ";
    } else {
        echo "
			 <script>
				alert('data gagal ditambahkan');
				document.location.href = './detail.php?id=$id';
			 </script>
			 ";
    }
}

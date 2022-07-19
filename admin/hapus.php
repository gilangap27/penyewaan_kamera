<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
  header("Location: ./index.php");
}

require '../functions.php';

//get id yg ingin dihapus
$id = $_GET['id'];

//jika berhasil hapus, ada alert
if (delete_data($id, 'product') > 0) {
  echo
  "<script>
        window.location = './product.php';
    </script>";
} else {
  echo
  "<script>
        window.location = './product.php';
    </script>";
}

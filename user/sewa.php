<?php
session_start();
require '../functions.php';

if (tambah_pembayaran($_POST) > 0) {
    $_SESSION['pembayaran'] = true;
    echo "<script>
        document.location.href = './product.php';
    </script>";
} else {
    $_SESSION['pembayaran'] = false;
    echo "<script>
        document.location.href = './product.php';
    </script>";
}

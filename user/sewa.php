<?php
require '../functions.php';

if (tambah_pembayaran($_POST) > 0) {
    echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = './product.php';
    </script>";
} else {
    echo "data gagal ditambahkan";
}


<?php
session_start();

require '../functions.php';

$id = $_GET['id'];

$pembayaran = query("SELECT * FROM pembayaran WHERE id = $id")[0];

if (cancel_booking($pembayaran) > 0) {
    $_SESSION['canceled'] = true;
    echo
    "<script>
          window.location = './booking_detail.php?id=$id';
      </script>";
} else {
    echo
    "<script>
          window.location = './booking_detail.php?id=$id';
      </script>";
}

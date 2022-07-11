<?php

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'penyewaan_kamera');
}

function query($data)
{
    $con = koneksi();
    $result = mysqli_query($con, $data);
    $baris = [];
    while ($a = mysqli_fetch_assoc($result)) {
        $baris[] = $a;
    }
    return $baris;
}

function tambahData($data)
{
    $con = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $kelengkapan = htmlspecialchars($data['kelengkapan']);
    $spek = htmlspecialchars($data['spek']);
    $stok =  htmlspecialchars($data['stok']);
    $harga =  htmlspecialchars($data['harga']);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO product VALUES
            (null,
            '$gambar',
            '$nama',
            '$brand',
            '$deskripsi',
            '$kelengkapan',
            '$spek',
            '$stok'
            '$harga')";
    mysqli_query($con, $query);

    echo mysqli_error($con);

    return mysqli_affected_rows($con);
    // mysqli_affected_rows($con) = angka (0: gak ada data masuk, 1:ada data masuk)
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tempName = $_FILES['gambar']['tmp_name'];

    //cek ukuran gambar jika besar
    if ($ukuranFile > 500000) {
        echo  "<script>
                alert('ukuran gambar besar');
              </script>";
        return false;
    }

    $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // upload gambar
    if (move_uploaded_file($tempName, '../img/product/' . $namaFileBaru)) {
        echo "Uploaded";
    } else {
        echo "File not uploaded";
        return false;
    }

    return $namaFileBaru;
}

function deleteData($id)
{
    $con = koneksi();
    $query = "DELETE FROM product where id = $id";
    mysqli_query($con, $query) or die(mysqli_error($con));

    return mysqli_affected_rows($con);
}

function ubahData($data)
{
    $con = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $kelengkapan = htmlspecialchars($data['kelengkapan']);
    $spek = htmlspecialchars($data['spek']);
    $harga =  htmlspecialchars($data['harga']);
    $stok =  htmlspecialchars($data['stok']);
    $gambarAwal = htmlspecialchars($data["gambarAwal"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarAwal;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE product SET
                gambar = '$gambar',
                nama = '$nama',
                brand = '$brand',
                deskripsi = '$deskripsi',
                kelengkapan = '$kelengkapan',
                spek = '$spek',
                stok = '$stok',
                harga = '$harga'
               WHERE id = $id
            ";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

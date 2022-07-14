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

function tambah_product($data)
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

function ubah_product($data)
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

function delete_data($id, $table)
{
    $con = koneksi();
    $query = "DELETE FROM $table where id = $id";
    mysqli_query($con, $query) or die(mysqli_error($con));

    return mysqli_affected_rows($con);
}

function tambah_pembayaran($data)
{
    $con = koneksi();

    $id_kamera = htmlspecialchars($data['id_kamera']);
    $lama_sewa = htmlspecialchars($data['lama_sewa']);
    $email = htmlspecialchars($data['email']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);

    $detailKamera = query("SELECT * FROM product WHERE id = $id_kamera")[0];

    $total = $lama_sewa * $detailKamera['harga'];
    $tanggal_sewa = strtotime($data['tanggal_sewa']);
    $tanggal_sewa = date('Y-m-d', $tanggal_sewa);
    $tanggal_kembali = date('Y-m-d', strtotime($tanggal_sewa . '+' . $lama_sewa . ' days'));

    $status = "Pending";

    $query = "INSERT INTO pembayaran VALUES
            (null,
            '$id_kamera',
            '$email',
            '$nama',
            '$alamat',
            '$total',
            '$lama_sewa',
            '$tanggal_sewa',
            '$tanggal_kembali',
            '$status')";

    mysqli_query($con, $query);

    echo mysqli_error($con);

    return mysqli_affected_rows($con);
    // mysqli_affected_rows($con) = angka (0: gak ada data masuk, 1:ada data masuk)
}

function register($data)
{
    $con = koneksi();

    $nama = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);
    $repassword = htmlspecialchars($data['repassword']);
    $gambar = 'Profile.jpg';

    // Cek jika password dan konfirmasi password sama atau tidak
    if ($password !== $repassword) {
        return false;
    }

    // Enkripsi Password
    $password = md5($password);

    $query = "INSERT INTO user VALUES (null,'$nama','$email','$password', '$gambar')";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function cek_login($data)
{
    $con = koneksi();

    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);

    // Enkripsi Password
    $password = md5($password);

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    // Cek apakah email dan password ada di database
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        $_SESSION['id_user'] = $data['id'];
        return true;
    }
    return false;
}

function cari($keyword)
{
    return query("SELECT * FROM product WHERE nama LIKE '%$keyword%'");
}

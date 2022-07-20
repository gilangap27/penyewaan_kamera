<?php

$ROOT = 'http://localhost/penyewaan_kamera/';

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
    $gambar = upload_product();
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
            '$stok',
            '$harga')";
    mysqli_query($con, $query);

    echo mysqli_error($con);

    return mysqli_affected_rows($con);
    // mysqli_affected_rows($con) = angka (0: gak ada data masuk, 1:ada data masuk)
}

function upload_product()
{
    $namaFile = $_FILES['gambar']['name'];
    $tempName = $_FILES['gambar']['tmp_name'];

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
        $gambar = upload_product();
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
    mysqli_query($con, $query);

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
    $dp = htmlspecialchars($data['dp']);
    $metode = htmlspecialchars($data['metode']);

    $detailKamera = query("SELECT * FROM product WHERE id = $id_kamera")[0];

    // Mengurangi Stok Kamera
    $stok = $detailKamera['stok'] - 1;
    mysqli_query($con, "UPDATE product SET stok = $stok WHERE id = $id_kamera");

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
            '$dp',
            '$metode',
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

function login_admin($data)
{
    $con = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // Enkripsi Password
    $password = md5($password);

    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $query);

    // Cek apakah email dan password ada di database
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        $_SESSION['id_admin'] = $data['id'];
        return true;
    }
    return false;
}

function tambah_ulasan($data)
{
    $con = koneksi();

    $id_kamera = htmlspecialchars($data['id_kamera']);
    $id_user = htmlspecialchars($data['id_user']);
    $rating = htmlspecialchars($data['rating']);
    $pesan = htmlspecialchars($data['pesan']);

    $query = "INSERT INTO ulasan VALUES
            (null,
            '$id_kamera',
            '$id_user',
            '$rating',
            '$pesan')";
    mysqli_query($con, $query);

    echo mysqli_error($con);

    return mysqli_affected_rows($con);
    // mysqli_affected_rows($con) = angka (0: gak ada data masuk, 1:ada data masuk)
}

function ubah_profile($data)
{
    $con = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $noHP = htmlspecialchars($data['noHP']);
    $alamat =  htmlspecialchars($data['alamat']);
    $gambarAwal = $data["gambarAwal"];

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarAwal;
    } else {
        $gambar = upload_profile();
    }

    $query = "UPDATE user SET
                gambar = '$gambar',
                nama = '$nama',
                email = '$email',
                noHP = '$noHP',
                alamat = '$alamat'
               WHERE id = $id
            ";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function upload_profile()
{
    $namaFile = $_FILES['gambar']['name'];
    $tempName = $_FILES['gambar']['tmp_name'];

    $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // upload gambar
    if (move_uploaded_file($tempName, '../img/user/' . $namaFileBaru)) {
        echo "Uploaded";
    } else {
        echo "File not uploaded";
        return false;
    }

    return $namaFileBaru;
}

function detail_pembayaran($data)
{
    $con = koneksi();

    $id = $data["id"];
    $bayar = htmlspecialchars($data['bayar']);

    $pembayaran = query("SELECT * FROM pembayaran WHERE id = $id")[0];

    $query = "UPDATE pembayaran SET status = 'Complete' WHERE id = $id";

    $total_bayar = $pembayaran['total'] - $pembayaran['dp'];

    if ($bayar == $total_bayar) {
        mysqli_query($con, $query);
    } else {
        return 0;
    }

    return mysqli_affected_rows($con);
}

<?php
session_start();
include "dbcon.php";

// Proses Hapus data Firebase
if (isset($_POST['hapus_data'])) 
{
    $id = $_POST['id_key'];
    // echo $id;
    $ref_table = "Data Lahan/".$id;
    $hapusdata = $database->getReference($ref_table)->remove();
    if ($hapusdata) {
        $_SESSION['status'] = "data berhasil di hapus";
        header("location:index.php");
    }else{
        $_SESSION['status'] = "data gagal di dihapus";
        header("location:index.php");
    }
}

// Proses Update/Edit Data firebase
if(isset($_POST['update_data']))
{
    $id = $_POST['id'];
    $pemilik_lahan = $_POST['Pemilik_Lahan'];
    $categori = $_POST['Catagori_Lahan'];
    $deskripsi = $_POST['Deskripsi'];
    $image = $_POST['Image'];
    $kordinat = $_POST['Kordinat'];
    $lokasi = $_POST['Lokasi'];
    $tanggal = $_POST['Tanggal'];
    $waktu = $_POST['Waktu'];   

    $updatedata = [
        'pemilik_lahan' => $pemilk_lahan,
        'catagoti_lahan' => $categori,
        'deskripsi' => $deskripsi,
        'image' => $image,
        'kordinat' => $kordinat,
        'lokasi' => $lokasi,
        'tanggal' => $tanggal,
        'waktu' => $waktu
    ];
    $ref_table = "Data Lahan/".$id;
    $queryupdatae = $database->getReference($ref_table)->update($updatedata);

    if ($queryupdatae) {
        $_SESSION['status'] = "data berhasil di Update";
        header("location:index.php");
    }else{
        $_SESSION['status'] = "data gagal di update";
        header("location:index.php");
    }
   
}

// Proses Input data Firebase
if (isset($_POST['submit'])) 
{
    $categori = $_POST['Catagori_Lahan'];
    $deskripsi = $_POST['Deskripsi'];
    $image = $_POST['Image'];
    $kordinat = $_POST['Kordinat'];
    $lokasi = $_POST['Lokasi'];
    $pemilik_lahan = $_POST['Pemilik_Lahan'];
    $tanggal = $_POST['Tanggal'];
    $waktu = $_POST['Waktu'];   

    $postData = [
        'Catagori_Lahan' => $categori,
        'Deskripsi' => $deskripsi,
        'Image' => $image,
        'kordinat' => $kordinat,
        'Lokasi' => $lokasi,
        'Pemilik_Lahan' => $pemilk_lahan,
        'Tanggal' => $tanggal,
        'Waktu' => $waktu
    ];

    $ref_table = "Data Lahan";
    $postRef = $database->getReference($ref_table)->push($postData);

    if ($postRef) {
        $_SESSION['status'] = "data berhasil di simpan";
        header("location:add.php");
    }else{
        $_SESSION['status'] = "data gagal di simpan";
        header("location:index.php");
    }

}
?>
<?php
include 'koneksi.php';

  $id = $_POST['id'];
  $nama   = $_POST['nama'];
  $email     = $_POST['email'];
  $notelp    = $_POST['notelp'];
  $passwordd    = $_POST['passwordd'];
  $pesan    = $_POST['pesan'];

  $gambar_produk = $_FILES['gambar_produk']['name'];
  if($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg'); 
    $x = explode('.', $gambar_produk);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'img/'.$nama_gambar_baru); 
                    $query  = "UPDATE message SET nama = '$nama', email = '$email', notelp = '$notelp', passwordd = '$passwordd', pesan = '$pesan', gambar_produk = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
              }
    } else {
      $query  = "UPDATE registrasi SET nama = '$nama', email = '$email', notelp = '$notelp', passwordd = '$passwordd', pesan = '$pesan'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }
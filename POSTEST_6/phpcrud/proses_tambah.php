<?php
include 'koneksi.php';
  $nama   = $_POST['nama'];
  $email  = $_POST['email'];
  $notelp = $_POST['notelp'];
  $passwordd = $_POST['passwordd'];
  $pesan  = $_POST['pesan'];
  $gambar_ktp = $_FILES['gambar_ktp']['name'];

if($gambar_ktp != "") {
  $ekstensi_diperbolehkan = array('png','jpg', 'jpeg'); 
  $x = explode('.', $gambar_ktp); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_ktp']['tmp_name'];   
  $angka_acak = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_ktp;
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
    move_uploaded_file($file_tmp, 'img/'.$nama_gambar_baru);
      $query = "INSERT INTO registrasi (nama, email, notelp, passwordd, pesan, gambar_ktp) VALUES ('$nama', '$email','$notelp','$passwordd',  '$pesan', '$nama_gambar_baru')";
      $result = mysqli_query($koneksi, $query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                  " - ".mysqli_error($koneksi));
        } else{
          echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
        }

        } else{     
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpeg, jpg atau png.');window.location='tambah.php';</script>";
        }
} else {
  $query = "INSERT INTO registrasi (nama, email, notelp, passwordd, pesan, gambar) VALUES ('$nama', '$email','$notelp','$passwordd' ,'$pesan', null)";
  $result = mysqli_query($koneksi, $query);           
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
  } else{
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }
}
<?php
include 'koneksi.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM registrasi WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }

    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">
    <title>CRUD</title>

</head>

<body>
    <div class="center">
        <h1>Edit Produk</h1>
        <div class="link">
            <a href="index.php">Kembali</a>
        </div>
    </div>
    <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
        <section class="base">
            <input name="id" value="<?php echo $data['id']; ?>" hidden />
            <div>
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $data['email']; ?>" />
            </div>
            <div>
                <label>No. telp</label>
                <input type="text" name="notelp" required="" value="<?php echo $data['notelp']; ?>" />
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="passwordd" required="" value="<?php echo $data['passwordd']; ?>" />
            </div>
            <div>
                <label>Pesan</label>
                <input type="text" name="pesan" required="" value="<?php echo $data['pesan']; ?>" />
            </div>
            <div>
                <label>Gambar Produk</label>
                <img src="img/<?php echo $data['gambar_ktp']; ?>"
                    style="width: 120px;float: left;margin-bottom: 5px;">
                <input type="file" name="gambar_ktp" />
                <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
            </div>
            <div>
                <button type="submit">Simpan Perubahan</button>
            </div>
        </section>
    </form>
</body>

</html>
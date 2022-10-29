<?php
  include('koneksi.php'); 
  
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
    <title>CRUD </title>

</head>

<body>
    <nav class="navtop">
    	<div>
    		<h1>Kuliner Nusantara</h1>
            <a href="../index.html"><i class="fas fa-home"></i>Home</a>
    	</div>
    </nav>
    <div class="center">
        <h1>Buat Akun</h1>
    </div>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Nama</label>
                <input type="text" name="nama" autofocus="" required="" />
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" />
            </div>
            <div>
                <label>No. Telpon</label>
                <input type="number" name="notelp" required="" />
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="passwordd" required="" />
            </div>
            <div>
                <label>Pesan</label>
                <input type="text" name="pesan" required="" />
            </div>
            <div>
                <label>Foto KTP</label>
                <input type="file" name="gambar_ktp" required="" />
            </div>
            <div>
                <button class="kirim" type="submit">Kirim</button>
        </section>
    </form>
</body>

</html>
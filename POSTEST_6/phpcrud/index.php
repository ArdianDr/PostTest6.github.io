<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>

<!DOCTYPE html>
<html lang="en">

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
    <nav class="navtop">
    	<div>
    		<h1>Kuliner Nusantara</h1>
            <a href="../index.html"><i class="fas fa-home"></i>Home</a>
    	</div>
    </nav>
    <div class="center">
        <h1>Tampilan</h1>
        <div class="link">
            <a href="tambah.php">+ &nbsp; Tambah</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Password</th>
                <th>Pesan</th>
                <th>Gambar</th>
                <th>Terakhir Dilihat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
      $query = "SELECT * FROM registrasi ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['notelp']; ?></td>
                <td><?php echo $row['passwordd']; ?></td>
                <td><?php echo $row['pesan']; ?></td>
                <td style="text-align: center">
                    <img src="img/<?php echo $row['gambar_ktp']; ?>" style="width: 120px" />
                </td>
                <td>
                    <?php date_default_timezone_set("Asia/Makassar"); echo  date("Y.m.d"). " " . "<br>"
            . date("h:i:sa"); ?>
                </td>
                <td>
                    <a class="blue" href="edit_produk.php?id=<?php echo $row['id']; ?>"><i
                            class="fa-solid fa-pen-to-square"></i> EDIT</a> |
                    <a class="red" href="proses_hapus.php?id=<?php echo $row['id']; ?>"
                        onclick="return confirm('Anda yakin akan menghapus data ini?')"><i
                            class="fa-sharp fa-solid fa-trash"> Delete</i></a>
                </td>
            </tr>

            <?php
        $no++; 
      }
      ?>
        </tbody>
    </table>

</body>

</html>
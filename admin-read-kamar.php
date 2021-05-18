<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>DATA KAMAR</title>
	<link rel="stylesheet" type="text/css" href="profil/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="card mt-3">
        <div class="card-header bg-success text-white">DATA KAMAR</div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>No Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Harga</th>
                    <th>ID Pegawai</th>
                    <th colspan = "3">Aksi</th>
                </tr>
                <?php
                    $no = 1;
                    $ambildata = mysqli_query($koneksi, "SELECT * FROM kamar");
                    
                    while($tampil = mysqli_fetch_array($ambildata)){
                        echo "
                        <tr>
                            <td>$no</td>
                            <td>$tampil[no_kamar]</td>
                            <td>$tampil[tipe_kamar]</td>
                            <td>$tampil[harga]</td>
                            <td>$tampil[id_pegawai]</td>
                            <td><a href='?kode=$tampil[no_kamar]'> Hapus </a></td>
                            <td><a href='admin-ubah-kamar.php?kode=$tampil[no_kamar]'> Ubah </a></td>
                            <td><a href='admin-tambah-kamar.php'> Tambah </a></td>                
                        <tr>";
                        
                        $no++;
                    }

                ?>
            </table>
        </div>
    </div>
<!-- Akhir Card Tabel -->
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<br>
<div class="button1">
    <a href="admin-profil.php">
        <button style="margin-left: 75%; margin-bottom:30%">Kembali</button>
    </a>
    <a href="admin-logout.php">
        <button>Log Out</button>
    </a>
</div>
</body>
</html>

<?php
    if(isset($_GET['kode'])){
        mysqli_query($koneksi,"DELETE FROM kamar
        WHERE no_kamar = '$_GET[kode]'
        ");
        echo "Data Telah Terhapus";
        echo "<meta http-equiv=refresh content=2;URL='admin-read-kamar.php'>";
    }
?>
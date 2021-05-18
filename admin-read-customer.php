<?php
    include "koneksi.php";
?>
<html>
    <head>
        <title>DATA CUSTOMER</title>
	    <link rel="stylesheet" type="text/css" href="profil/assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="card mt-3">
                <div class="card-header bg-success text white">DATA CUSTOMER</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>No KTP</th>
                        <th>Nama Customer</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>ID Pegawai</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        include "koneksi.php";
                        $no = 1;
                        $ambildata = mysqli_query($koneksi, "SELECT * FROM customer");
                        
                        while($tampil = mysqli_fetch_array($ambildata)){
                            echo "
                            <tr>
                                <td>$no</td>
                                <td>$tampil[no_ktp]</td>
                                <td>$tampil[nama_customer]</td>
                                <td>$tampil[no_hp_customer]</td>
                                <td>$tampil[email_customer]</td>
                                <td>$tampil[id_pegawai]</td>
                                <td>$tampil[password]</td>
                                <td><a href='admin-ubah-customer.php?kode=$tampil[no_ktp]'> Ubah </a></td>
                            
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
    
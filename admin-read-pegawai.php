<html>
    <head>
        <title>DATA PEGAWAI</title>
        <link rel="stylesheet" type="text/css" href="profil/assets/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <div class="card mt-3">
                <div class="card-header bg-success text-white">DATA PEGAWAI</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Id Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <?php
                            include "koneksi.php";
                            $no = 1;
                            $ambildata = mysqli_query($koneksi, "SELECT * FROM pegawai");
                            
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td>$no</td>
                                    <td>$tampil[id_pegawai]</td>
                                    <td>$tampil[nama_pegawai]</td>
                                    <td>$tampil[no_hp_pegawai]</td>
                                    <td>$tampil[alamat]</td>
                                    
                                    <td><a href='admin-ubah-pegawai.php?kode=$tampil[id_pegawai]'> Ubah </a></td>
                                    <td><a href='admin-tambah-pegawai.php'> Tambah </a></td>
                                <tr>";
                                
                                $no++;
                            }
                        ?>
                    </table>
                </div>
            </div>
        <!-- Akhir Card Tabel-->    
        </div>   
        <script type="text/javascript" scr="js/bootstrap.min.js"></script>    
</html>

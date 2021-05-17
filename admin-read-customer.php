<?php
    include "koneksi.php";
?>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="profil/assets/css/bootstrap.min.css">
    </head>
</html>
<h3>Data Customer</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>No KTP</th>
        <th>Nama Customer</th>
        <th>No HP</th>
        <th>Email</th>
        <th>ID Pegawai</th>
        <th>Password</th>
        <th colspan = "3">Action</th>
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

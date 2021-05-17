<h3>Data Reservasi</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>No Reservasi</th>
        <th>No KTP</th>
        <th>No Kamar</th>
        <th>ID Pegawai</th>
        <th>Tanggal Check In</th>
        <th>Tanggal Check Out</th>
        <th>Jenis Pembayaran</th>
        <th>Action</th>
    </tr>

    <?php
        include "koneksi.php";
        $no = 1;
        $ambildata = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE no_reservasi > '0000'");
        
        while($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[no_reservasi]</td>
                <td>$tampil[no_ktp]</td>
                <td>$tampil[no_kamar]</td>
                <td>$tampil[id_pegawai]</td>
                <td>$tampil[tgl_check_in]</td>
                <td>$tampil[tgl_check_out]</td>
                <td>$tampil[jenis_pembayaran]</td>
                
                <td><a href='admin-update-reservasi.php?kode=$tampil[no_reservasi]'> Ubah </a></td>
            <tr>";
            
            $no++;
        }
    ?>
</table>

<?php
    if(isset($_GET['kode'])){
        mysqli_query($koneksi, "UPDATE reservasi SET
        id_pegawai = '$_POST[id_pegawai]'
        WHERE no_reservasi = '$_GET[kode]'
        ");

        echo "Data Telah Terhapus";
        echo "<meta http-equiv=refresh content=2;URL='admin-update-reservasi.php'>";
    }
?>
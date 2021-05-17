<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE no_reservasir='$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
?>
<html>
    <h3>Data Reservasi</h3>
    <form action="">
        <tr>
            <th>No Reservasi</th>
            <input type="text" name="nr" value="<?php echo $data[no_reservasi]?>">
            <th>No KTP</th>
            <th>No Kamar</th>
            <th>ID Pegawai</th>
            
            <th>Tanggal Check In</th>
            <th>Tanggal Check Out</th>
            <th>Jenis Pembayaran</th>
            <th>Action</th>
            </form>
        </tr>
</html>
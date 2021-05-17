<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
?>
<html>
    <h3>UBAH DATA PEGAWAI</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td width="120">ID Pegawai </td>
                <td> <?php echo $data['id_pegawai'];?></td>
            </tr>
            <tr>
                <td width="120">Nama Pegawai</td>
                <td><?php echo $data['nama_pegawai'];?></td>
            </tr>
            <tr>
                <td width="120">No HP</td>
                <td> <input type="text" name="no_hp" value="<?php echo $data['no_hp_pegawai'];?>"></td>
            </tr>
            <tr>
                <td width="120">Alamat</td>
                <td> <input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
            </tr>
            <tr>
                <td width="120"></td>
                <td> <input type="submit" name="ubah" value="UBAH"></td>
            </tr>
        </table>
    </form>
</html>
<?php
    include "koneksi.php";
    if(isset($_POST['ubah'])){  
        $sql = "UPDATE pegawai SET
        no_hp_pegawai = '$_POST[no_hp]',
        alamat = '$_POST[alamat]'
        WHERE id_pegawai = '$_GET[kode]'";
        mysqli_query($koneksi,$sql);
        //echo $sql;
        echo "<meta http-equiv=refresh content=2;URL='admin-read-pegawai.php'>";
    }
?>
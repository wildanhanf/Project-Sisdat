<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM customer WHERE no_ktp='$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
?>
<html>
    <h3>UBAH DATA KAMAR</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td width="120">No KTP</td>
                <td> <?php echo $data['no_ktp'];?></td>
            </tr>
            <tr>
                <td width="120">Nama Customer</td>
                <td><?php echo $data['nama_customer'];?></td>
            </tr>
            <tr>
                <td width="120">No HP</td>
                <td> <?php echo $data['no_hp_customer'];?></td>
            </tr>
            <tr>
                <td width="120">Email</td>
                <td> <?php echo $data['email_customer'];?></td>
            </tr>
            <tr>
               <td width="120">ID Pegawai</td>
               <td> <select name="id_pegawai" class = "jenis_kmr">
                        <option value="<?php echo $data['id_pegawai'];?>"><?php echo $data['id_pegawai'];?></option>
                            <?php
                                $sql = "SELECT * FROM pegawai ORDER BY id_pegawai";
                                $result = mysqli_query($koneksi,$sql);
                                while($row = mysqli_fetch_array($result)){
                                    echo "<option value = '". $row['id_pegawai'] ."'>".$row['id_pegawai']."</option>";
                                }
                            ?>   
                    </select>
                </td> 
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
        $sql = "UPDATE customer SET
        id_pegawai = '$_POST[id_pegawai]'
        WHERE no_ktp = '$_GET[kode]'";
        mysqli_query($koneksi,$sql);
        
        echo "<meta http-equiv=refresh content=2;URL='admin-read-customer.php'>";
    }
?>
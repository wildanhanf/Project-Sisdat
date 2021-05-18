<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>Edit Pegawai | Quest Hotel</title>
        <link rel="stylesheet" href="login/assets/css/style_signin.css">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>Edit Pegawai</h2>
                        <div></div>
                        <div></div>
                    <div class="underline-title"></div>
                </div>
            </div>
    <form action="" method="POST" class="form">
                <label for="user-id" style="padding-top: 13px;" class="form_name">&nbsp;
                    ID Pegawai
                </label> <br>
                <?php echo $data['id_pegawai'];?>
                <div class="form-border"></div>
                <label for="user-nama" class="form form-content" style="padding-top: 13px;">&nbsp;
                    Nama Pegawai
                </label> <br>
                <?php echo $data['nama_pegawai'];?>
                <div class="form-border"></div>
                <label for="user-no" class=" form form-content" style="padding-top: 13px;">
                    No. HP
                </label> <br>
                <input type="text" name="no_hp" style="width: 275px" value="<?php echo $data['no_hp_pegawai'];?>"></td>
                <label for="user-name" class=" form form-content" style="padding-top: 13px;">
                    Alamat
                </label> <br>
                <input type="text" name="alamat" style="width: 275px" value="<?php echo $data['alamat'];?>"></td>
            <tr>
                <td width="120"></td>
                <input id="submit-btn" type="submit" name="ubah" value="UBAH"/>
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
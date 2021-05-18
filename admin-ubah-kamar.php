<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM kamar WHERE no_kamar='$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>Edit Kamar | Quest Hotel</title>
        <link rel="stylesheet" href="login/assets/css/style_signin.css">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>Edit Kamar</h2>
                        <div></div>
                        <div></div>
                    <div class="underline-title"></div>
                </div>
            </div>

            <form action="" method="POST" class="form">
                <label for="user-name" style="padding-top: 13px;" class="form_name">&nbsp;
                    NO KAMAR
                </label><br>
                <?php echo $data['no_kamar'];?>
                <div class="form-border"></div>
                <label for="user-no" class="form form-content" style="padding-top: 13px;">&nbsp;
                    TIPE KAMAR
                </label> <br>
                <input type="text" name="tipe_kamar" style="width: 275px" value="<?php echo $data['tipe_kamar'];?>"/>
                <label for="user-id" class=" form form-content" style="padding-top: 13px;">
                    HARGA
                </label> <br>
                <input type="text" name="harga" style="width: 275px" value="<?php echo $data['harga'];?>"/>
                
                <label for="user-email" c lass=" form form-content" style="padding-top: 13px;">&nbsp;
                    ID Pegawai
                    <p> </p>
                    <p> </p>
                </label> <br>
                <select name="id_pegawai" class = "jenis_kmr" style="width: 275px">
                        <option value="<?php echo $data['id_pegawai'];?>"><?php echo $data['id_pegawai'];?></option>
                            <?php
                                $sql = "SELECT * FROM pegawai ORDER BY id_pegawai";
                                $result = mysqli_query($koneksi,$sql);
                                while($row = mysqli_fetch_array($result)){
                                    echo "<option value = '". $row['id_pegawai'] ."'>".$row['id_pegawai']."</option>";
                                }
                            ?>   
                    </select>
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
        $sql = "UPDATE kamar SET
        tipe_kamar = '$_POST[tipe_kamar]',
        harga = '$_POST[harga]',
        id_pegawai = '$_POST[id_pegawai]'
        WHERE no_kamar = '$_GET[kode]'";
        mysqli_query($koneksi,$sql);
        
        echo "<meta http-equiv=refresh content=2;URL='admin-read-kamar.php'>";
    }
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>Tambah Kamar | Quest Hotel</title>
        <link rel="stylesheet" href="login/assets/css/style_signin.css">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>Tambah Kamar</h2>
                        <div></div>
                        <div></div>
                    <div class="underline-title"></div>
                </div>
            </div>
            <form method="post" class="form">
                <label for="user-name" style="padding-top: 13px;" class="form_name">&nbsp;
                    NO KAMAR
                </label>
                <input type="text" input id="user-name" class="form form-content" type="text" style="width: 200px" name="no_kamar" autocomplete="on" required/>
                <div class="form-border"></div>
                
                <label for="user-no" class="form form-content" style="padding-top: 13px;">&nbsp;
                    TIPE KAMAR
                </label>
                <input type="text" input id="user-no" class="form form-content" type="text" style="width: 200px" name="tipe_kamar" autocomplete="on" required/>
                <div class="form-border"></div>

                <label for="user-id" class=" form form-content" style="padding-top: 13px;">
                    HARGA
                </label>
                <input type="text" class=" form form-content" style="width: 200px" name="harga" autocomplete="on" required/>
                <div class="form-border"></div>
                <label for="user-email" class=" form form-content" style="padding-top: 13px;">&nbsp;
                    ID Pegawai
                </label> <br>
                <select name="id_pegawai" class = "jenis_kmr" style="width: 275px">
                    <option value="0">Pilih ID Pegawai</option>
                        <?php
                            include "koneksi.php";
                            $sql = "SELECT * FROM pegawai ORDER BY id_pegawai";
                            $result = mysqli_query($koneksi,$sql);
                            while($row = mysqli_fetch_array($result)){
                                echo "<option value = '". $row['id_pegawai'] ."'>".$row['id_pegawai']."</option>";
                            }
                        ?>   
                </select>
                
                
                <input id="submit-btn" type="submit" name="submit" value="CREATE">
            </form>
        </div>
    </body>
</html>


<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        mysqli_query($koneksi,"INSERT INTO kamar SET
          no_kamar = '$_POST[no_kamar]',
          tipe_kamar = '$_POST[tipe_kamar]',
          harga = '$_POST[harga]',
          id_pegawai = '$_POST[id_pegawai]'
        ");
        echo "AKUN ANDA TERDAFTAR";
        echo "<meta http-equiv=refresh content=2;URL='admin-read-kamar.php'>";
    }
?>
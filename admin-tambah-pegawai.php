<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>Tambah PEGAWAI | Quest Hotel</title>
        <link rel="stylesheet" href="login/assets/css/style_signin.css">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>Tambah Pegawai</h2>
                        <div></div>
                        <div></div>
                    <div class="underline-title"></div>
                </div>
            </div>
            <form method="post" class="form">
                <label for="user-name" style="padding-top: 13px;" class="form_name">&nbsp;
                    ID Pegawai
                </label>
                <input type="text" input id="user-name" class="form form-content" type="text" style="width: 200px" name="id_pegawai" autocomplete="on" required/>
                <div class="form-border"></div>
                
                <label for="user-no" class="form form-content" style="padding-top: 13px;">&nbsp;
                    Nama Pegawai
                </label>
                <input type="text" input id="user-no" class="form form-content" type="text" style="width: 200px" name="nama_pegawai" autocomplete="on" required/>
                <div class="form-border"></div>

                <label for="user-id" class=" form form-content" style="padding-top: 13px;">
                    No HP
                </label>
                <input type="text" class=" form form-content" style="width: 200px" name="no_hp" autocomplete="on" required/>
                <div class="form-border"></div>
                <label for="user-email" c lass=" form form-content" style="padding-top: 13px;">&nbsp;
                    Alamat
                </label>
                <input type="text" input id="user-no" class="form form-content" type="text" style="width: 200px" name="alamat" autocomplete="on" required/>
                <div class="form-border"></div>
                
                
                <input id="submit-btn" type="submit" name="submit" value="CREATE">
            </form>
        </div>
    </body>
</html>


<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        mysqli_query($koneksi,"INSERT INTO pegawai SET
          id_pegawai = '$_POST[id_pegawai]',
          nama_pegawai = '$_POST[nama_pegawai]',
          no_hp_pegawai = '$_POST[no_hp]',
          alamat = '$_POST[alamat]'
        ");
        echo "AKUN ANDA TERDAFTAR";
        echo "<meta http-equiv=refresh content=2;URL='admin-read-pegawai.php'>";
    }
?>
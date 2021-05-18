<?php
    session_start();
    include "koneksi.php"; 
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewreport" content="width-device-width, initial-scale=1.0"/>
        <title>Login Admin| Quest Hotel</title>
        <link rel="stylesheet" href="login/assets/css/style_login.css">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>Log In</h2>
                </div>
            </div>
            <form method="post" class="form">
                <label for="user-email" style="padding-top: 20px;">&nbsp;
                    ID Pegawai 
                </label>
                <input id="user-email" class="form-content" type="text" name="id_pegawai" autocomplete="on" required/>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 20px;">&nbsp;
                    PASSWORD 
                </label>
                <input id="user-password" class="form-content" type="password" name="no_hp" required/>
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN">
            </form>
        </div>
    </body>
</html>

<?php 

    // Jika Tombol Submit di Klik
    if(isset($_POST['submit'])){
        $sql = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai = '$_POST[id_pegawai]'
        AND no_hp_pegawai = '$_POST[no_hp]'");

        $cek = mysqli_num_rows($sql);
        if($cek > 0){
            $_SESSION['id_pegawai'] = $_POST['id_pegawai'];

            echo "<meta http-equiv=refresh content=0;URL='admin-profil.php'>";
        }else{
            echo "<p align= center><b> EMAIL DAN PASSWORD SALAH ! </b></p>";
            echo "<meta http-equiv=refersh content=2;URL='admin-login.php'>";
        }
    }
?>
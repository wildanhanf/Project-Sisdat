<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>Sign Up | Quest Hotel</title>
        <link rel="stylesheet" href="login/assets/css/style_signin.css">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>Sign Up</h2>
                </div>
            </div>
            <form method="post" class="form">
                <label for="user-name" style="padding-top: 13px;" class="form_name">&nbsp;
                    NAME
                </label>
                <input id="user-name" class=" form form-content" type="text" style="width: 200px;"
                name="nama_customer" autocomplete="on" required/>
                <div class="form-border"></div>
                
                <label for="user-no" style="padding-top: 13px;" class="form_name">&nbsp;
                    NO HP
                </label>
                <input id="user-no" class=" form form-content" type="text" style="width: 200px;"
                name="no_hp_customer" autocomplete="on" required/>
                <div class="form-border"></div>

                <label for="user-id" style="padding-top: 13px;" class="form_name">&nbsp;
                    NO KTP
                </label>
                <input id="user-id" class=" form form-content" type="text" style="width: 200px;"
                name="no_ktp" autocomplete="on" required/>
                <div class="form-border"> </div>

                <label for="user-email" style="padding-top: 13px;">&nbsp;
                    EMAIL
                </label>
                <input id="user-email" class="form-content" type="text" style="width: 200px;"
                 name="email_customer" autocomplete="on" required/>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 13px;">&nbsp;
                    PASSWORD 
                </label>
                <input id="user-password" class="form-content" type="password" name="password" style="width: 200px;" required/>
                <div class="form-border"></div>
                
                <label for="user-password" style="padding-top: 13px;">&nbsp;
                    REPEAT PASSWORD 
                </label>
                <input id="user-password" class="form-content" type="password" name="password" style="width: 200px;" required/>
                <div class="form-border"></div> 
                
                <input id="submit-btn" type="submit" name="submit" value="CREATE">
            </form>
        </div>
    </body>
</html>


<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        mysqli_query($koneksi,"INSERT INTO customer SET
          nama_customer = '$_POST[nama_customer]',
          no_hp_customer = '$_POST[no_hp_customer]',
          no_ktp = '$_POST[no_ktp]',
          email_customer = '$_POST[email_customer]',
          password  = '$_POST[password]'
        ");
        echo "AKUN ANDA TERDAFTAR";
        echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    
    }
?>
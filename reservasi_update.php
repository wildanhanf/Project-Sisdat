<?php
    include "koneksi.php";
    $nr = $_POST['no_reservasi']; 
    $sql = mysqli_query($koneksi, "SELECT * FROM kamar WHERE no_kamar='$nr'");
    $data = mysqli_fetch_array($sql);

?>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>UPDATE RESERVASI</title>
        <link rel="stylesheet" href="profil/assets/css/style_home.css">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>
        <div>
        <nav>
            <div class="menu-mobile">
            </div>
            <al>
                <li><a href="profil.php">
                    <img src="profil/assets/kntl.png" style="height: 70%; width: 70%" class="float">
                </a></li>
                </al>
            <ul>
                <li><a href="profil.php">HOME</a></li>
                <li><a href="reservasi.php">RESERVASI</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
            </ul>
            <div>
                <p>No Reservasi</p>
                <input type="text" name="nr" value="<?php echo $data['no_reservasi'];?>">
            </div>
            <!--<div>
                <p>No KTP</p><br>
                <input type="text" name="nktp" value="<?php echo $data['no_ktp'];?>">
            </div>
            <div>
                <p>Tanggal Check In</p><br>
                <input type="date" name="tc" value="<?php echo $data['tgl_check_in'];?>">
            </div>
            <div>
                <p>Tanggal Check Out</p><br>
                <input type="date" name="to" value="<?php echo $data['tgl_check_in'];?>">
            </div>
            <div>
                <p>Jenis Pembayaran</p><br>
                <input type="text" name="jb" value="<?php echo $data['jenis_pembayaran'];?>">
            </div>-->

        </nav>
        </div>
    </body>
</html>

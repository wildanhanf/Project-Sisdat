<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE no_reservasi = '$_GET[kode]'"); 
    $data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>Welcome to Quest-Hotels</title>
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
            </ul><br><br>
        <div class="center">
            <div class="card">
                <div>
                    <h2>Reservasi Anda</h2>
                </div>
                <div>
                <label>No Reservasi :</label><br>
                    <?php echo $data['no_reservasi']?>
                </div>
                <div>
                    <label>No KTP :</label><br>
                    <?php echo $data['no_ktp']?>
                </div>
                <div>
                    <label>No Kamar :</label><br>
                    <?php echo $data['no_kamar']?>
                </div>
                <div>
                    <label>Tanggal Check In :</label><br>
                    <?php echo $data['tgl_check_in']?>
                </div>
                <div>
                    <label>Tanggal Check Out :</label><br>
                    <?php echo $data['tgl_check_out']?>
                </div>
                <div>
                    <label>Jenis Pembayaran :</label><br>
                    <?php echo $data['jenis_pembayaran']?>
                </div>
                <div>
                    <?php 
                        echo "<a href='?hapus=$data[no_reservasi]'>CANCEL</a>";
                        echo " <a href= profil.php>SELESAI</a>";
                    ?>
                </div>
                <div class="row">
                    <input type="finish" value="Finish" name="finish">
                    <input type="cancel" value="Cancel" name="cancel">
                </div>
        </div>
    </body>
</html>
<?php
    if(isset($_GET['hapus'])){
        mysqli_query($koneksi, "DELETE FROM reservasi WHERE no_reservasi = '$_GET[hapus]'");
        echo "Data Telah Terhapus"; 
        echo " <meta http-equiv=refresh content=0;URL='reservasi-after-delete.php?'>";
    }
    
?>





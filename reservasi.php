<?php

    //menghubungkan koneksi
    include "koneksi.php";
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>RESERVASI</title>
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
        </nav>
        </div>

        <div class="row">
            <div class="rightcolumn_kamar">
                <div class="card">
                    <h2>DELUXE DOUBLE ROOM ONLY</h2>
                    <div>
                        <img src="profil/assets/jen1.jpg" style="height: 100%; width:100%">
                    </div>
                    <p>
                        Deluxe Double Room ini dapat mudah untuk dikenali karena ukurannya yang luas daripada tipe kamar deluxe, standard maupun superior.
                        Tanda-tanda spesifik lainnya adalah ia memiliki living room (ruang duduk) yang diberi sekat supaya ruangan tidur tidak dapat terlihat.
                        Tetapi ruang tidur dan ruang duduk masih terletak dalam satu ruangan yang sama.
                    </p>
                    <div class="row">
                        <input type="submit" value="<?php 
                                                        $no = 0;
                                                        $ambildata = mysqli_query($koneksi,"SELECT * FROM kamar WHERE tipe_kamar = 1");
                                                        while($tampil = mysqli_fetch_array($ambildata)){
                                                            $no++;
                                                        }
                                                        echo "$no Kamar"; ?>" name="submit">
                    </div>
                </div>
                <div class="card">
                    <h2>DELUXE TWIN ROOM ONLY</h2>
                    <div>
                        <img src="profil/assets/jen2.jpg" style ="height: 100%; width:100%">
                    </div>
                    <p>
                        Deluxe Twin Room merupakan salah satu kamar paling murah di berbagai macam hotel merupakan istilah di hotel Amerika. 
                        Deluxe Twin Room berbeda dengan kamar Deluxe Room. Setiap hotel memiliki kamar standard yang berbeda-beda. Terkadang memiliki double ranjang ukuran queen size,
                        ada juga satu ranjang king-size bahkan hanya ada yang seperti single room dengan satu ranjang.
                    </p>
                    <div class="row">
                        <input type="submit" value="<?php 
                                                        $no = 0;
                                                        $ambildata = mysqli_query($koneksi,"SELECT * FROM kamar WHERE tipe_kamar = 2");
                                                        while($tampil = mysqli_fetch_array($ambildata)){
                                                            $no++;
                                                        }
                                                        echo "$no Kamar"; ?>" name="submit">
                    </div>
                </div>
                <div class="card">
                    <h2>EXECUTIVE DELUXE DOUBLE ROOM</h2>
                    <div>
                        <img src="profil/assets/jen3.jpg" style="height: 100%; width:100%">
                    </div>
                    <p>
                        Executive Deluxe Double Room merupakan kamar yang didesain lebih berkelas dalam berbagai hal, mulai dari ukuran, 
                        lokasi, dan juga penampilannya. Tetapi terdapat beberapa hotel yang mengkategorikan Executive Deluxe Double Room sebagai kamar tipe Superior. 
                    </p>
                    <div class="row">
                        <input type="submit" value="<?php 
                                                        $no = 0;
                                                        $ambildata = mysqli_query($koneksi,"SELECT * FROM kamar WHERE tipe_kamar = 3");
                                                        while($tampil = mysqli_fetch_array($ambildata)){
                                                            $no++;
                                                        }
                                                        echo "$no Kamar"; ?>" name="submit">
                      </div>
                </div>
            </div>
            <div class="leftcolumn_kamar">
                <div class="card">
                    <div>
                        <h2>RESERVASI</h2>
                    </div>
                    <form  method = "POST">
                        <div>
                            <!-- Nama -->
                            <label for="nama">NO KTP</label><br>
                            <select name="no_ktp" class = "jenis_kmr">
                                <option value="0">Pilih No KTP Anda</option>
                                    <?php
                                        $sql = "SELECT * FROM customer ORDER BY no_ktp";
                                        $result = mysqli_query($koneksi,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<option value = '". $row['no_ktp'] ."'>".$row['no_ktp']." - ". $row['nama_customer']."</option>";
                                        }
                                    ?>   
                            </select>
                        </div>
                        
                        <div>
                            <!-- Nama -->
                            <label for="nama">NO KAMAR</label><br>
                            <select name="no_kamar" class = "jenis_kmr">
                                <option value="0">Pilih NO KAMAR</option>
                                    <?php
                                        $sql = "SELECT * FROM kamar ORDER BY no_kamar";
                                        $result = mysqli_query($koneksi,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<option value = '". $row['no_kamar'] ."'>".$row['no_kamar']." - ".$row['tipe_kamar']."</option>";
                                        }
                                    ?>   
                            </select>
                        </div>

                        <div>
                            <!-- Nama -->
                            <label for="nama">ID PEGAWAI</label><br>
                            <select name="id_pegawai" class = "jenis_kmr">
                                <option value="0">Pilih Id Pegawai</option>
                                    <?php
                                        $sql = "SELECT * FROM pegawai ORDER BY id_pegawai";
                                        $result = mysqli_query($koneksi,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<option value = '". $row['id_pegawai'] ."'>".$row['id_pegawai']."</option>";
                                        }
                                    ?>   
                            </select>
                        </div>

                        <!--<div>
                            Jenis Kamar 
                            <label for="jenis_kamar">JENIS KAMAR</label> <br>
                            <select name="jenis_kamar" class="jenis_kmr">
                                <option value="jenis_kamar_1">Jenis Kamar 1</option>
                                <option value="jenis_kamar_2">Jenis Kamar 2</option>
                                <option value="jenis_kamar_3">Jenis Kamar 3</option>
                            </select>
                        </div> -->

                        <div>
                            <!-- Tanggal Check In -->
                            <label for="tanggal_book">TANGGAL CHECK IN</label> <br>
                            <input type="date" class="jenis_kmr" name="tanggal_check_in" value="<?php echo $tgl_check_out?>">
                        </div>

                        <div>
                            <!-- Tanggal Check Out -->
                            <label for="tanggal_book">TANGGAL CHECK OUT</label> <br>
                            <input type="date" class="jenis_kmr" name="tanggal_check_out" value="<?php echo $tgl_check_out?>">
                        </div>
                        
                        <div>
                            <!-- Jenis Pembayaran -->
                            <label for="jenis_pembayaran">JENIS PEMBAYARAN</label> <br>
                            <select name="jenis_pembayaran" class="jenis_kmr">
                                <option value="BCA">BCA</option>
                                <option value="GO-PAY">GO-PAY</option>
                                <option value="OVO">OVO</option>
                            </select>
                        </div>          
                                <?php
                                    //mengambil data barang dengan kode paling besar
                                    $query = mysqli_query($koneksi, "SELECT MAX(no_reservasi) AS no_reservasi_next FROM reservasi");
                                    $data = mysqli_fetch_array($query);
                                    $id_reservasi = $data['no_reservasi_next'];
                                    
                                    // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                                    // dan diubah ke integer dengan(int)
                                    $urutan = (int) substr($id_reservasi,3,4);

                                    //bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                    $urutan++;

                                    //membentuk kode barang baru
                                    //perintah sprintf("%03s", 15); maka akan menghasilkan 015
                                    //angka yang diambil tadi digabungkkan dengan kode huruf yang kita inginkan, misalnya BRG
                                    $huruf = "RSV";
                                    $id_reservasi = $huruf . sprintf("%04s", $urutan);
                                    echo "<input type='hidden' name = 'no_reservasi' value='".$id_reservasi."'/>";
                                    //echo $id_reservasi;
                                ?>
                        <div class="row">
                            <input type="submit" value="Submit" name="submit">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <h3>Contact Us</h3>
                        <a href="https://api.whatsapp.com/send?phone=+622335320808&text=Halo">
                        <img src="profil/assets/wa.png" class="border">+622335320808</a>
                        </p>
                        <p>
                        <a href="https://www.instagram.com/questsemarang/">
                        <img src="profil/assets/instagram.png" class="border">@questsemarang</a>
                        </p>
                        <p>
                        <a href="mailto:SimpangLimaInfo@Quest-Hotels.com">
                        <img src="profil/assets/email.png" class="border">SimpangLimaInfo@Quest-Hotels.com</a>
                        </p>
                </div>
            </div>
        </div> 
        <div>
        <footer class="footer">
            <p>Copyright 2021 • All Rights Reserved • Quest Hotel</p>
        </footer>
        </div>
    </body>
</html>

<?php
        

        if(isset($_POST['submit']))
        {
            
            $nr = $_POST['no_reservasi'];
            $nktp = $_POST ['no_ktp'];
            $nkmr = $_POST ['no_kamar'];
            $ip = $_POST ['id_pegawai'];
            $tci = $_POST ['tanggal_check_in'];
            $tco = $_POST ['tanggal_check_out'];
            $jp = $_POST ['jenis_pembayaran'];
            $query ="INSERT INTO reservasi values('$nr','$nktp','$nkmr','$ip','$tci', '$tco', '$jp')";
            echo $query;
            echo $nktp;
            mysqli_query($koneksi,$query);
            
            echo "Reservasi Berhasil";
        
            echo "<meta http-equiv=refresh content=0;URL='reservasi-read.php?kode=$nr'>";
            
        }



?>
<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM customer WHERE no_ktp='$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <title>Edit Customer | Quest Hotel</title>
        <link rel="stylesheet" href="login/assets/css/style_signin.css">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>Edit Customer</h2>
                        <div></div>
                        <div></div>
                    <div class="underline-title"></div>
                </div>
            </div>

            <form action="" method="POST" class="form">
        <label for="user-id" style="padding-top: 13px;" class="form_name">&nbsp;
                    No KTP
                </label> <br>
                 <?php echo $data['no_ktp'];?></td>
                 <div class="form-border"></div>
                <label for="user-nama" class="form form-content" style="padding-top: 13px;">&nbsp;
                    Nama Customer
                </label> <br>
                <?php echo $data['nama_customer'];?></td>
                <div class="form-border"></div>
                <label for="user-no" class=" form form-content" style="padding-top: 13px;">
                    No. HP
                </label> <br>
                <?php echo $data['no_hp_customer'];?></td>
                <div class="form-border"></div>
                <label for="user-nama" class="form form-content" style="padding-top: 13px;">&nbsp;
                    Email
                </label> <br>
                <?php echo $data['email_customer'];?></td>
                <div class="form-border"></div>
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
                </td> 
            </tr>
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
        $sql = "UPDATE customer SET
        id_pegawai = '$_POST[id_pegawai]'
        WHERE no_ktp = '$_GET[kode]'";
        mysqli_query($koneksi,$sql);
        
        echo "<meta http-equiv=refresh content=2;URL='admin-read-customer.php'>";
    }
?>
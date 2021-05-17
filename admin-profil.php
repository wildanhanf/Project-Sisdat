<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Reservasi Hotel</title>
    <style type="text/css">
body{
background-color: #e9e6da;
color: #3c3c3c;
font-family: Tw Cen MT;
font-weight: normal;
}

h1 {
font-weight: 700;
}

.wrapper{
width: 500px;
margin: auto;
margin-top: 150px;
}

.button {
color: #e9e6da;
background-color: #333;
border: none;
text-align: center;
text-decoration: none;
border-radius: 31.5px;
font-size: 1.3em;
display: inline-block;
cursor: pointer;
width:250px;
padding: 4px;
margin: 4px 2px;
height:30px;
}
.button:hover {
color: #e9e6da;
background-color: #333;
border: none;
}

::selection {
background-color: #333;
color: #ffffff;
}
    </style>
</head>
<body>
    <div class="wrapper">
        <center>
            <h1>Database Reservasi Hotel</h1>
            <a href="admin-read-kamar.php" class="button">KAMAR</a><br>
            <a href="admin-read-customer.php" class="button">CUSTOMER</a><br>
            <a href="admin-read-pegawai" class="button">PEGAWAI</a>
        </center>
    </div>
</body>
</html>
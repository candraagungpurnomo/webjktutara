<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="./resources/ol.css">
        <link rel="stylesheet" href="resources/fontawesome-all.min.css">
        
        
        <link rel="stylesheet" type="text/css" href="resources/horsey.min.css">
        <link rel="stylesheet" type="text/css" href="resources/ol3-search-layer.min.css">
        <title>PEMERINTAH KOTA JAKARTA UTARA</title>
        <link rel="icon" href="img/jakartautara.png">
        
        
        <link rel="stylesheet" href="./resources/ol-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<title>Tambah Data</title>
	</head>
<body>	




<style>
.search-layer {
  top: 65px;
  left: .5em;
}
.ol-touch .search-layer {
  top: 80px;
}

        html, body {
            background-color: #ffffff;
        }
        .ol-control button {
            background-color: #00FF7F !important;
            color: #000000 !important;
            border-radius: 0px !important;
        }
        .ol-zoom, .geolocate, .gcd-gl-control .ol-control {
            background-color: rgba(255,255,255,.4) !important;
            padding: 3px !important;
        }
        .ol-scale-line {
            background: none !important;
        }
        .ol-scale-line-inner {
            border: 2px solid #f8f8f8 !important;
            border-top: none !important;
            background: rgba(255, 255, 255, 0.5) !important;
            color: black !important;
        }
       
        #map {
            width: 1279px;
            height: 591px;
            margin: 40px auto;
            
        }

        .pembungkusmap{
            height: 800px;
            background-color: white;
        }


        ol {
  list-style-type: none;
  margin: 0;
  padding: 0px 0px 0px 50px;
  overflow: hidden;
  background-color: rgb(52, 24, 153);
  position: fixed;
  top: 0;
  width: 100%;
  height: 70px;
  z-index: 9999;
  font-size: 12pt;
}
        

        .paragrafatas p{
    float: left;
    margin: 0;
    color: rgb(255, 255, 255);
    padding: 15px 340px 0px 15px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    font-weight: bold;
}


.foto{
    float: left;
    margin: 0px -10px 0px 50px;
    padding: 14px 0px 0px 0px;
    text-align: center;
    
}

li {
  float: left;
}

li a {
  display: block;
  color: rgb(255, 253, 253);
  text-align: center;
  padding: 27px 49px;
  text-decoration: none;
  font-family: Arial, Helvetica, sans-serif;
}

li a:hover:not(.active) {
  background-color: rgb(144, 170, 255);
}

.active {
  background-color: #04AA6D;
}

.cont1{
    height: 1000px;
    margin-top: 70px;
}

.carousel-item {
    height: 600px;
}


h3{
  font-size: 40pt;
  text-align: center;
  color: rgb(19, 19, 19);
  font-family: Arial, Helvetica, sans-serif;
  
}


.footer{
  height: 500px;
  background-color: rgb(52, 24, 153);

}

.bag1{
  margin-left: 350px;
  margin-top: 100px;
  float: left;
}

.bagi2{
  float: right;
  margin-top: 100px;
  margin-right: 280px;
  color: rgb(255, 255, 255);
}

.bagi2 p{
    font-size: 12pt;
    margin-top:8px;
}

.utama{
    height: 1200px;
    background-color: rgb(236, 236, 236);
    
}


.intro{
    height: 150px;
    background-color: #00BFFF;
}        
h4{
    font-size: 18pt;
}

.intro p{
    font-size: 28pt;
    text-align: center;
    line-height: 42px;
    font-family: verdana;   
    font-weight: bold;
    color: white;
}



.link{
    font-size: 16pt;
    margin-left: 50px;
    margin-top:20px
}

.link a{
    background-color: #00FF7F;
    border-radius: 5px;
    color: black;
}


.form{
  margin-top: 50px;
}


.bungkus{
  background-color: white;
  height: 1000px;
}
</style>

<title></title>
</head>
    <body>

    <div class="cont1">
        <ol>
             <div class="foto">
                <img src="img/jakartautara.png" width=50px height=50px alt="Logo Jakut">
            </div>
            <div class="paragrafatas"><p>PEMERINTAH KOTA ADMINISTRASI<BR>
                  <B>JAKARTA UTARA</B></p>
             </div> 
             <li><a href="index.php">Home</a></li>
             <li><a href="profile.php">Profile</a></li>
             <li><a href="peta.php">Peta</a></li>
             <li><a href="kontak.php">Contact</a></li>
        </ol>



        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                     <img src="img/kota.jpg" class="d-block w-100" alt="kota">
            </div>
            <div class="carousel-item">
                 <img src="img/sundakelapa.jpg" class="d-block w-100" alt="sundakelapa">
            </div>
            <div class="carousel-item">
                 <img src="img/tarijakut.jpg" class="d-block w-100" alt="tarijakut">
            </div>
            
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
        <div class="intro">
           <br><p>EDIT DATA PETA KEPADATAN PENDUDUK<br> KOTA ADMINISTRASI JAKARTA UTARA</p>
           <hr style="width:70%;text-align:left;;color: #556B2F;height: 3px;margin-left: 200px;">
        </div>



<div class="bungkus">
<form>
    <div class="mb-3">
    
	         <?php
                include "koneksi.php";
                $jml = $_GET['jml'];
                $sql = "SELECT * FROM kepadatan where jml='$jml'";
                $query = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_array($query)){
                ?>

        <table>
	      <form action="proses-update.php" method="POST">
          <tr>
              <td>PROVINSI</td>
              <td> : <input type="text" name="provinsi" value="<?php echo $data ['provinsi']; ?>"></td>
          </tr>
          <tr>
              <td>KOTA</td>
              <td> : <?php echo $data ['kota']; ?></td>
          </tr>
          <tr>
              <td>KECAMATAN</td>
              <td> : <?php echo $data ['kecamatan']; ?></td>
          </tr>
          <tr>
              <td>JUMLAH</td>
              <td> : <input type="number" name="jml" value="<?php echo $data ['jml']; ?>"></td>
          </tr>
          <tr>
              <td><input type="submit"  value="ubah / update" name="simpan"></td>
              <td><a href="tampildata.php">kembali</a></td>
          </tr>
       
    </div>
<?php
	}
?>
  
</form>
</table>
	
        <div id="map">
            <div id="popup" class="ol-popup">
                <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                    <div id="popup-content"></div>
            </div>
        </div>
        </div>
        <div class="footer">
            <div class="bag1">
                <img src="img/jakartautara.png" width=200px height=250px alt="Logo Jakut">
        </div>
        <div class="bagi2">
            <b><h4>Pemerintah Kota Administrasi Jakarta Utara</h4></b><hr style="width:100%;text-align:left;margin-left:1px;color: rgb(255, 255, 255);height: 3px;margin-top:16px;"><br>
            <b><p>Kantor Walikota Administrasi Jakarta Utara<br>Jl. Laksda Yos Sudarso 27-29 Tanjung Priok, Jakarta Utara
            <br>kominfoutara@jakarta.go.id
            (62-21) 4303111</p></b><br><br><br><br><br>
            
        </div>
        <div class="pol">
            <hr style="width:100%;text-align:left;;color: rgb(255, 255, 255);height: 2px;">
            <br><h6 style="color: white; text-align:center; margin-top:5px;"> Copyright © [2021] [Candra Agung Purnomo]. All Rights Reserved.</h6>
        </div>
        </div>
</div>
        <script src="resources/qgis2web_expressions.js"></script>
        <script src="resources/polyfills.js"></script>
        <script src="./resources/functions.js"></script>
        <script src="./resources/ol.js"></script>
        <script src="http://cdn.polyfill.io/v2/polyfill.min.js?features=Element.prototype.classList,URL"></script>
        <script src="resources/horsey.min.js"></script>
        <script src="resources/ol3-search-layer.js"></script>
        <script src="./resources/ol-layerswitcher.js"></script>
        <script src="layers/ADMINISTRASIKECAMATAN_AR_25K_0.php"></script>
        <script src="styles/ADMINISTRASIKECAMATAN_AR_25K_0_style.js"></script>
        <script src="./layers/layers.js" type="text/javascript"></script> 
        <script src="./resources/Autolinker.min.js"></script>
        <script src="./resources/qgis2web.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</body>
</html>
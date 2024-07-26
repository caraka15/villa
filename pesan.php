<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Reservasi D'VILLAIN</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Header -->
    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation" data-spy="affix">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Name -->
                    <div class="page-scroll site-logo">
                        <a href="#top">Villa Aja Lah</a>
                    </div>

                </div><!-- /.navbar-header -->

                <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">

                    <!-- Navigation -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="#top">Home</a></li>
                        <li class="page-scroll"><a href="#guide">Guide</a></li>
                        <li class="page-scroll"><a href="#villa">Villa</a></li>
                        <li class="page-scroll"><a href="#service">Customer Service</a></li>
                        <li class="page-scroll"><a href="#social">Social</a></li>
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->
    <!-- End Header -->
<body>
<?php 

$namavilla =$_POST['namavilla'];
$harga =$_POST['hargavilla'];
$nama =$_POST['namapemesan'];
$umur =$_POST['umurpemesan'];
$jorang =$_POST['jumlahorang'];
$cekin =$_POST['cekin'];
$cekout =$_POST['cekout'];
$nohp =$_POST['nohp'];
$email =$_POST['email'];
$alamat =$_POST['alamatpemesan'];
$idVilla=$_POST['idVilla'];
$idpemesan=$_POST['idpemesan'];
$aVilla=$_POST['aVilla'];
$bayar='BCA : 7557667897';

//selisih hari
$date1=date_create($cekin);
$date2=date_create($cekout);
$diff=date_diff($date1,$date2);

//jumlah hari menginap x harga
$hari = intval($diff->format("%a"));
$total_harga = $harga*$hari;

$idtransaksi = mt_rand(1000, 9999);

//tax
$tax = $total_harga * 0.1;
$total = $tax + $total_harga;

 ?>
<div class="modal-dialog">
<form action="nota.php" method="POST">
	<table class="table table-borderless">
	<h1 align="center">Reservasi Villa</h1>
	<tr>
		<td>ID Transaksi</td>
		<td><input type="text" class="form-control" name="idtransaksi" value="<?= $idtransaksi ?>" readonly="readonly"></td>
	<tr>
	    <td>ID Villa</td>
	    <td><input type="text" class="form-control" name="idVilla" value="<?= $idVilla ?>" readonly="readonly"></td>
	</tr>
    <tr>
        <td>Nama Villa</td>
        <td><input type="text" class="form-control" name="namavilla" value="<?= $namavilla ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Alamat Villa</td>
        <td><input type="text" class="form-control" name="aVilla" value="<?= $aVilla ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="number" class="form-control" name="hargavilla" value="<?= $harga ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Nama Pemesan</td>
        <td><input type="text" class="form-control" name="namapemesan" value="<?= $nama ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>ID Pemesan</td>
        <td><input type="text" class="form-control" name="idpemesan" value="<?= $idpemesan ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Umur Pemesan</td>
        <td><input type="text" class="form-control" name="umurpemesan" value="<?= $umur ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Berapa Orang</td>
        <td><input type="text" class="form-control" name="jumlahorang" value="<?= $jorang ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Tanggal Cek in</td>
        <td><input type="date" class="form-control" name="cekin" value="<?= $cekin ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Tanggal Cek Out</td>
        <td><input type="date" class="form-control" name="cekout" value="<?= $cekout ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>No Handphone</td>
        <td><input type="text" class="form-control" name="nohp" value="<?= $nohp ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" class="form-control" name="email" value="<?= $email ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" class="form-control" name="alamatpemesan" value="<?= $alamat ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Hari Sewa</td>
        <td><input type="text" class="form-control" name="harisewa" value="<?= $hari; echo "Hari"; ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>SubBayar</td>
        <td><input type="text" class="form-control" name="totalbayar" value="<?= $total_harga ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Pajak</td>
        <td><input type="text" class="form-control" name="tax" value="<?= $tax ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Total Bayar</td>
        <td><input type="text" class="form-control" name="total" value="<?= $total ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td>Rekening Pembayaran</td>
        <td><input type="text" class="form-control" name="rekening" value="<?= $bayar ?>" readonly="readonly"></td>
    </tr>
    <tr>
        <td></td>
        <td align="right"><button class="btn" type="submit">Konfirmasi Pembayaran</button></td>
    </tr>
	</table>
</form>
</div>
</body>
</html>


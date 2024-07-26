<html>
<head>
    <title>Nota Reservasi</title>
    <link rel="stylesheet" href="assets/css/nota_style.css">
</head>
<body>

<?php
    $company= "VILLA AJA LAH";
    $time= date("Y-d-m H:i:s");
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
    $bayar=$_POST['rekening'];
    $idtransaksi=$_POST['idtransaksi'];
    $alamatpemesan=$_POST['alamatpemesan'];
    $total_harga=$_POST['totalbayar'];
    $hari=$_POST['harisewa'];
    $tax=$_POST['tax'];
    $total=$_POST['total'];
?>
<div class="nota">
    <div class="company">
        <p><?php echo $company ?><br>
        <br>
        NOTA RESERVASI</p>
        <hr />
    </div>

    <div class="date">
        <pre><span style="font-size:16px">
Time                                 <?php echo $time ?><br>
ID Transaksi                                        <?php echo $idtransaksi ?>
        </span></pre>
        <hr />
    </div>
    <table class="villa" border=0>
        <tr>
            <th width="250px">  </th>
            <th width="250px"> </th>
        </tr>
        <tr>
            <td>ID Villa</td><td align="right"><?php echo $idVilla ?></td>
        </tr>
        <tr>
            <td>Nama Villa</td><td align="right"><?php echo $namavilla ?></td>
        </tr>
        <tr>
            <td>Harga per malam</td><td align="right"><?php echo $harga ?></td>
        </tr>
        <tr>
            <td valign="top">Alamat Villa</td><td  align="right"><?php echo $aVilla ?></td>
        </tr>
    </table>
    <hr />
    <table class="transaksi" border=0>
        <tr>
            <th width="250px">  </th>
            <th width="250px"> </th>
        </tr>
        <tr>
            <td>ID Tamu</td><td align="right"><?php echo $idpemesan ?></td>
        </tr>
        <tr>
            <td>Nama Tamu</td><td align="right"><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Umur </td><td align="right"><?php echo $umur ?></td>
        </tr>
        <tr>
            <td>Alamat </td><td align="right"><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>Email </td><td align="right"><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Tanggal Datang </td><td align="right"><?php echo $cekin ?></td>
        </tr>
        <tr>
            <td>Tanggal Keluar </td><td align="right"><?php echo $cekout ?></td>
        </tr>
        <tr>
            <td>Total Hari </td><td align="right"><?php echo $hari ?></td>
        </tr>
    </table>
    <hr />
        <table class="villa" border=0>
        <tr>
            <th width="250px">  </th>
            <th width="250px"> </th>
        </tr>
        <tr>
            <td>SubTotal</td><td align="right"><?php echo $total_harga ?></td>
        </tr>
        <tr>
            <td>Pajak</td><td align="right"><?php echo $tax ?></td>
        </tr>
        <hr>
        <tr>
            <td>Total</td><td align="right"><?php echo $total ?></td>
        </tr>
    </table>

    <div class="company">
        <p>Pembayaran Berhasil Dilakukan<br>
        Silahkan datang dan serahkan nota ini<br>
       Terima Kasih<br>
    </div>
</body>
</html>
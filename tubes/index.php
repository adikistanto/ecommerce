<?php
session_start();
if(!isset($_SESSION['transaksi'])){
    $idt = date("ymdHis");//membuat id transaksi yang unik berdasarkan waktu
    $_SESSION['transaksi'] = $idt;
}

include "config.php";
mysql_connect($HOST,$USER_NAME,$PASSWORD) or die("tidak bisa koneksi ke database");
mysql_select_db($DB);
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Toko Online</title>
<style>
table{font-family:arial;font-size:10pt}
a{color:#990000;text-decoration:none}
a:hover{text-decoration:underline}
a.beli{background-color:orange;color:white;text-decoration:none}
a.beli:hover{background-color:#75923C;color:white;text-decoration:none}
.tombollanjut{border:black 1px solid; padding:1}
.ukuran{font-size:10px}
.keranjang{border-bottom:#75923C 1px solid}
</style>
</head>

<body topmargin="0" leftmargin="0" style="font-family:arial">
<center>
<table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" width="800" height="90">
  <tr>
    <td width="521" height="50" bgcolor="#FFCC00"><b>Toko 
    Online</b></td>
    <td width="267" height="50" bgcolor="#FFCC00">
<?php
$idtransaksi = $_SESSION['transaksi'];
$keranjangx = mysql_query("select * from detail_penjualan where idpenjualan='$idtransaksi'");
$pesan = 0;
while($psn = mysql_fetch_array($keranjangx)){
    $pesan = $pesan + $psn['qty'];
}
            ?>
    <img border="0" src="Shopping_Cart.png" align="left" width="64" height="64"><b><font size="6"><?php echo $pesan;?></font></b>
    Pesanan
<br>
<?php
if($pesan>0){
    echo "<a href=keranjang.php>[lihat]</a>";
}
?>
</td>
  </tr>
  <tr>
    <td width="800" height="38" colspan="2">
<!----kontennya di sini----------------------------------->
<?php
$baju = mysql_query("select * from barang order by idbarang desc");
while($b = mysql_fetch_array($baju)){
    $idbarang[] = $b['idbarang'];
    $gambar[] = $b['file_gambar'];
    $harga[] = $b['harga'];
    $nama[] = $b['nama'];
    $stok[] = $b['stok'];

}
$jumlah = count($idbarang);
$baris = floor($jumlah/3);
if(($jumlah%3) > 0){
    $baris = $baris + 1;
}
?>
<center>
<table border="0" cellpadding="10" cellspacing="0" style="font-family:arial;" bgcolor="#D7E4BC">
<?php
$k = 0;
for($i=0;$i<$baris;$i++){
    echo "<tr>";
    for($j=0;$j<3;$j++){
        $optionhtml = "";
        echo "<td width=\"33%\">";
		if (empty($idbarang[$k])){
			echo "<table border=0 cellpadding=0 cellspacing=0 width=100 height=100>";
            echo "<tr>
					<td width=\"50%\" height=\"20\"><font size=\"1\"></font></td>
					<td width=\"50%\" height=\"20\"></td>
                </tr>
                <tr>
					<td width=\"100%\" height=\"80\" colspan=\"2\" valign=bottom></td>
                </tr>
                </table>
                <div style=\"padding:2\">
                
                </div>";
		}
        else{
            echo "<table border=0 cellpadding=0 cellspacing=0 width=100 height=100 background=\"".$gambar[$k]."\">";
            echo "<tr>
                <td width=\"50%\" height=\"20\" bgcolor=\"#75923C\"><font size=\"1\">".$harga[$k]."</font></td>
                <td width=\"50%\" height=\"20\">&nbsp;</td>
                </tr>
                <tr>
                <td width=\"100%\" height=\"80\" colspan=\"2\" valign=bottom>
                <a href=\"inputkeranjang.php?idbarang=".$idbarang[$k]."\" class=beli>&nbsp; Beli &nbsp;</a></td>
                </tr>
                </table>
                <div style=\"padding:2\">
                <font size=\"2\">".$nama[$k]." </font>
                <br>
                <font size=1 face=verdana color=#666666>Stock : ".$stok[$k]."
                </font>
                </div>";
        }
        echo "</td>";
        $k++;
    }
    echo "</tr>";
}
?>
</table>
<!-------------------------------------------------------->
    </td>
  </tr>
  </table>

</body>

</html>

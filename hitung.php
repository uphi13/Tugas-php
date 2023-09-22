<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
    <title>Struk Pembelian</title>
</head>
<body>
<center> 
<p>----------------------------------------------------------------------</p>
<h3>Toko Cat Jaya Berkah</h3>
<p>----------------------------------------------------------------------</p>
<table>
    <tr>
        <td><pre>Nama         : <?php echo $_POST["nama"]; ?></pre></td>
    </tr>
    <tr>
        <td><pre>Alamat       : <?php echo $_POST["alamat"]; ?></pre></td>
    </tr>
    <tr>
        <td><pre>Jenis Cat    : <?php echo $_POST["jenis"]; ?></pre></td>
    </tr>
    <tr>
        <td><pre>Warna        : <?php echo $_POST["warna"]; ?></pre></td>
    </tr>
        <td><pre>Harga        : <?php $harga = $_POST["jenis"];
        if($_POST["jenis"] == "polyurethane"){
            echo $harga = 40000;
        }elseif($_POST["jenis"] == "acrylic"){
            echo $harga = 35000;
        }elseif($_POST["jenis"] == "duco"){
            echo $harga = 30000;
        }else{
            echo "Anda belum memilih jenis cat ! Silahkan pilih jenis cat terlebih dahulu.";
        }
        ?></pre></td>
    <tr>
        <td><pre>Jumlah Beli  : <?php echo $_POST["jumlah"]; ?></pre></td>
    </tr>
</table>
<p>------------------------------------------------------------------ (*)</p>
</center>
<center>
<table>
    <tr>
        <td><pre>Total Harga : <?php $total; 
             echo "Rp." . $total = $harga * $_POST["jumlah"]; ?></pre></td>
    </tr>
    <tr>
        <td><pre>Diskon      : <?php $diskon = $_POST["jumlah"];  
        if($_POST["jumlah"] >= 5 && $_POST["jumlah"] < 10){
            echo $diskon = $harga * $_POST["jumlah"] * 5 / 100;
        } elseif($_POST["jumlah"] >= 10){
            echo $diskon = $harga * $_POST["jumlah"] * 10 / 100;
        }else{
            echo $diskon = 0;
        }
        ?></pre></td>
    </tr>
</table>
<p>------------------------------------------------------------------- (-)</p>
</center>
<center>
<tr>
    <td><b><pre>Total       : <?php $bayar;
        echo "Rp." . $bayar = $total - $diskon;
        ?></pre></b></td>
<p>----------------------------------------------------------------------</p>
<h3>THANK YOU!</h3>
</tr>
</center>
<br>
<br>
<br>
<br>
</body>
</html>


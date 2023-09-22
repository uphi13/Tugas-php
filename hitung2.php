<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
</head>
<body>

    <!-- <fieldset>
        <legend>Struk Pembelian</legend>
        <pre>=======================================</pre>
        <h3>--------Toko Cat Jaya Berkah--------</h3>
        <pre>=======================================</pre>
        <pre>Nama           : <?php echo $_POST["nama"]?></pre>
        <pre>Alamat         : <?php echo $_POST["alamat"]?></pre>
        <pre>Jenis Cat      : <?php echo $_POST["jenis"]?></pre>
        <pre>warna          : <?php echo $_POST["warna"]?></pre>
        <pre>Harga          : <?php $harga = $_POST["jenis"];
        if($_POST["jenis"] == "polyurethane"){
            echo $harga = 40000;
        }elseif($_POST["jenis"] == "acrylic"){
            echo $harga = 35000;
        }elseif($_POST["jenis"] == "duco"){
            echo $harga = 30000;
        }else{
            echo "Anda belum memilih jenis cat ! Silahkan pilih jenis cat terlebih dahulu.";
        }
        ?></pre>
        <pre>Jumlah Beli    : <?php echo $_POST["jumlah"]?></pre>
        <pre>=======================================   (*)</pre>
        <pre>Total Harga    : <?php $total;
        echo $total = $harga * $_POST["jumlah"]?></pre>
        <pre>Diskon         : <?php $diskon = $_POST["jumlah"];
        if($_POST["jumlah"] >= 5 && $_POST["jumlah"] < 10){
            echo $diskon = $harga * $_POST["jumlah"] * 5 / 100;
        } elseif($_POST["jumlah]"] >= 10){
            echo $diskon = $harga * $_POST["jumlah"] * 10 / 100;
        }else{
            echo $diskon = 0;
        }
        ?></pre>
        <pre>=======================================   (-)</pre>
        <pre>Total Bayar    : <?php $bayar;
        echo $bayar = $total - $diskon?></pre>
        <pre>=======================================</pre>
    </fieldset> -->

</body>
</html>
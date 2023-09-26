<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian</title>
    <style>
        fieldset{
			width: 250px;
			border-color: black;
			box-shadow: 2px 2px 4px #333;
		}
    </style>
</head>
<body>
    <fieldset>
        <legend>Formulir</legend>
        <pre>=======================================</pre>
        <h3>--------Toko Cat Jaya Berkah-------</h3>
        <pre>=======================================</pre>
        <form action="hitung.php" method="POST">
            <pre>Nama        : <input type="text" name="nama"></pre>
            <pre>Alamat      : <input type="text" name="alamat"></pre>
            <pre>Jenis Cat   : <select name="jenis">
                <option value="-">-</option>
                <option value="Bituminous Paint">Bituminous Paint</option>
                <option value="Chlorinated Rubber">Chlorinated Rubber</option>
                <option value="Vinyl">Vinyl</option>
            </select></pre>
            <pre>Warna Cat   : <input type="radio" name="warna" value="Biru">Biru <input type="radio" name="warna" value="Merah">Merah <input type="radio" name="warna" value="Hijau">Hijau</pre>
            <pre>Jumlah Beli : <input type="text" name="jumlah"></pre>
        <pre>=======================================</pre>
        <input type="submit" name="hitung" value="Hitung">
        <input type="reset" name="batal" value="Batal">
        </form>
    </fieldset>
</body>
</html>

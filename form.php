<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian</title>
</head>
<body>
    <fieldset>
        <legend>Formulir</legend>
        <pre>=======================================</pre>
        <h3>--------Toko Cat Jaya Berkah--------</h3>
        <pre>=======================================</pre>
        <form action="hitung.php" method="POST">
            <pre>Nama        : <input type="text" name="nama"></pre>
            <pre>Alamat      : <input type="text" name="alamat"></pre>
            <pre>Jenis Cat   : <select name="jenis">
                <option value="-">-</option>
                <option value="polyurethane">Polyurethane</option>
                <option value="acrylic">Acrylic</option>
                <option value="duco">Duco</option>
            </select></pre>
            <pre>Warna Cat   : <input type="radio" name="warna" value="Biru">Biru <input type="radio" name="warna" value="Merah">Merah <input type="radio" name="warna" value="Hijau">Hijau</pre>
            <pre>Jumlah Beli : <input type="text" name="jumlah"></pre>
        <pre>=======================================</pre>
        <!-- <button type="hitung">Hitung</button>
        <button type="batal">Batal</button> -->
        <input type="submit" name="hitung" value="Hitung">
        <input type="reset" name="batal" value="Batal">
        </form>
    </fieldset>
</body>
</html>
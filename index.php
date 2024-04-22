<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Online</title> <!-- title untuk menambahkan judul pada web-->
    <link href="style.css" rel="stylesheet"type= "text/css"><!--untuk menghubungkan css-->

</head>
<body>

<form action="hasil.php"><!--untuk menentukann lokasi url atau file script
 yang akan memperoses data yang di kirim dari form ketika di submit-->
    <h1>Kalkulator Online</h1><!--untuk mengidentifikasi judul dan sub judul dari sebuah alamat web-->
    
    <input type="number" name="angka1"><!--untuk memasukkan angka dan input type number akan
    memvalidasi dan menolak masukan selain angka-->
    <select name="operator"><!--di gunakan untuk mengambil data dari tabel tersebut-->
        <option>+</option><!--untuk menampung data yang isinya bisa berpotensi kosong(none)-->
        <option>-</option><!--untuk menampung data yang isinya bisa berpotensi kosong(none)-->
        
</select>
<input type="number" name="angka2"><!--untuk memasukkan angka dan input type number akan
    memvalidasi dan menolak masukan selain angka-->
<button type="submit">Hitung</button><!--untuk mengirimkann formulir-->
</form>

</body>
</html>
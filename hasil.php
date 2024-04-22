<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Kalkulator Online</title><!--untuk menambahkan judul pada web-->
    <link href="style.css" rel="stylesheet"type= "text/css"><!--untuk menghubungkan dengan css-->
    
    
</head>
<body>

<form >
    <h1>Hasil Perhitungan</h1><!--untuk mengidentifikasi judul dan sub judul dari sebuah alamat web-->
    <?php
    $angka1 = $_GET['angka1'];/*get dalam bahasa program php digunakan untuk mengirim data yang sifatnya sensitif*/
    $angka2 = $_GET['angka2'];/*get dalam bahasa program php digunakan untuk mengirim data yang sifatnya sensitif*/
    $operator = $_GET['operator'];/*get dalam bahasa program php digunakan untuk mengirim data yang sifatnya sensitif*/

    if ($operator == '+') { /*fungsi if berfungsi untuk menjalankan suatu segmen fungsi berdasarkan pemeriksaan kondisi tertentu melalui operator logical */
        $hasil = $angka1 + $angka2; 
    }else if($operator == '-') { /*else if digunakan untuk pengontrolan terhadap kondisi yang lain dalam satu blok if */
        $hasil = $angka1 - $angka2;
    
}
echo $angka1 . $operator. $angka2 . '='. $hasil; /*echo berfungsi untuk menampilkan hasil teks ke layar*/
    ?>
    <a href="index.php">Kembali</a><!--untuk menentukan url halaman yang di tuju oleh link tersebut-->
    <a type="button" onclick="return window.print();">Cetak</a><!--untuk menentukan url halaman yang di tuju oleh link tersebut-->



</form>

   
</body>
</html>
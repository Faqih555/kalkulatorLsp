<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Hasil</h1>

        <?php
            if(isset($_GET['angka1']) && isset($_GET['angka2']) && isset($_GET['operator'])) {
                $angka1 = $_GET['angka1'];
                $angka2 = $_GET['angka2'];
                $operator = $_GET['operator'];
                $hasil = '';
                
                if($operator == '+' ){
                   $hasil =  $angka1 + $angka2;
                } else if($operator == '-' ){
                    $hasil =  $angka1 - $angka2;
                 } else if($operator == ':' ){ 
                    $hasil =  $angka1 / $angka2;
                 } else if($operator == 'x' ){ 
                    $hasil =  $angka1 * $angka2;
                 }
                
                echo $angka1 . " " . $operator . " " . $angka2 . " = " . $hasil;
            } else {
                echo "angka tidak dimasukkan"; 
            }
        ?>
        <br>
        <a href="index.php">Kembali</a> 
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 1</title>
</head>
<body>

<h2>Bài 1: Các số chẵn từ 1 đến N</h2>

<?php

// Tạo số ngẫu nhiên từ 1 đến 100
$N = rand(1, 100);

echo "N = $N <br>";
echo "Các số chẵn: ";

for ($i = 1; $i <= $N; $i++) {

    // Kiểm tra i có chia hết cho 2 không
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

?>

<h2>Bài 2</h2>
<?php
    for($i = 1;$i <= 10; $i++){
        echo "<br>";
        for($j =1; $j <= 10; $j++){
            echo $i . "*".$j."=".$i*$j."<br>";
        }
    }
?>

<h2>Bài 3: Kiem tra so N</h2>

<?php

// Tạo số ngẫu nhiên từ 1 đến 100
$N = rand(-100, 100);
$uocSON = 0;
$uocSo=0;
$tong =0;
$so = 0;
echo "N = $N <br>";
    // Kiểm tra N co phai so duong hay khong
    if ($N > 0) {
        echo "Cac uoc so cua ".$N." la: ";
        for($i = 1; $i<=$N;$i++){
            if($N % $i == 0){
                $uocSON++;
                echo $i." "; 
            }
        }
        // Kiem tra N co phai la so nguyen to hay khong
        if($uocSON == 2) echo "<br>".$N." la so nguyen to";
        else echo "<br>".$N. " khong phai la so nguyen to";
        // Tong cac so nguyen to < N
        echo "<br>Tong cac so nguyen to < N: ";
        for($j =1; $j <= $N; $j++){
            $so++;
            for($k =1; $k <= $j ; $k++){
                if($j % $k == 0) $uocSo++;
            }
            if($uocSo == 2) $tong+=$so;
            $uocSo =0;
        }
        echo $tong;
        //Kiem tra so chinh phuong
        
    }
    else {
        echo $N." khong phai so duong";
    }

?>
</body>
</html>
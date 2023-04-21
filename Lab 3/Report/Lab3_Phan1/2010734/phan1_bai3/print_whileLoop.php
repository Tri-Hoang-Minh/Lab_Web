<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phan 1 - Bài 3 - While LOOP</title>
</head>

<body>
    <?php
    $myarr = array(100);
    echo 'Kết quả xuất ra màn hình các số lẻ từ 0 đến 100: <br>';
    $i = 0;
    while ($i <= 100) {
        if ($i % 2 != 0) {
            $myarr = $i;
            echo $myarr . ' ';
        }
        $i++;
    }
    ?>
</body>

</html>
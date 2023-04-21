<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phan 1 - Bài 3 - For LOOP</title>
</head>
<body>
    <?php  
    $myarr=array(100);
    echo 'Kết quả xuất ra màn hình các số lẻ từ 0 đến 100: <br>';
       for ($i= 0 ; $i <= 100 ; $i++)
       {
                if ($i % 2 != 0)
                {
                    $myarr=$i;
                    echo $myarr.' ';
                }
       } 
    ?>
</body>
</html>
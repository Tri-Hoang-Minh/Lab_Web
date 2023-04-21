<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 1 - Bài 2</title>
</head>

<body>
<form action="phan1_bai2.php" method="get">
    Nhập số nguyên dương: <input type="text" name="value" value="">
    <button type="submit">Nhập</button>
</form>

    <?php
    $integer=0;
    function remainder($integer)
    {   
        $value = $integer % 5;
        echo 'Kết quả trả về: <br>';
        switch ($value) {
            case 0:
                // chuỗi câu lênh
                echo 'Hello';
                break;
            case 1:
                // chuỗi câu lệnh
                echo 'How are you?';
                break;
            case 2:
                // chuỗi câu lệnh
                echo "I'am doing well, thank you";
                break;
            case 3:
                // chuỗi câu lệnh
                echo 'See you later';
                break;
            case 4:
                // chuỗi câu lệnh
                echo 'Good-bye';
                break;
            default:
                // chuỗi câu lệnh
                echo 'Invalid value, integer must have value larger  0';
                break;
        }
    }
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {
        $value=$_GET['value'];
        // ($value > 0) ?  $integer=$value: $integer="Invalid Value";
        if($value > 0)
        {
            $integer=$value;
            remainder($integer);
        }
        else
        {
            echo 'Invalid value, integer must have value larger  0';
            
        }
    }
    


    ?>
</body>

</html>
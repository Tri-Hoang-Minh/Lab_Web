<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Phan 1 - Bai 1</title>
        <meta charset="utf-8">
        <style>
            html {
                margin: 100px;
            }
            * {
                line-height: 1.5;
                font-size: 25px;
            }
        </style>
    </head>

    <body></body>
        <?php 
            $x = 10;
            $y = 7;

            $sum = $x + $y;
            $sub = $x - $y;
            $mul = $x * $y;
            $div = $x / $y;
            $mod = $x % $y;

            echo "$x + $y = $sum <br>";
            echo "$x - $y = $sub <br>";
            echo "$x * $y = $mul <br>";
            echo "$x / $y = $div <br>";
            echo "$x % $y = $mod <br>";
        ?>
    </body>
</html>
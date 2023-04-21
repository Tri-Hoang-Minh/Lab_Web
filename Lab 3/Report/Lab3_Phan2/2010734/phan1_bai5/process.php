<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
        <?php
            $x = $_GET["x"];
            $y = $_GET["y"];
            $type = $_GET["type"];
            $result;
            if ((empty($x)) || (empty($y) && $type != "inv")) {
                echo "<h1>Missing at least one number!</h1>";
                echo "<h2><a href=\"calculation.php\">Try again</a></h2>";
                exit();
            }
            if (!is_numeric($x) || (!is_numeric($y) && $type != "inv")) {
                echo "<h1>Must be a number!</h1>";
                echo "<h2><a href=\"calculation.php\">Try again</a></h2>";
                exit();
            }
            if ($y == 0 && $type == "div") {
                echo "<h1>Second number invalid!</h1>";
                echo "<h2><a href=\"calculation.php\">Try again</a></h2>";
                exit();
            }
            if ($x == 0 && $type == "inv") {
                echo "<h1>First number invalid!</h1>";
                echo "<h2><a href=\"calculation.php\">Try again</a></h2>";
                exit();
            }

            switch ($type) {
                case "add":
                    $result = $x + $y;
                    break;
                case "sub":
                    $result = $x - $y;
                    break;
                case "mul":
                    $result = $x * $y;
                    break;
                case "div":
                    $result = $x / $y;
                    break;
                case "exp":
                    $result = $x ** $y;
                    break;
                case "inv":
                    $result = 1 / $x;   
                    break;
                default:
                    break;
            }

            echo "<h1>Kết quả: $result</h1>";
            echo "<h2><a href=\"calculation.php\">Try again - Quay lại</a></h2>";
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>




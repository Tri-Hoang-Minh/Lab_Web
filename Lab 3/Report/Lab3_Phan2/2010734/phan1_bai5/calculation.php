<!DOCTYPE html>
<html lang="en">

<head>
    <title>Phan 1 - Bai 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1> BASIC CALCULATION USE PHP LANGUAGE</h1>
    </div>

    <form action="process.php" method="get">
        <div>
            <h4> First number </h4>
            <input type="text" id="first_number" name="x" value="" size="30">
        </div>

        <div>
            <h4> Second number </h4>
            <input type="text" id="second_number" name="y" value="" size="30">
        </div>

        <div>
            <button type="submit" name="type" value="add" class="btn btn-outline-danger">+</button>
            <button type="submit" name="type" value="sub" class="btn btn-outline-danger">-</button>
            <button type="submit" name="type" value="mul" class="btn btn-outline-danger">x</button>
            <button type="submit" name="type" value="div" class="btn btn-outline-danger">/</button>
            <button type="submit" name="type" value="exp" class="btn btn-outline-danger">^</button>
            <button type="submit" name="type" value="inv" class="btn btn-outline-danger">~</button>
        </div>
    </form>
    <h2>Hướng dẫn sử dụng</h2>
    <!-- Scrollable modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Click here to view instruction
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Hướng dẫn sử dụng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>B1: Chúng ta nhập giá trị đầu tiên ở ô first number.</li>
                        <li>B2: Chúng ta nhập giá trị thứ hai ở ô second number.</li>
                        <li>B3: Chọn phép tính cần tính toán.</li>
                        <li>NOTE: Không bỏ soát việc nhập hai giá trị first value and second value</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P1 - Bài 4</title>
    <style>
        tr, td{
            border: 1px solid black;
            padding: 0;
            margin: 0;
            width: 50px;
            height:30px;
            text-align: center;
         }
         table
         {
            border-collapse: collapse;
            background-color: yellow;
            padding:0;
            margin:auto;
            width: 350px;
            height: 30px;
         } 

    </style>
</head>

<body>
    <table>
        <?php 
        $temp2=0;
          for ($i=1 ; $i<=7 ; $i++)
          {  
            echo "<tr>" ;
            $temp1=$i;
            $temp2=0;
            for ($j=1; $j<=7 ; $j++)
            {    
                $temp2=$temp2+$temp1;
                 echo "<td>".$temp2."</td>";
            }
            echo "</tr>" ;
          }    
        ?>
    </table>
</body>

</html>
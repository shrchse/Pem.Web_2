<?php
    $uts = 0.4;
    $uas = 0.6;
    $data = array (
        array (87, 65),
        array (76, 79),
        array (50, 41),
        array (60, 75)
    );
    $dataForGrade = array(
        (($data[0][0] * $uts) + ($data[0][1] * $uas)),
        (($data[1][0] * $uts) + ($data[1][1] * $uas)),
        (($data[2][0] * $uts) + ($data[2][1] * $uas)),
        (($data[3][0] * $uts) + ($data[3][1] * $uas))
    );
    $j =0;
    do {
        $grade = array();
        for ($x = 0; $x <= 3; $x++){
           if ($dataForGrade[$x] < 50){
            $grade[$x] = "E";
            } else if ($dataForGrade[$x]>= 50 && (($data[$x][0] * $uts) + ($data[$x][1] * $uas))<= 59){
            $grade[$x] = "D";
            } else if ($dataForGrade[$x]>= 60 &&(($data[$x][0] * $uts) + ($data[$x][1] * $uas))<= 69){
            $grade[$x] = "C";
            } else if ($dataForGrade[$x] && (($data[$x][0] * $uts) + ($data[$x][1] * $uas))<= 79){
            $grade[$x] = "B";
            } else if ($dataForGrade[$x]>= 80){
            $grade[$x] = "A";
            } $j++;
        }
    }while ($j < 5);
    $dataFinal = array (
        array ("Andi", "2101001", 87, 65, $dataForGrade[0], $grade[0]),
        array ("Budi", "2101002", 76, 79, $dataForGrade[1], $grade[1]),
        array ("Tono", "2101003", 50, 41, $dataForGrade[2], $grade[2]),
        array ("Jessica", "2101004", 60, 75, $dataForGrade[3], $grade[3])
    );?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, tr, td{
                border: 1px solid;
            }
            table{
                border-collapse: collapse;
                text-align: left;
                width: 50%;
            }
            th{
                background-color: lightgrey;
            }
        </style>
    </head>
    <body>
        <table>
            <th>Nama</th>
            <th>NIM </th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        <?php
        for ($i = 0; $i <= 3; $i++){
            echo "<tr>";
            for ($j = 0; $j <= 5; $j++){
                echo "<td>";
                echo $dataFinal[$i][$j];
            }
        }
        ?>
        </table>
    </body>
</html>
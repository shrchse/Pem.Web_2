<?php
    $student = [
        ["numb" => 1, "name" => "Ridho", "Mk" => [
            ["mkd" => "Pemrograman I", "sks" => 2],
            ["mkd" =>"Praktikum Pemrograman I", "sks" => 1],
            ["mkd" =>"Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["mkd" =>"Arsitektur Komputer", "sks" => 3]  
            ]
        ],
        ["numb" => 2, "name" => "Ratna", "Mk" => [
            ["mkd" => "Basis Data I", "sks" => 2], 
            ["mkd" => "Praktikum Basis Data I","sks" => 1],
            ["mkd" => "Kalkulus", "sks" => 3]  
            ]
        ],
        ["numb" => 3, "name" => "Tono", "Mk" => [
            ["mkd" => "Rekayasa Perangkat Lunak", "sks" => 3], 
            ["mkd" => "Analisis Perancangan Sistem", "sks" => 3,],
            ["mkd" => "Komputasi Awan", "sks" => 3],
            ["mkd" => "Kecerdasan Bisnis", "sks" => 3],
            ]
        ]
    ];
    for($i = 0; $i < count($student); $i++){    //loop for each student
        $nilai = 0;
        for($j = 0; $j < count($student[$i]["Mk"]); $j++){      //sum sks
            $nilai += $student[$i]["Mk"][$j]["sks"];
        }$student[$i]["totalsks"] = $nilai;
            if($student[$i]["totalsks"] < 7){
                $student[$i]["status"] = "Revisi KRS";
            } else {
                $student[$i]["status"] = "Tidak Direvisi";
            }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, tr, td{
                border: 0.5px solid;
                padding: 3px;
            }
            table{
                border-collapse: collapse;
                text-align: left;
                width: 50%;
            }
            th{
                background-color: lightgrey;
            }
            .revisi{
                background-color: red;
            }
            .no_revisi{
                background-color: green;
            }
        </style>
    </head>
    <body><table>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
            <?php
                for($i = 0; $i < count($student); $i++){    // make table for each student
                    for($j = 0; $j < count($student[$i]["Mk"]); $j++){      // inside, make table row for each MK
                        echo "<tr>";
                        if ($j == 0){
                            echo "<td>".$student[$i]["numb"]."</td>";
                            echo "<td>".$student[$i]["name"]."</td>";
                            echo "<td>".$student[$i]["Mk"][$j]["mkd"]."</td>";  // full table
                            echo "<td>".$student[$i]["Mk"][$j]["sks"]."</td>";
                            echo "<td>".$student[$i]["totalsks"]."</td>";
                            if($student[$i]["totalsks"] < 7){
                                echo "<td div class = 'revisi'>".$student[$i]["status"]."</div></td>";                        
                            }
                            else{
                                echo "<td div class = 'no_revisi'>".$student[$i]["status"]."</div></td>";                        
                            }
                        } else {
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td>".$student[$i]["Mk"][$j]["mkd"]."</td>"; //because index 1-n doesnt have pair
                            echo "<td>".$student[$i]["Mk"][$j]["sks"]."</td>";
                            echo "<td></td>";
                            echo "<td></td>";
                        }
                        echo "</tr>";
                    }
                } echo "</table>";  ?>
    </body>
</html>
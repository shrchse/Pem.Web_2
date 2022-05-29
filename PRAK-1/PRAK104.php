<!DOCTYPE html>
<html>
    <head>
    <title> Praktikum 4 </title>
        <style> 
            table, td, th {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th> Daftar Smartphone Samsung</th>
            </tr>
            <?php
                $myarr = array ("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover5");
                foreach ($myarr as $obj):
            ?>
            <tr><td><?php echo $obj ?></td></tr>
            <?php endforeach?>
        </table>
    </body>
</html>


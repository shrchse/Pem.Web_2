<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum 4</title>
        <style>
            table, td, th {
                border: 1px solid black;
            }
            th {
                background-color: red;
                height: 50px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php
                $myarr = ["SG1" => "Samsung Galaxy S22", "SG2" => "Samsung Galaxy S22+", 
                "SG3" => "Samsung Galaxy A03","SG4" => "Samsung Galaxy Xcover5"];
            ?>
            <tr>
                <td>
                    <?php echo $myarr ["SG1"];?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $myarr ["SG2"];?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $myarr ["SG3"];?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $myarr ["SG4"];?>
                </td>
            </tr>
        </table>
    </body>
</html>
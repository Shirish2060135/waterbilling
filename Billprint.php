<?php
include("db_conn.php");
$i = $_GET['cid'];
$f = $_GET['fullname'];
$a = $_GET['address'];
$c = $_GET['cont'];
$un= $_GET['unit'];
$rt=$_GET['rate'];
$dis=$_GET['dis'];
$tot=$_GET['tot'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <?php
            include 'db_conn.php';
            $html='<table>
            <tr>
            <td>Customer ID</td>
            <td>Full name</td>
            <td>Address</td>
            <td>Contact</td>
            <td>Unit</td>
            <td>Rate</td>
            <td>Discount</td>
            <td>Total</td>
            </tr>';

            $html.='
            <tr>
            <td>'.$i.'</td>
            <td>'.$f.'</td>
            <td>'.$a.'</td>
            <td>'.$c.'</td>
            <td>'.$un.'</td>
            <td>'.$rt.'</td>
            <td>'.$dis.'</td>
            <td>'.$tot.'</td>
            </tr>';

            $html.='</table>';
            header('Content-Type:application/xls');
            header('Content-Disposition:attachment;filename=Billdetail.xls');
            echo $html;
            ?>
 
</section> 
</body>
</html>
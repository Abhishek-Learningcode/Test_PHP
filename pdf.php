<?php
include "db.php";
require("vendor/autoload.php");
$result=$conn->query("select * from valid1");
$pdf= new TCPDF();
$pdf->AddPage();
$pdf->setfont("times","I","10");
$pdf->Cell("0","10","Emp_table","1","1","C");
$html='<table border="1" cellpadding="10" cellspacing="8" style="background-color:lightbule" >
<tr>
<td>Productid</td>
<td>Productname</td>
<td>Quantity</td>
</tr>';
while ($row=$result->fetch_assoc()){
    $html.='<tr>
    <td>'.$row['booktitle'].'</td>
    <td>'.$row['authorname'].'</td>
    <td>'.$row['genre'].'</td>
    <td>'.$row['totalcopies'].'</td>
    <td>'.$row['availablecopies'].'</td>
    </tr>';
}
$html.='</table>';
$pdf->writeHtml($html,true,false,true,false,'');
$pdf->Output("emp.pdf","D");


?>
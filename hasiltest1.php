<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Data Purchase Requisition </h1>
<?php
$RequestNumber =$_POST['RequestNumber'];
$Date =$_POST['Date'];
$Suppliers =$_POST['Suppliers'];
$ChooseRequester =$_POST['ChooseRequester'];
$QcCheck =$_POST['QcCheck'];
$Note =$_POST['Note'];
$Status =$_POST['Status'];
?>
<table border=1 bgcolor="Cyan">
<tr>
<td colspan=2 align="center"><b> Data Purchase Requisition </b></td>
</tr>
<tr>
<td>Request Number</td><td><?php echo $RequestNumber;?></td>
</tr>
<td>Date</td><td><?php echo $Date;?></td>
</tr>
<td>Suppliers</td><td><?php echo $Suppliers;?></td>
</tr>
<td>Choose Requester</td><td><?php echo $ChooseRequester;?></td>
</tr>
<td>Qc Check</td><td><?php echo $QcCheck;?></td>
</tr>
<td>Note</td><td><?php echo $Note;?></td>
</tr>
<td>Status</td><td><?php echo $Status;?></td>
</tr></table>
</body>
</html>
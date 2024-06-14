<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Purchase Requisition</h1>
    <form action="hasiltest1.php" method="post">
    <pre>
    RequestNumber      :<input type="text" name="RequestNumber">
    Date               :<input type="date" class="form-control" required name="Date">
    Suppliers          :<select name="Suppliers"> <option value="-pilih-"> <option velue="PT Indofood">PT Indofood <option value="PT Mayora">PT Mayora <option value="Unilever">Unilever </select>
    ChooseRequester    :<select name="ChooseRequester"> <option value="-pilih-"> <option velue="IT">IT <option value="Marketing">Marketing <option value="CIO">CIO </select>
    QcCheck            :<input type="radio" name="QcCheck" value="Yes">Yes <input type="radio"name="QcCheck" value="No">No
    Note               :<textarea name="Note" rown="5" cols="40"></textarea>
    Status             :<input type="text" name="Status">
    </pre>      
    <input type="submit" value="Submit"><input type="reset" value="Cancle">
</body>
</html>
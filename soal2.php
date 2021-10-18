<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="0" cellspacing="0" align="center">
        <thead>
            <form action="data2.php" method="get">
            <tr>
                <th colspan="2" bgcolor="#ff4d4d">Kalkulator</th>   
            </tr>
        </thead>
        <tbody>
           <tr>
               <td bgcolor="#ffb3b3">Angka Pertama</td>
               <td><input type="number" name="angkapertama" id=""></td>
           </tr>
        <tr>
            <td bgcolor="#ffb3b3">Angka kedua</td>
            <td><input type="number" name="angkakedua" id=""></td>
        </tr>
        <tr>
            <td bgcolor="#ffb3b3">Operator</td>
            <td ><input type="operator" name="operator" id=""></td>
        </tr>
        <tr>
            <td bgcolor="#ff4d4d"></td>
            <td bgcolor="#ff4d4d">
                <button type="submit" name="submit">Submit</button>
                <button type="reset">Reset</button>
                
            </td>
            
        </tr>
        </tbody>
        </form>
    </table>
</body>
</html>
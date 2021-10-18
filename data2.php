<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $x=$_GET["angkapertama"];
     $y=$_GET["angkakedua"];
     $operator=$x=$_GET["operator"];

    
    ?>
    

    <table border="1"  cellpadding="0" cellspacing="0" align="center">
        <thead>
            <tr>
                <th colspan="2" bgcolor="#b3ff1a">Kalkulator</th>   
            </tr>
        </thead>
        <tbody>
           <tr>
               <td bgcolor="#4ce600">Angka Pertama</td>
               <td width="100px" height="1px" align="middle"><?=$_GET ["angkapertama"];?> </td>
           </tr>
        <tr>
            <td bgcolor="#4ce600">Angka kedua</td>
            <td  width="100px" height="1px" align="middle"><?=$_GET ["angkakedua"];?> </td> 
        </tr>
        <tr>
            <td bgcolor="##4ce600">Operator</td>
            <td width="100px" height="1px" align="middle"><?=$_GET ["operator"];?> </td>
        </tr>
        <tr>
            
            <td bgcolor="#b3ff1a" colspan="2" align="middle">
        
                Hasil= <?php
                $x=$_GET ["angkapertama"];
                $y=$_GET ["angkakedua"];
                $Operator=$_GET ["operator"];
                if ($Operator=="+") {echo $x + $y ;
                }
                elseif ($Operator=="-") {echo $x-$y ;    
                }
                elseif ($Operator=="/") {echo $x/$y ;   
                }
                elseif ($Operator=="*") {echo $x*$y ;      
                }
            ?>
        </tr>
        </tbody>
    </table>
 
 
</body>
</html>
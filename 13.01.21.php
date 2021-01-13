<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>13.01.21</title>
</head>
<body>
<p>Compute the sum of i*(i+i), where i starts from 1 and goes up to n (given the user)</p>

<form action="13.01.21.php" method="get">
    input a number: <input name="n">
    <input type="submit" value="ComputeSum">
</form>
<?php
    if(isset($_GET["n"])){
        $sum=0;
        $input=$_GET["n"];
        for($i=1;$i<=$_GET["n"];$i++){
            $i*($i+1);
            print $i."*".($i+1);
            if($i==$_GET["n"]){
              print "=";
            } else {
              print "+";
            }
            $sum=$sum+$i*($i+1);
        }
        echo $sum;
    }
?>

</body>
</html>
<html>
<head>
<meta charset="utf-8" >
</head>
<body>
1. Дане натуральне n, обчислити n! ( 0! = 1, n! = n . (n - 1)!). 
<form method="POST" >
 Введіть n: <input type="text" name="n">
 <br>
 <input type="submit" name="ok" value="n!">
</form>
<div>
<?php
$n=$_POST['n'];
$f=1;
 for($i=0;$i++ <$n;){
	 $f *= $i;
 };
 echo "Result:<br>";
 echo " $n ! = $f";
?>
</div>
</body>
</html>
<html>
<head>
<meta charset="utf-8" >
</head>
<body>
2.Послідовність Фібоначчі визначається так: a0 = 1, a1 = 1, ak = ak-1 + ak-2 при k>1.
Дане n, обчислити an. 
<form method="POST" >
 Введіть n: <input type="text" name="n чисел фібоначчі">
 <br>
 <input type="submit" name="ok" value="n чисел фібоначчі">
</form>
<div>
<?php

$n=$_POST['n чисел фібоначчі'];
$a0=$a1=1;
echo "a0 = $a0<br>a1 = $a1<br>";
 for($i=1;++$i; $i<=$n){
	$ak=$a0+$a1;
	echo "a$i = $ak<br>";
	$a0=$a1;
	$a1=$ak;
 };
 echo "Result...:<br>";

?>
</div>
</body>
</html>
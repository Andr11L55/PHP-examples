<html>
<head>
<meta charset="utf-8" >
</head>
<body>
Подати php функцію, що реалізує наступну задачу: 

Скласти програму, що друкує квадрати всіх натуральних чисел від 0 до заданого натурального n.

<form method="POST" >
 Введіть N: <input type="text" name="N">
 <br><br>
 <input type="submit" name="ok" value="квадрати всіх натуральних чисел від 0 до заданого натурального n">
</form>
<div>
<?php
 $N= $_POST['N'];
$r=0;
if($N>0){
	for($i=0;$i<=$N;$i++){
		$r=pow($i,2);
		echo "$i<sup>2</sup> = $r;<br>";
	};
}
else{
	echo "No result";
}


//echo "R= $R <br>";

?>
</div>
</body>
</html>
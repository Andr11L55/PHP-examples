<html>
<head>
<meta charset="utf-8" >
</head>
<body>
39. Вивести якнайменше з цілих чисел k, для яких сума 1 + 1/2 + . + 1/k буде більше
або рівна N, і саму цю суму.
<form method="POST" >
 Введіть N: <input type="text" name="N">
 <br>
 <input type="submit" name="ok" value="Сума обернених">
</form>
<div>
<?php
$N=$_POST['N'];
$S=0;
$k=0;
while($S < $N){
	$k++;
	$S+= 1/$k;
	
};

echo "Значення суми = $S при найменше значення k= $k <br>"

?>
</div>
</body>
</html>
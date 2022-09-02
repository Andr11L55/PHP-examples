<html>
<head>
<meta charset="utf-8" >
</head>
<body>
27. Дано ціле число N (> 0). Знайти суму 1^
N
+ 2^(N-1)
+ . + N^1

<form method="POST" >
 Введіть N: <input type="text" name="N">
 <br>
 <input type="submit" name="ok" value="Сума 1^N+ 2^(N-1)+ . + N^1">
</form>
<div>
<?php
$N=$_POST['N'];
$S=0;
$p=$N;
for($i=1;$i<=$N;$i++){
	$S+=pow($i,$p);
	$p--;
	
	
	
};

echo "Значення суми = $S при  значеннi N= $N .<br>"

?>
</div>
</body>
</html>
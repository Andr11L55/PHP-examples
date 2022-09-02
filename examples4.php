<form method="POST" >
<p>49. Дано слово. Переставити перших три і останні три букви,
зберігши порядок їх
проходження </p>
Введіть слово : <input type="text" name="W">
 <br>
 <input type="submit" name="ok" value="Трансформоване слово">
</form>
<div>
<?php
//echo substr('abcdef', 0, 4); // abcd
//$rest = substr("abcdef", -3, 1); // возвращает "d"
//$rest = substr("abcdef", 2, -1); // возвращает "cde"
 $W=$_POST['W'];
 echo " Введено слово = $W <br>";

 $W0=substr($W,0,3);
 $WM=substr($W,3,-3);
 $WE=substr($W,-3,3);
 echo "W0=$W0 WM=$WM WE=$WE<br>";
 $W=$WE.$WM.$W0;
 echo " Змінене слово = $W <br>";

?>
</div>
</body>
</html>
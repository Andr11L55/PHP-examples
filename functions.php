<!-- 14_php_functions.php -->
<HTML>
<HEAD>
<TITLE> php_start </TITLE>
<meta charset="utf-8">
</HEAD>
<BODY>
 <?php
 function mySqr($n){
return pow($n,2);
 };
 $number= 5;
 $value = mySqr($number);
 echo "Квадрат числа $number дорівнює $value<br><br>";
 echo "В іншому запису: <br>";
 echo "Квадрат числа $number дорівнює: ". mySqr($number);


 // статичні змінні
 function funcCount(){
 static $count = 0;
 // $count = 0;
 $count++;
 echo "<br> Виклик N $count ";
 };
 echo "<br>";
 for($i =0; $i<5; $i++)
 funcCount();
?>
<form action="" method="post">
<p>Метод POST</p>
<!-- <form action="" method="get"> -->
<!-- <p>Метод GET</p> -->
<p>Ваше ім'я :
<input type="text" name="name"></p>
<p>Ваш вік:
<input type="text" name="age"></p>
<p><input type="submit"></p>
</form>
<br> Вітаю <?php echo htmlspecialchars($_POST['name']);?> із <?php echo (int)($_POST['age']);?>-річчям.
<!-- <form action="" method="get"> -->
<!-- <p>Метод GET</p> -->
</BODY>
</HTML>
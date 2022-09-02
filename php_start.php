<!-- 1_php_start.php -->
<HTML>
<HEAD>
<TITLE> php_start </TITLE>
<meta charset="utf-8">
</HEAD>
<BODY>
 <?php
 echo "PHP працює!! <br>";
 echo "<br>";
 $dat=date("d.m.y");
 echo "дата(дн,міс,рік) = ".$dat . "<br>";
 echo "час = ". date("h:i:s") . "<br>";

 $my_int = 5;
 $my_real = 5.75;
 $my_string= "Hello!";
 $s=$my_string;
 $my_boolean= true;
 $my_null=null;
 echo "тип змінної із значенням $my_int - ". gettype($my_int). "<br>";
 echo "тип змінної із значенням $my_real - ". gettype($my_real). "<br>";
 echo "тип змінної із значенням $my_string - ". gettype($my_string). "<br>";
 echo "$s[0] <br> $s[1] <br> $s[2] <br> $s[3] <br> $s[4] <br>";
 echo "тип змінної із значенням $my_boolean - ". gettype($my_boolean). "<br>";
 echo "тип змінної із значенням null - ". gettype($my_null). "<br><br>";
 $var1=-5;
 if (isset($var1)){
 echo "Змінна із значенням $var1 існує на вході". "<br>";
 };
 $var1 = ($var1<0) ? -$var1 : $var1;
 echo "модуль var1=".$var1. "<br>";

 if (isset($var2)){
 echo "Змінна із значенням $var2 існує". "<br>";
 };


 unset($var1);
 echo "Спроба вивести змінну var1 ( $var1) після видалення". "<br><br>";

 // константи
 define("pi",3.14);
 echo "константа рі = ".pi. "<br><br>";

 echo "функції для відлагодження:"." <br><br> ";
 echo "print_r : <br>";
 $a = array('a' => 'apple',
 'b' => 'car',
'c' => 'dog' );
 print_r($a);
 echo "<br>"
 
?>
</BODY>
</HTML>
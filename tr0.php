<!-- 14_0_php_array.php -->
<!--https://www.youtube.com/watch?v=UkdxORMFmYg-->
<HTML>
<HEAD>
<TITLE> php_start </TITLE>
<meta charset="utf-8">
</HEAD>
<BODY>
<?php
$N=445;
$S=0;
while ($N>0)
{
$S=$S+$N%10;//6
//$K++;
echo "s=$S<br>";
$N=$N/10;//45.6
echo "n=$N<br>";
}

echo "$S <br>" ;
?>
</BODY>
</HTML>
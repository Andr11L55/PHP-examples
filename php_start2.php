<!-- 2_php_controls.php -->
<HTML>
<HEAD>
<TITLE> php_start </TITLE>
<meta charset="utf-8">
</HEAD>
<BODY>
 <?php

 // IF ELSE
 $items=11;
echo "Обсяг замовлення $items :<br>";
if ($items > 10){
 echo "Ви маєте 10% знижки <br>";
 }else{
 echo "Ви маєте 5% знижки <br>";
}
//WHILE
echo "<br> Послідовність нарощення значень замовлень: <br>";
while($items < 15){
$items ++ ;
echo "$items<br>";
};
// DO WHILE
echo "<br> Продовження послідовності значень замовлень: <br>";
do{
echo "$items<br>";
}
while($items++ < 20);
// FOR
echo "<br> Нова послідовність значень замовлень: <br>";
for ($items = 0;$items++ < 5; ){
echo "$items<br>";
}
// FOREACH
echo "<br><center> <b>Константи сервера: </b></center>
<br><br>";
foreach($_SERVER as $k => $v){
echo "<b>$k</b> => <b>$v</b><br>";
};
?>
</BODY>
</HTML>
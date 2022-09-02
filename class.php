<!-- 15_php_simple_class.php -->
<!-- https://www.youtube.com/watch?v=ZT7dgmqsLxE -->
<HTML>
<HEAD>
<TITLE> php_start </TITLE>
<meta charset="utf-8">
</HEAD>
<BODY>
 <?php

 class Shop{
 Private $name;

 public function naming($name){
 $this -> name = $name ;
 echo $this->name;

 }
 }
$product = new Shop;
 $product->naming("Adidas");
//$product->name = "Nike";
?>
</BODY>
</HTML>
<html>
<body>
<?php
class DestructableClass {
function __construct()
{
echo "Construction <br>";
print "Інфо про об'єкт: " ;
$this->name = "DestructableClass";
}
 function __destruct()
{
echo "<br> Destruction: ".$this->name."<br>";
}
 }
$obj = new DestructableClass();
var_dump($obj);
?>
</body>
</html>
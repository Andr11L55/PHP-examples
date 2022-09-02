<!—-18_5_user_this_self_2.php -->
<html>
<body>
<?php
class User {
 private static $name;
public static function setName($name1){
self::$name = $name1;
}
public static function getName() {
return self::$name;
}
}
User::setName('Ivan');
echo User::getName();
// self звертання до статичних властивостей та методів класу
?>
</body>
</html>
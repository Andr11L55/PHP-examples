<!-- 18_7_user_static.php -->
<html>
<body>
<?php
class user {
public static $name;
public static function hello(){
echo "<br>Hello ".self::$name."<br> ";
}
}
user::$name="Alex";
echo user::$name;
user::hello();
class user2 {
const SOME_CONST= 3.14;
}
echo "<br>CONST=".user2::SOME_CONST;
//user::SOME_CONST = 5.24;
echo "<br>CONST=".user2::SOME_CONST;
abstract class User3{
public $name;
public $status;
abstract public function getStatus();
}
// $user1 = new User3;
class Admin extends User3{
public function getStatus(){
echo "<br><br> abstract Admin<br>";
}
}
$user1 = new Admin;
$user1->getStatus();
interface FirstInterface{
public function getName();
}
interface SecondInterface{
public function getStatus();
}
interface ThirdInterface extends FirstInterface, SecondInterface {
}
class Test implements FirstInterface, SecondInterface{
public $name = "Alex";
public $status = "Admin";
public function getName() {
echo "<br>Name: $this->name " ;
}
public function getStatus() {
echo "<br>Status: $this->status " ;
}
}
$user3 = new Test;
$user3->getStatus();
$user3->getName();
?>
</body >
</html >
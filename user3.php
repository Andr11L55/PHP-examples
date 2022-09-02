<!—-18_4_user_this_self.php -->
<html>
<body>
<?php
class User {
 public $name ;
 public $password ;
 public $email ;
 public $city ;

 public function getName(){
 echo "<br>{name:"."$this->name"."}";
 $this->test();
}
 public function test(){
 echo "<br>test()<br>";
 }
}
$user1 = new User();
$user1->name = "Ivan";
$user1->getName();
$user2 = new User();
$user2->name = "Vasyl";
$user2->getName();
?>
</body>
</html>
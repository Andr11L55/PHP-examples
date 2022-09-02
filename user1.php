<html>
<body>
<?php
 class User {
 public $name = "name";
 public $password = "pass";
 public $email = "email";
 public $city = "city";
 public function Hello(){
 echo 'Hello<br>';
 }
 public function Hello2(){
 echo "Hello {$this->name}<br>";
 }
 function getInfo(){
 return "{$this->name} ". "{$this->surname}"; }
 }
$admin = new User();
$admin->name="Олексій";
$admin->surname = "Кубів";
$admin->Hello();
$admin->Hello2();
echo "Користувач: {$admin->getInfo()}";
?>
</body>
</html>
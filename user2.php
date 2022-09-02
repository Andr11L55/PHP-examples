<html>
<body>
<?php
class User {
 public $name ;
 public $password ;
 public $email ;
 public $city ;
 function __construct($name, $password, $email, $city)
 {
 $this->name = $name;
$this->password = $password;
$this->email = $email;
$this->city = $city;
 }
 function getInfo(){
 return "{name:"."$this->name".", pass:"."{$this->password}".",
email:"."{$this->email}".", city:"."{$this->city}"."}";
}
}
$user1 = new User("Alex","123456","alex@gmail.com","Kyiv");
echo "<br>user1=".$user1->name;
echo "<br><br>user1=".$user1->getInfo();
?>
</body>
</html>
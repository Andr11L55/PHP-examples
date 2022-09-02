<!—-18_6_user_daughter.php -->
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
class Moderator extends User {
public $info;
public $rights;
function __construct($name, $password, $email, $city,$info,$rights)
 {
parent::__construct($name, $password, $email, $city);
 $this->info = $info;
$this->rights = $rights;
 }
function getInfo(){
 $information = parent::getInfo();
 $information .= "+{info:"."$this->info".", rights:"."{$this->rights}"."}";
 return $information;
}

}
$moder = new Moderator("Ivan","123333","ivo@gmail.com","Lviv","Moderator","true");
echo "<br><br>moder=".$moder->getInfo();
class Test {
protected $info;
}
class Test2 extends Test {
public function test(){
$this->info= "test-info";
echo "<br> info =".$this->info;
}
}
$test2 = new Test2();
$test2->test();
//$test2->info = "information";
?>
</body>
</html>
<html>
<body>
<?php
 class User {
 public $name = "name";
 public $password = "pass";
 public $email = "email";
 public $city = "city";
}
$admin = new User();
$user1 = new User();
$admin->name="Олексій";
$user1->name="Андрій";
echo "admin name =".$admin->name."<br>";
echo "user1 name =".$user1->name."<br>";
$user1->surname = "Кубів";
echo "user1 surname =".$user1->surname."<br>";
?>
</body>
</html>
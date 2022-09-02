<!-- 22_Tansport_system.php -->
<html>

<body>
    <?php
class cityAir {
 public $id ;
 public $name ;
 public $distances;

function __construct($id,$name,$distances ){
 $this->id = $id;
$this->name = $name;
$this->distances = $distances;
}
}
class user {
 public $id ;
 public $name ;
 public $surname;
 public $age;
 public $totalOrdered;

function __construct($id,$name,$surname,$age,$totalOrdered ){
 $this->id = $id;
$this->name = $name;
$this->surname = $surname;
$this->age = $age;
$this->totalOrdered = $totalOrdered;
}
}
class order {
 public $id ;
 public $userID ;
 public $cityaID;
 public $citybID;
 public $volume;
public $sum ;
 public $payment ;
 public $orderDate;
 public $executeDate;
 public $containerID;

function
__construct($id,$userID,$cityaID,$citybID,$volume,$sum,$payment,$orderDate,$executeDate,$containerID){
 $this->id = $id;
$this->userID = $userID;
$this->cityaID = $cityaID;
$this->citybID = $citybID;
$this->volume = $volume;
$this->sum = $sum;
$this->payment = $payment;
$this->orderDate = $orderDate;
$this->executeDate = $executeDate;
$this->containerID = $containerID;
}
}
class TransAir{
/* public static cityAir = (id,name,distances) => ({id,name, distances}); */
private static $prise1kg1km = 0.002;
public static $orders = [];
public static $citiesAir = null;
 public static function citiesAir() {
 if (self::$citiesAir == null) {
 self::$citiesAir = array( new cityAir(0,'Київ', [1000,1500] ),
 new cityAir(1,'Львів', [2000] ),
 new cityAir(2,'Харків', [] ));
 }
 return self::$citiesAir;
 }
public static $users = null;
public static function users() {
 if (self::$citiesAir == null) {
 self::$citiesAir = array( new user(0,'Арнольд', 'Шварцнегер',1955,
1000)
 );
 }
 return self::$citiesAir;
 }
 //self::$users[]= self::user(0,'Арнольд', 'Шварцнегер',1955, 1000);
public function InsertOrder( $userID, $cityaID, $citybID, $volume) {
 $ol= count(self::$orders);
echo "<br>ol=".$ol;
$id=0;
if ($ol > 0 ) {
 $id=self::$orders[$ol-1]->id+1;
 };
$aID = $cityaID;
$bID = $citybID;
$oaID = min($aID,$bID);
$obID = max($aID,$bID);
$dist=0;
if ($oaID!=$obID) {
$dist=self::$citiesAir[$oaID]->distances[$obID-$oaID-1];
};
$sum = $dist*$volume*self::$prise1kg1km;
 $payment = false;
$orderDate= date(DATE_ATOM);
$executeDate = null;
$containerID = null;
//array_push($stack, "apple", "raspberry");
self::$orders[] = new
order($id,$userID,$aID,$bID,$volume,$sum,$payment,$orderDate,$executeDate,$containerID);
//array_push(self::$orders,self::order($id,$userID,$aID,$bID,$volume,$sum,$payment,$orderDate,$executeDate,$containerID));
}
//Підтвердження оплати
public function OrderPayment($orderID){
self::$orders[$orderID]->payment=true;
echo "<br>Підтвердження оплати:<br>";
print_r(self::$orders[$orderID]);
}
//Відправлення замовлення
public function OrderSending($orderID,$containerID){
self::$orders[$orderID]->executeDate=date(DATE_ATOM);
self::$orders[$orderID]->containerID=$containerID;
echo "<br>Підтвердження відправлення:<br>";
print_r(self::$orders[$orderID]);
}
public function InsertAirCity($newCity){
$l=count($newCity->distances);
for($i=0;$i<$l;$i++) {
self::$citiesAir[$i]->distances[]=$newCity->distances[$i];
};
self::$citiesAir[]= new cityAir($newCity->id,$newCity->name,[]);
}
};
$TA = new TransAir();
print_r(TransAir::citiesAir());
print_r(TransAir::users());
echo "<br>name0=".TransAir::$citiesAir[0]->name;
echo "<br>distances0:<br>";
print_r(TransAir::$citiesAir[0]->distances);
echo "<br>distances00:<br>".TransAir::$citiesAir[0]->distances[0];
// TA = TransAir();
$order0 = $TA->InsertOrder( 0,0,1,10);
// Перелік замовлень
echo "<br>orders:<br>";
print_r(TransAir::$orders);
//Підтвердження оплати
$TA->OrderPayment(0);
echo "<br>orders - підтвердження:<br>";
print_r(TransAir::$orders);
sleep(2);
$TA->OrderSending(0,1001) ;
//OrderSending(orders, 0,1001);
$newCity3 = new cityAir(3,'Одеса', [1200,600, 800] );
$TA->InsertAirCity($newCity3);
echo "<br>Аероміста:<br>";
print_r(TransAir::$citiesAir);
?>
</body>

</html>
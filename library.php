<html>
<body>
<?php
class book{
public $id ;
 public $name ;
 public $surname;
public $title ;
 public $year;

function __construct($id,$name,$surname,$title,$year ){
 $this->id = $id;
$this->name = $name;
$this->surname = $surname;
$this->title = $title ;
 $this->year = $year;
}
}
class HomeLibrary{
public static $books = null;
 public static function books() {
 if (self::$books == null) {
 self::$books = array( new book(0,'Ліна', 'Костенко','Маруся Чурай', '1980'),
 new book(1,'Ліна', 'Костенко','Берестечко', '1999'),
new book(2,'Ліна', 'Костенко','Записки українського
самашедшого', '2010'),
 new book(3,'Ернест', 'Хемінгуей','Прощавай зброє', '1950'),
new book(4,'Ернест', 'Хемінгуей','І сходить сонце', '1960' )
);
 }
 return self::$books;
 }


public function FindBook($search){
 echo "<br><br>пошук: ", $search;
 $result = array();

 foreach(self::$books as $book){

 $r1 = strpos($book->title, $search);
 $r2 = strpos($book->surname, $search);
 $r3 = strpos($book->year, $search);
 if (($r1 !==false) ||
 ($r2 !==false) ||
 ($r3 !==false) ) $result[] = $book;
 }
 echo "<br><br>знайдено: ";
 print_r($result);
}
public function InsertBook( $name,$surname,$title,$year) {
$bn= count(self::$books);
 echo "<br>обсяг0=".$bn;
$id=0;
if ($bn > 0 ) {
 $id=self::$books[$bn-1]->id+1;
 };
self::$books[] = new book($id,$name,$surname,$title,$year);
}
public function DeleteBook($id) {
$bn= count(self::$books);
 echo "<br>Книга на видалення:";
print_r(self::$books[$id]);
?>
<p>Чи ви хочете видалити вказану книгу?</p>
<form action="" method="post">
 <input type="submit" name="ok" value="OK" />
 <input type="submit" name="cancel" value="Cancel" />
</form>
<?php
if (isset($_POST['ok'])) {
 // They pressed OK
if ($id != $bn-1){
self::$books[$id]->name=self::$books[$bn-1]->name;
self::$books[$id]->surname=self::$books[$bn-1]->surname;
self::$books[$id]->title=self::$books[$bn-1]->title;
self::$books[$id]->year=self::$books[$bn-1]->year;
};
array_pop(self::$books);
 }
 if (isset($_POST['cancel'])) {
 // They pressed Cancel
 }
}
};
$Lib = new HomeLibrary();
echo "<br><br>задано: ";
print_r(HomeLibrary::books());
$Lib->FindBook('Бер');
$Lib->FindBook('2010');
$Lib->FindBook('Кост');
$Lib->FindBook('Хем');
$Lib->InsertBook('Ернест','Хемінгуей','Острови в океані', '1966');
$Lib->InsertBook('Квентін','Тарантіно','Одного разу в Голлівуді', '2019');
$Lib->InsertBook('Юлій','Цезар','Гальська війна', '2014');
echo "<br><br>Всі книги: " ;
print_r(HomeLibrary::books());
$Lib->DeleteBook(6);
echo "<br><br>Всі книги після видалення Квентін: ";
print_r(HomeLibrary::books());
$Lib->DeleteBook(6);
echo "<br><br>Всі книги після видалення Юлій: ";
print_r(HomeLibrary::books());
?>
</body >
</html >
<!-- 14_0_php_array.php -->
<!--https://www.youtube.com/watch?v=UkdxORMFmYg-->
<HTML>
<HEAD>
<TITLE> php_start </TITLE>
<meta charset="utf-8">
</HEAD>
<BODY>
 <?php

 $name[0] = "Alex";
 $name[1] = "Jeff";
 $name[2] = "Harvey";
 for ($i=0;$i<count($name);$i++)
 echo $name[$i]."<br>";
 $artist["Pitt"] = "Brad";
 $artist["Cruse"] = "Tom";
 $artist["Thurman"] = "Uma";
echo "<br>";
 foreach ($artist as $k => $v)
 echo "$k на ім'я $v <br>";

?>
</BODY>
</HTML>
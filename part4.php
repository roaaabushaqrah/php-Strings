<?php
echo "<h1 style='color:red; text-align:center;'>Question 13</h3>";
$arr="Twinkle,twinkle,little star,\nHow Iwonder what you are .\nUP
above the world so high,\nLike adiamond in the sky.";
var_dump(str_split($arr));
echo"<hr>";

//-------------------------
echo "<h1 style='color:red; text-align:center;'>Question 13</h3>";
echo "<br>";
$path2="www.example.com/public_html/index.php";
echo basename($path2,".php");
echo "<br>";
echo"<hr>";
//--------------------------------
echo "<h1 style='color:red; text-align:center;'>Question 14</h3>";

$str1="a";
++$str1;
echo $str1;
echo "<br>";

$str2="z";
echo ++$str2;
echo "<br>";
echo"<hr>";

//----------------------------------------------------------
echo "<h1 style='color:red; text-align:center;'>Question 15</h3>";
echo "<br>";
$mail='rayy@example.com';
 echo ltrim($mail,"rayy@");
 echo"<hr>";
 //------------------------------------
 echo"<h1 style='color:red; text-align:center;'>Question 16</h3>";
 echo"<hr>";
 echo "<br>";
 $mail2='rayy@example.com';
 echo bin2hex($mail2);
 echo "<br>";
 echo"<hr>";
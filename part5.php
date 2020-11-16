<?php
echo "<h1 style='color:red; text-align:center;'>Question 17</h3>";
$sente="The brown fox";
$newword="quick";
$location=3;
 echo substr_replace($sente,$newword,$location,0);
 //----------------------------
 echo "<br>";
 echo"<hr>";
 echo "<h1 style='color:red; text-align:center;'>Question 18</h3>";


 $fword="The Quick brown fox";
echo trim($fword,"Quick brown fox");
echo "<br>";
 echo"<hr>";
 echo "<h1 style='color:red; text-align:center;'>Question 19</h3>";
 $num1="000547023.24";
 echo ltrim($num1,"0");
 echo"<hr>";
 //-------------------------
 echo "<h1 style='color:red; text-align:center;'>Question 20</h3>";
 echo "<br>";

 $remove="the Quick brown fox jumps over the lazy dog";
echo str_replace("fox", " ", $remove);
echo "<br>";
 echo"<hr>";
 echo "<h1 style='color:red; text-align:center;'>Question 21</h3>";
 $shalesh="the Quick brown fox jumps over the lazy dog///";
 echo"<hr>";
//echo str_replace("///", " ", $remove);or
echo "<h1 style='color:red; text-align:center;'>Question 22</h3>";

$url="https//www.example.com/5478631";
 echo substr($url ,strrpos($url,'/')+1);
 echo "<br>";
 echo"<hr>";
//------------------------------------------
echo "<h1 style='color:red; text-align:center;'>Question 23</h3>";
$my_str = '\"\1+2/3*2:2-3/4*3';
 echo str_replace (str_split('\/:*?<>|+-') , '', $my_str);
 echo "<br>";
 echo"<hr>";

//------------------------------------------
echo "<h1 style='color:red; text-align:center;'>Question 24</h3>";

 /*$fifthword="the Quick brown fox jumps over the lazy dog";
echo rtrim($fifthword,"over the lazy dog");*/
// another way
$word3="the Quick brown fox jumps over the lazy dog";
$sel=explode(' ',$word3);
$arr2=array_slice($sel,0,5);
$impl=implode('  ',$arr2);
echo $impl;
echo "<br>";
echo"<hr>";


//------------------------------------------
echo "<h1 style='color:red; text-align:center;'>Question 25</h3>";

$num2='2,542.12';
echo"<hr>";
echo str_replace(str_split(','),"",$num2);
echo "<h1 style='color:red; text-align:center;'>Question 26</h3>";
$x="a";
for($i=0;$i<=24;$i++){
    echo $x++;
}
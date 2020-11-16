<?php
echo "<h1 style='color:red; text-align:center;'>Question seven</h3>";
$newstring = 'Ayham@example.com';
 echo substr($newstring,14 );
 echo '<br>';
 echo "<hr>";
 echo "<h1 style='color:red; text-align:center;'>Question eight</h3>";
 
 $x=65.45;
$y=104.35;
$z=$x+$y;
echo number_format($z,2);

echo '<br>';
echo "<hr>";


echo "<h1 style='color:red; text-align:center;'>Question nine</h3>";
function rand_string( $length ) {

    $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($chars),0,$length);

}

echo rand_string(12);
echo '<br>';
echo "<hr>";


echo "<h1 style='color:red; text-align:center;'>Question ten</h3>";

$subjectVal = "the Quick brown fox jumps over the lazy dog"; 
$replace=str_replace("the","That",$subjectVal);
echo str_replace("the","That",$subjectVal);

//or
//print_r($replace); 

//Ayham question

echo"<hr>";

echo "<h1 style='color:red; text-align:center;'>Question 11</h3>";

$string1="football";
$string2="footboll";
echo strspn($string1,$string2);
echo"<br>";
echo"<hr>";
 ?>
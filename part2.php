<?php
echo "<h1 style='color:red; text-align:center;'>Question two</h3>";
$x="082307";

echo '<br>';

$y=substr( (chunk_split($x,2,":")),0);
$z=rtrim($y,":");
echo "<h1 style='color:red;'>$z</h1>";
echo '<br>';
echo "<hr>";
//----------------------------------------------------------
echo "<h1 style='color:red; text-align:center;'>Question three</h3>";

$d="The Quick brown fox jumps over the lazy dog";
$f="jumps";
//-------------------------------------------------------
if(strpos($d, $f) !== false){
    echo "<h1 style='color:red;'>$f</h1>";

}else echo "not found";
echo '<br>';
echo "<hr>";
//-----------------------------------------------------------------
echo "<h1 style='color:red; text-align:center;'>Questio four</h3>";

$e = "1234";
 
$cover=strval($e);
echo "<h1 style='color:red;'>$cover</h3>";
echo'<br>';
 echo gettype($e);
 echo '<br>';
 echo "<hr>";
//------------------------------------
 echo "<h1 style='color:red; text-align:center;'>Questio five</h3>";
 $path='www.example.com/public_html/index.php';
echo basename($path);
//-----------------------------------------------------
 echo "<h1 style='color:red; text-align:center;'>Questio six</h3>";
 echo'<br>';
 $mailid = 'Ayham@example.com';
 $user= strstr($mailid, '@', true);
 echo "<h1 style='color:red;'>$user</h3>";?>
 
 



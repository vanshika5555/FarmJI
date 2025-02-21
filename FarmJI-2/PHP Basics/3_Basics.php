 <!-- //strings -->
<?php //we can concatenate in strings
$str="This is";
echo $str;
echo"<br>";
$len=strlen($str);
echo "The length of this string is: ". $len . " ThankYou <br>";
echo $len;
echo"The reverse is ". strrev($str);
echo"The search of is in the string is". strpos($str, "is");
echo"The replace string is". str_replace( "is", "at", $str);

?>
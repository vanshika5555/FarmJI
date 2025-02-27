<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <div class="container">
    This is my first php website
  </div>
  <?php
  echo "This is my first website created using php";
  //Single line comment
  /*  
  Multi Line Comment
  */
  $variable1= 34;
  $variable2 = 56;
  echo $variable1+ $variable2;
  echo"<br>";

  //operators
  // Arithmetic operators

  echo "The value of variable1 + variable2 is:";
  echo $variable1 + $variable2;
  echo "<br>";
  echo "The value of variable1 - variable2 is:";
  echo $variable1 - $variable2;
  echo "<br>";
  echo "The value of variable1 * variable2 is:";
  echo $variable1 * $variable2;
  echo "<br>";


  // Assignment operators

  $newVar = $variable1;
  echo"The value of new varaible is: ";
  $newVar += 1;
  echo $newVar;
  echo"<br>";

  // Comparision Operators
  echo var_dump(1==4);//structured info about type and value
  // Increment/Decrement Operators
  echo $variable1++;
  echo $variable1--;
  echo --$variable1;
  echo ++$variable1;
  // Logical Operators
  // &&
  $myVar= (true) && (true);
  echo var_dump($myVar);
  // ||
  // xor
  // !

  //DataTypes


  // 1. String
  // 2. Integer
  // 3. Float 
  // 4. Boolean
  // 5. Array
  // 6. Object

  $var="This is  a string";
  echo var_dump($var);
  ?>
</body>
</html>
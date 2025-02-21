<!DOCTYPE html>
<html lang="en">
<HEAD>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .container{
      max-width: 80%;
      background-color: rgb(228, 195, 195);
      margin: auto;
    }
  </style>
</HEAD>
<body>
  <div class="container">
    <h1>Let's Learn about <hr>php</h1>
    <caption>I'm Caption</caption>
    <p>Your Party status is here:</p><br>
    <?php
    $age= 34;
    if($age>18){
      echo 'You can go to party';
    }else{
      echo"You can't go to party";
    }
    echo"<br>";
    $languages = array("python", "C++", "php", "Nodejs");
    echo $languages[0];
    echo"<br>";
    echo count($languages);
    echo"<br>";
    echo var_dump($languages);//it tells the value and type it is a built in function
    echo"<br>";

    //loops in PHP
    $a = 0;
    while($a<=10){
      echo"The Value of a is: ";
      echo $a;
      echo"<br>";
      $a++;
    }
echo"<br>";
    //Iterating arrays in Php using while loop
    $a = 0;
    while($a<count($languages)){
      echo"The Value of a is: ";
      echo $languages[$a];
      echo"<br>";
      $a++;
    }

    echo"<br>";

    //do-while loop
    $a = 0;
    do{
    echo"The Value of a is: ";
      echo $languages[$a];
      echo"<br>";
      $a++;
    }while($a<count($languages));

    echo"<br>";

    //for loop
    for($a=0; $a<count($languages); $a++){
      echo"The Value of a is: ";
      echo $languages[$a];
      echo"<br>";
    }

    forEach($languages as $values){
      echo"<br> The Value of a  from forEach loop is: ";
      echo $values;
    } 

    //functions

    echo"<br>";
    function print5(){
      echo"Five";
    } 

    print5();

    function printNumber($number){
      echo"<br> Your number is:";
      echo $number;
    }
    printNumber(45);
    printNumber(20);
    ?>

  </div>
</body>
</html>
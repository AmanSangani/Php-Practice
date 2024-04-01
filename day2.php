<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Practice Day-2</title>
</head>

<body>
  <?php
  // PHP_INT_MAX - The largest integer supported
  // PHP_INT_MIN - The smallest integer supported
  // PHP_INT_SIZE -  The size of an integer in bytes
  
  // -------------------------------------------------------------------------------------
  
  // $x = 5985;
  // var_dump(is_int($x)); //true
  // $x = "5985";
  // var_dump(is_numeric($x)); //truw
  // $x = "59.85" + 100;
  // var_dump(is_numeric($x)); //true
  
  // -------------------------------------------------------------------------------------
  
  // $a = 5;       // Integer
  // $b = 5.34;    // Float
  // $c = "hello"; // String
  // $d = true;    // Boolean
  // $e = NULL;    // NULL
  
  // $a = (array) $a;
  // $b = (array) $b;
  // $c = (array) $c;
  // $d = (array) $d;
  // $e = (array) $e;
  
  // echo $a[0]; //5
  // echo $b[0]; //5.34
  // echo $c[0]; //hello
  // echo $d[0]; //1
  // echo $e[0]; //error : array is empty
  
  // -------------------------------------------------------------------------------------
  
  // echo (pi());
  // echo "<br>";
  // echo (min(0, 150, 30, 20, -8, -200));
  // echo "<br>";
  // echo (max(0, 150, 30, 20, -8, -200));
  // echo "<br>";
  // echo (abs(-6.7));
  // echo "<br>";
  // echo (sqrt(64));
  // echo "<br>";
  // echo (round(0.60));
  // echo "<br>";
  // echo (round(0.49));
  // echo "<br>";
  // echo (rand());
  // echo "<br>";
  // echo (rand(10, 100));
  // echo "<br>";
  
  // -------------------------------------------------------------------------------------
  
  // define(name, value, case-insensitive);
  
  // define("GREETING", "Hello Aman Sangani!");
  // echo GREETING;
  // const MYCAR = "Volvo";
  // echo MYCAR;
  
  //const are always case-sensitive
  // define() has has a case-insensitive option.
  // const cannot be created inside another block scope, like inside a function or inside an if statement.
  // define can be created inside another block scope.
  
  // define("cars", [
  //     "Alfa Romeo",
  //     "BMW",
  //     "Toyota"
  //   ]);
  //   echo cars[0];
  
  // -------------------------------------------------------------------------------------
  
  $t = date("H");

  if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }

  $a = 13;
  $b = $a < 10 ? "Hello" : "Good Bye";
  echo $b;


  ?>
</body>

</html>
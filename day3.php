<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Practice Day-3</title>
</head>

<body>
    <?php

    // $i = 1;
    // while ($i < 6) {
    //     echo $i;
    //     $i++;
    // }
    
    // -------------------------------------------------------------------------------------
    
    // $i = 1;
    // do {
    //     echo $i;
    //     $i++;
    // } while ($i < 6);
    
    // -------------------------------------------------------------------------------------
    
    // for ($x = 0; $x <= 10; $x++) {
    //     echo "The number is: $x <br>";
    // }
    
    // -------------------------------------------------------------------------------------
    
    // $colors = array("red", "green", "blue", "yellow");
    // foreach ($colors as $x) {
    //     echo "$x <br>";
    // }
    
    // -------------------------------------------------------------------------------------
    
    // $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43"); //associative array or Objects like javascript
    // foreach ($members as $x => $y) {
    //     echo "$x : $y <br>";
    // }
    
    // -------------------------------------------------------------------------------------
    
    // $colors = array("red", "green", "blue", "orange");
    // //By assigning the array items by reference, changes will affect the original array:
    // foreach ($colors as &$x) {
    //     if ($x == "blue")
    //         $x = "pink";
    //     echo "$x <br>";
    // }
    // var_dump($colors);
    
    // -------------------------------------------------------------------------------------
    
    // function familyName($fname = "Aman", $year = 2003)
    // {
    //     return "$fname Born in $year <br>";
    // }
    
    // echo familyName("Hege", "1975");
    // echo familyName("Stale", "1978");
    // echo familyName("Kai Jim", "1983");
    // echo familyName();
    
    // -------------------------------------------------------------------------------------
    
    // // Use a pass-by-reference argument to update a variable
    // function add_five(&$value)
    // {
    //     $value += 5;
    // }
    // $num = 2;
    // add_five($num);
    // echo $num;
    
    // -------------------------------------------------------------------------------------
    
    // $x will behave as an array
    // function sumMyNumbers(...$x)
    // {
    //     $n = 0;
    //     $len = count($x);
    //     for ($i = 0; $i < $len; $i++) {
    //         $n += $x[$i];    
    //     }
    //     return $n;
    // }
    // $ans = sumMyNumbers(7, 7);
    // echo $ans;
    
    // -------------------------------------------------------------------------------------
    
    // function addNumbers(float $a, float $b): int
    // {
    //     return (int) ($a + $b);
    // }
    // echo addNumbers(1.2, 5.2);
    
    // -------------------------------------------------------------------------------------
    
    // function addNumbers(int $a, int $b) {
    //     return $a + $b;
    //   }
    //   echo addNumbers(5, "5 days"); // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
    // <?php declare(strict_types=1); // strict requirement
    // function addNumbers(int $a, int $b) {
    // return $a + $b;
    // }
    // echo addNumbers(5, "5 days");
    // // since strict is enabled and "5 days" is not an integer, an error will be thrown
    //
    
    // -------------------------------------------------------------------------------------
    
    // types of array : 
    // Indexed arrays - Arrays with a numeric index
    // Associative arrays - Arrays with named keys
    // Multidimensional arrays - Arrays containing one or more arrays
    
    // Array items of four different data types
    // $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
    
    // -------------------------------------------------------------------------------------
    
    // $cars = array("Volvo", "BMW", "Toyota");
    // array_push($cars, "Ford");
    // var_dump($cars);
    
    // -------------------------------------------------------------------------------------
    
    // $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    // echo $car["brand"];
    // echo $car["model"];
    // echo $car["year"];
    // $car["year"] = 2024;
    // var_dump($car);
    
    // -------------------------------------------------------------------------------------
    
    // function myFunction()
    // {
    //     echo "I come from a function!";
    // }
    
    // $myArr = array("Volvo", 15, "message" => myFunction);
    
    // $myArr["message"]();
    
    // -------------------------------------------------------------------------------------
    
    // $cars = array("Volvo", "BMW", "Toyota");
    // foreach ($cars as &$x) {
    //     $x = "Ford";
    // }
    // unset($x);
    // var_dump($cars);
    // Note: Remember to add the unset() function after the loop.
    // Without the unset($x) function, the $x variable will remain as a reference to the last array item.
    
    // -------------------------------------------------------------------------------------
    
    // $fruits = array("Apple", "Banana", "Cherry");
    // var_dump($fruits);
    // $fruits[] = "Orange";
    // var_dump($fruits);
    
    // $cars = array("brand" => "Ford", "model" => "Mustang");
    // $cars["color"] = "Red";
    // var_dump($cars);
    
    // $cars = array("brand" => "Ford", "model" => "Mustang");
    // $cars += ["color" => "red", "year" => 1964];
    // var_dump($cars);
    
    // $cars = array("Volvo", "BMW", "Toyota");
    // array_splice($cars, 1, 1); //specify the index (where to start) and how many items you want to delete.
    // var_dump($cars);
    
    //function to remove items from an associative array.
    // $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964); //The array_diff() function takes values as parameters, and not keys.
    // $newarray = array_diff($cars, ["Mustang", 1964]);
    
    // $cars = array("Volvo", "BMW", "Toyota");
    // array_pop($cars);//removes the last item of an array.
    // array_shift($cars);//removes the first item of an array.
    
    // -------------------------------------------------------------------------------------
    
    // sort() - sort arrays in ascending order
    // rsort() - sort arrays in descending order
    // asort() - sort associative arrays in ascending order, according to the value
    // ksort() - sort associative arrays in ascending order, according to the key
    // arsort() - sort associative arrays in descending order, according to the value
    // krsort() - sort associative arrays in descending order, according to the key
    
    // -------------------------------------------------------------------------------------
    
    // $cars = array(
    //     array("Volvo", 22, 18),
    //     array("BMW", 15, 13),
    //     array("Saab", 5, 2),
    //     array("Land Rover", 17, 15)
    // );

    // echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    // echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    // echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    // echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

    // for ($row = 0; $row < 4; $row++) {
    //     echo "<p><b>Row number $row</b></p>";
    //     echo "<ul>";
    //     for ($col = 0; $col < 3; $col++) {
    //         echo "<li>" . $cars[$row][$col] . "</li>";
    //     }
    //     echo "</ul>";
    // }

    ?>
</body>

</html>
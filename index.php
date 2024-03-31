<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php practice</title>
</head>

<body>
    <?php

    // $name = "aman";
    // echo "This is $name";
    
    // -------------------------------------------------------------------------------------
    
    // " . " is used to concate 
    // $x = 5;
    // $y = 5;
    // echo "Sum of $x and $y is" . $x + $y;
    
    // -------------------------------------------------------------------------------------
    
    //The var_dump() function returns the data type and the value:
    // var_dump(5);
    // var_dump("John");
    // var_dump(3.14);
    // var_dump(true);
    // var_dump([2, 3, 56]);
    // var_dump(NULL);
    
    // -------------------------------------------------------------------------------------
    
    // Variable with global scope:
    // global scope
    // $x = 5;
    // function myTest()
    // using x inside this function will generate an error
    // {
    // echo "<p>Variable x inside function is: $x</p>";
    // }
    // myTest();
    // echo "<p>Variable x outside function is: $x</p>";
    
    // -------------------------------------------------------------------------------------
    
    // Variable with local scope:
    // function myTest()
    // {
    //     $x = 5; // local scope
    //     echo "<p>Variable x inside function is: $x</p>";
    // }
    // myTest();
    // // using x outside the function will generate an error
    // echo "<p>Variable x outside function is: $x</p>";
    
    // -------------------------------------------------------------------------------------
    
    // The global keyword is used to access a global variable from within a function.
    // $x = 5;
    // $y = 10;
    // function myTest()
    // {
    //     global $x, $y;
    //     $y = $x + $y;
    // }
    // myTest();
    // echo $y; // outputs 15
    
    // -------------------------------------------------------------------------------------

    

    ?>
</body>

</html>
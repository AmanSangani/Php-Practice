<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Practice Day-6</title>
</head>

<body>
    &copy; 2010-
    <?php echo date("Y") . "<br>" ?>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";
    echo "The time is " . date("h:i:sa") . "<br>";
    date_default_timezone_set("Asia/Calcutta") . "<br>";
    echo "The time is " . date("h:i:sa") . "<br>";
    // mktime(hour, minute, second, month, day, year)
    $d = mktime(12, 12, 12, 12, 12, 2012);
    echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
    ?>
</body>

</html>
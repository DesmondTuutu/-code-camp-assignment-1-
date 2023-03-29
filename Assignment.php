<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //use a while loop to implement a multiplication table of 5.
    $num = 5;
    $x = 1;
    echo ("using while loop");
    while ($x <= 12) {

        echo "$num * $x = " . $num * $x;
        $x++;
    }
   // echo "using do while .<br>";

    $y = 1;
    do {
        echo ("$num * $y =" . $num * $y);
        $y++;
    } while ($y <= 12)

    ?>

</body>

</html>
<?php
    $name = "Dhanush Shetty<br>";
    $food = "dosa";

    $age = 20;
    $users =2;
    $quantity = 3;

    $price = 4.99;
    $gpa = 2.5;
    $tax_rate = 5.1;

    $emp = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo $name;

    echo "your are {$age} old <br>";
    echo "Hello {$name}";

    echo "your gpa is {$gpa}<br>";
    echo "your price is \$ {$price}<br>";

    echo "online status {$online}<br>";

    echo "you have ordered {$quantity} x {$food}<br>";
    $total =$quantity * $price;
    echo "your total is \$ {$total}<br>";

?>
<?php


// Arrow Function Or Anonymous function =


$number = fn($x, $n)=>$x+$n;

echo $number(10, 20);


$name = fn($fname, $lname)=>"My full name is $fname $lname";

echo $name("Al Amin", "Sikdar");
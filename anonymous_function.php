<?php

// Raw Anonymous Function  Or nameless function


// (function(){
//     $x = 10;
//     $y = 20;
//     echo $x+$y;
// })();




// Anonymous  or nameless function  Assign -> variable

// $resutl = function(){  //no parameter
//     $x = 10;
//     $y= 20;
//     echo  $x+$y;
// };

// $resutl();


$resutl = function($x, $y){  // Assign Parameter

    echo  $x+$y;
};

$resutl(10, 40);


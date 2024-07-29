<?php

$x = 0;

while ($x <= 100){
    ++$x;


    if ($x%3 == 0 && $x%5 == 0 ){
       echo "FizzBuzz" . "<br/>";

    }
    
    else if ($x%3 == 0){
        echo "Fizz" . "<br/>";
    }

    else if ($x%5 == 5){
        echo "Buzz" . '<br/>';

    }

    else {
        echo $x . '<br/>';
        
    }    
}













?>
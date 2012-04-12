<?php
$array = range(20,1000,37);
$exists = array(146, 284, 871);

function is_prime($var){
for($i = 2; $i < sqrt($var); $i++) {
    if($var%$i == 0)
        return false;
}
    return true;
}

function find_3_prime() {
    $a = 0;
    global $array;
    foreach ($array as $value) {
        if(is_prime($value)) $a++;
        if($a == 3) {
            echo "The third prime number is $value <br>";
            break;
        }
    }
}

function check_exists($var) {
    global $array;
    if(in_array($var, $array, true)) 
        echo "The number $var exist in the array <br>";
    else 
        echo "The number $var does not exist in the array <br>";
}

find_3_prime();
foreach ($exists as $value)
    check_exists($value);

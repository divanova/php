<?php
if (is_int('asd')) {
    echo "is integer\n";
} else {
    echo "is not an integer\n";
}
var_dump(is_int(23));
var_dump(is_int("23"));
var_dump(is_int(23.5));
var_dump(is_int(true));
?>

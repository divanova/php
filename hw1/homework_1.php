<html>
<head>
<style type="text/css">
body
p1
{
color:red;
}
p3
{
color:blue;
}
p4
{
color:red;
}
</style>
</head>
<body>
<?php

function is_prime($var){
for($i = 2; $i < sqrt($var); $i++) {
    if($var%$i == 0)
        return false;
}
    return true;
}

if(isset($_GET["number"])){
    if(is_numeric($_GET["number"])){
        if($_GET["number"] < 0 or $_GET["number"] > 19999)
            echo "<p1>The parameter is not within the range [0,19999]</p1> <br>";
        if(is_prime($_GET["number"]))
            echo "<p2>The number ", $_GET["number"], " is prime !</p2> <br";
        else
            echo "<p3>The number ", $_GET["number"], " is NOT prime !</p3> <br";
    }   
    else
        echo "<p4>The parameter is not a number</p4> <br>";
}
?>
</body>
</html>
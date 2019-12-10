<?php
if(isset($_POST['Calculate'])) {
    $num1 = $_POST["valu1"];
    $num2 = $_POST["valu2"];
    $name = $_POST["operator"];

switch ($name){
    case "+":
        echo "RESULT:";
        echo $num1 + $num2;
        break;
    case "-":
        echo "RESULT: ";
        echo $num1 - $num2;
        break;
    case "*":
        echo "RESULT:";
        echo $num1 - $num2;
        break;
    case "/":
        echo "RESULT:";
        echo $num1 / $num2;
        break;
}
}
?>


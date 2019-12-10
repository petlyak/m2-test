<?php
spl_autoload_register(function ($class) {
    include $class . '.class.php';
});

$calc = new Calculator();
echo '2+3='.$calc->addition(2,3).'<br>';
echo '4-2='.$calc->minus(4,2).'<br>';
echo '2*3='.$calc->multiplication(2,3).'<br>';
echo '6/2='.$calc->division(6,2).'<br>';
?>
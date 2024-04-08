<?php

echo "welke operatie wil je uitvoeren? (+, -)" . PHP_EOL;

$ope = readline();

echo "Wat is het eerste getal" . PHP_EOL;

$a = readline();

echo "wat is het tweede getal" . PHP_EOL;

$b = readline();

if ($ope == '+') {
    echo "Uw resultaat is: " . $a + $b;
} elseif ($ope == '-') {
    echo "Uw resultaat is: " . $a - $b;
}

?>
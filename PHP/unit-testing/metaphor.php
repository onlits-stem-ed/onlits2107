<?php

use function PHPUnit\Framework\assertEquals;

function add(int $a, int $b): int //Testable
{
    return $a - $b;
}


if (($r = add(10, 20)) == 30) { //Assertion
    echo "Test passed!\n";
} else {
    echo "Expection: 30\nActual: $r\n";
}
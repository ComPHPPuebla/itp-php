<?php
$mayor = function($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
};

echo $mayor(12, 7);

$numbers = [1,3,4,11,100,5];
$ordering = 'descendent';
usort($numbers, function($a, $b) use ($ordering) {
    if ('ascendent' === $ordering) {
        return $a - $b;
    }
    return $b - $a;
});
print_r($numbers);

$mayor = 'Hola';
echo $mayor;

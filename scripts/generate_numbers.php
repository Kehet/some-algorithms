<?php

require 'vendor/autoload.php';

$amount = 100;

$numbers = [];
for ($i = 0; $i < $amount; $i++) {
    $number = random_int(1, $amount * 10);

    if (in_array($number, $numbers, true)) {
        $i--;
        continue;
    }

    $numbers[] = $number;
}

echo json_encode($numbers) . PHP_EOL;
natsort($numbers);
echo json_encode(array_values($numbers)) . PHP_EOL;


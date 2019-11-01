<?php

$table = [0 => $_POST['1'], 1 => $_POST['2'], 2 => $_POST['3'], 3 => $_POST['4'], 4 => $_POST['5'], 5 => $_POST['6']];

function bubblesort($table)
{
    $length = count($table);

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length - 1; $j++) {

            if ($table[$j] > $table[$j + 1]) {
                $temporary = $table[$j + 1];
                $table[$j + 1] = $table[$j];
                $table[$j] = $temporary;
            }
        }
    }
    return $table;
}

$sorted = bubblesort($table);
echo implode(',', $sorted);
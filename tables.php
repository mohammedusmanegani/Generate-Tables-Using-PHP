<?php
$start = 1;
echo "Enter the table number : ";
$tableNumber = readline();
echo "Enter the limit of Table : ";
$tableLimit = readline();
for ($i = $start; $i <= $tableLimit; $i++) {
    echo $tableNumber . " X " . $i . " = " . $tableNumber * $i . "\n";
}

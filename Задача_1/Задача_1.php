<?php
$arr = array('milk', 'beer', 'beer', 'milk', 'milk');

// перебираем элементы в массиве по одному
foreach ($arr as $v) {
    if ($v == 'milk')
        echo "good\n";
    else if ($v == 'beer')
        echo "bad\n";
}

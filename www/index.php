<?php

$t = microtime(TRUE);
$arr = require '../gen/classmap.php';

$t = (microtime(TRUE) - $t) * 1000;
$n = count($arr);
$tn1000 = $t / $n * 1000;

echo <<<EOT
$t milliseconds for $n entries, that is $tn1000 per 1000 entries.
EOT;

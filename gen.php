<?php

$arr = array();
for ($i = 0; $i < 100 * 1000; ++$i) {
  $key = md5($i . 'k');
  $value = md5($i . 'v');
  $arr[$key] = $value;
}

$arr = var_export($arr, TRUE);

$php = "<?php\n\nreturn $arr;\n";

file_put_contents(dirname(__FILE__) . '/gen/classmap.php', $php);

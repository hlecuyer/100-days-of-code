<?php

$root = $argv[1];

try {
  $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root), RecursiveIteratorIterator::SELF_FIRST);
} catch(Exception $e) {
  print($e->getMessage());
}
// print_r($paths);
$outputLine = [];
foreach ($objects as $name => $object) {
  $tmp = array_reverse(explode('/', $name));
  if (count($tmp) > 1 && $tmp[0] !== '.' && $tmp[0] !== '..') {
    $link = '"' . $tmp[1] . '" -> "' . $tmp[0]. '"';
    if (!in_array($link, $outputLine)) {
      $outputLine[] = $link;
    }
  }
}

print("digraph G {\n");
foreach ($outputLine as $line) {
  print('    ' . $line . ";\n");
}

print_r("}\n");

<?php

require 'words.inc';

$name = @$_GET['text'];
$result = $name . ", you";
if ($name == '') {
  $result = "You";
}

$result .= " are " . $phrase1[array_rand($phrase1)] . " " . $phrase2[array_rand($phrase2)];

echo $result;
?>

<?php
$raw = `python code.py`;
$deserialized = json_decode($raw, true);
echo $deserialized["temperature"];
echo $deserialized["pressure"];
echo $deserialized["altitude"];
?>
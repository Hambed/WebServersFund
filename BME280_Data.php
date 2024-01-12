<?php
$raw = `python code.py`;
$deserialized = json_decode($raw, true);
echo $deserialized["temperature"] . "," . $deserialized["pressure"] . "," . $deserialized["altitude"];
?>
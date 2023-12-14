<?php
$raw = `python code.py`;
$deserialized = json_decode($raw, true);

if ($deserialized !== null && isset($deserialized["temperature"]) && isset($deserialized["pressure"]) && isset($deserialized["altitude"])) {
    echo "Temperature = " . $deserialized["temperature"] . "<br>" .
         "Pressure = " . $deserialized["pressure"] . "<br>" .
         "Altitude = " . $deserialized["altitude"] . "<br>";
} else {
    echo "Error: Invalid sensor data format.";
}
?>
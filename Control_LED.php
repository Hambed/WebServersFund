<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['logic'])) {
        $logic = $_POST['logic'];

        if ($logic === 'ON') {
            shell_exec("gpio write 3 1");
        } elseif ($logic === 'OFF') {
            shell_exec("gpio write 3 0");
        }
    }
}
?>
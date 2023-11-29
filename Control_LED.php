<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['logic'])) {
        $logic = $_POST['logic'];

        if ($logic === 'on') {
            shell_exec("gpio write 3 1");
        } elseif ($logic === 'off') {
            shell_exec("gpio write 3 0");
        }
    }
}
?>
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "AlcoholicsOnymous";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["search"])) {
    $search = $_POST["search"];



    if(isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    $sql = "INSERT INTO malicious (IP, SearchTerm) VALUES ('$ip', '$search');";
    mysqli_query($conn, $sql);

    $googlesearch = "https://www.google.com/search?q=$search";
    header('Location: '$googlesearch'');
}
?>
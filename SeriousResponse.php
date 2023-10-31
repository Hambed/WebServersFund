<!DOCTYPE html>
<html>
<style>
    .DivMessage {
        border: 1px outset rgb(0, 13, 88);
        background-color: rgb(45, 189, 117);
        text-align: left;
    }
</style>
<head>
    <title>I KNOW YOUR BROWSER</title>
</head>
<body style="background-color:black;">
<h1 style="color:#9e029e; font-size: xxx-large; font-family: garamond;">FORM STUFF</h1>
<br><br>
<h1 style="color:#9e029e; font-size: large; font-family: garamond;">HERE YOU GO</h1>
<div class="DivMessage">
<p>
<?php

$server = "localhost";
$username = "php";
$password = "password";
$database = "AlcoholicsOnymous";
$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { 
    die("Connection failed: {mysqli_connect_error()}"); 
  }



if (isset($_POST["realname"])) {
        $realname = $_POST["realname"];

        if (strpos($realname, ' ') === false) {
            // No spaces found in the input string
            if (isset($_POST["BAC"])) {
                $BAC = intval($_POST["BAC"]);
        
                switch ($BAC) {
                  case 1:
                   $BACFLOAT = 0.030;
                    break;
                  case 2:
                    $BACFLOAT = 0.050;
                    break;
                  case 3:
                    $BACFLOAT = 0.080;
                    break;
                  case 4:
                    $BACFLOAT = 0.115;
                    break;
                  case 5:
                    $BACFLOAT = 0.145;
                    break;
                  case 6:
                    $BACFLOAT = 0.180;
                    break;
                  case 7:
                    $BACFLOAT = 0.225;
                    break;
                  case 8:
                    $BACFLOAT = 0.275;
                    break;
                  case 9:
                    $BACFLOAT = 0.400;
                    break;
                  default:
                    echo "Not Valid Answer";
                }
        
                if (isset($_POST["Age"])) {
                    $age = intval($_POST["Age"]); 
                    if ($age >= 18 && $age <= 100) {
                        if (isset($_POST["beverage"])) {
                            $beverage = $_POST["beverage"];
                    
                            if (strpos($beverage, ' ') === false) {
                                $sql = "INSERT INTO AlcoholicList (Name, BAC, Age, FavoriteBeverage) VALUES ("$realname", $BACFLOAT, $age, "$beverage");";
                                Mysqpli_query($conn, $sql);
                            } 
                            else {
                                // Spaces found in the input string
                            }
                        }
                        else {
                        }
                    } 
                    else {
                    }
                } 
                else {
                }
            }
            else {
            }
        } 
        else {
            // Spaces found in the input string
        }
    }
    else {
    }
echo "<br><br>";
$sql = “SELECT * FROM AlcoholicList WHERE Name = "$realname";”;
$result = mysqli_query($conn, $sql); 
foreach($result as $row){echo "id: {$row["id"]}&nbsp Name: {$row["Name"]}&nbsp BAC: {$row["BAC"]}&nbsp Age: {$row["Age"]}&nbsp Favorite Beverage {$row["FavoriteBeverage"]}<br>";} 
?>
</p>
</body>
</html>
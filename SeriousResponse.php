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
    if (isset($_POST["realname"])) {
        $realname = $_POST["realname"];

        if (strpos($realname, ' ') === false) {
            // No spaces found in the input string
            echo "The input string does not contain any spaces.";
        } else {
            // Spaces found in the input string
            echo "The input string contains spaces.";
        }
    }
    else {
        echo "Input string not provided.";
    }
?>

<?php 
    if (isset($_POST["Age"])) {
        $age = intval($_POST["Age"]); 
        if ($age >= 18 && $age <= 100) { 
        echo "Age is valid: $age";
        } 
        else {
        echo "Invalid age entered. Please enter a valid age between 18 and 100."; 
        }
    } 
    else {
        echo "Age not provided.";
    } 
?>

<?php
    if (isset($_POST["BAC"])) {
        $BAC = intval($_POST["BAC"]);

        switch ($BAC) {
          case 1:
           
            break;
          case 2:
           
            break;
          case 3:
           
            break;
          case 4:
           
            break;
          case 5:
           
            break;
          case 6:
           
            break;
          case 7:
           
            break;
          case 8:
           
            break;
          case 9:
           
            break;
          default:
            echo "Not Valid Answer";
        }
    }
    else {
      echo "No Answer Provided";
    }
?>

<?php
    if (isset($_POST["beverage"])) {
        $beverage = $_POST["beverage"];

        if (strpos($beverage, ' ') === false) {
            // No spaces found in the input string
            echo "The input string does not contain any spaces.";
        } else {
            // Spaces found in the input string
            echo "The input string contains spaces.";
        }
    }
    else {
        echo "Input string not provided.";
    }
?>
</p>
</body>
</html>
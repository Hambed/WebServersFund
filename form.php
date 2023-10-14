<!DOCTYPE html>
<html>
<style>
    .DivMessage {
        border: 1px outset rgb(0, 13, 88);
        background-color: rgb(255, 0, 255);
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
    <?php if($_POST["truthness"]==true) { ?>
        <?php echo"You are Truthful, "; ?>
    <?php } else { ?>
        <?php echo"You are UnTruthful, "; ?>
    <?php } ?>
    <?php echo"your great-grandma's second cousin's niece's bestfriend's dog's middle name is " . $_POST["dogname"] . " (Quite the doggy). "; ?>
    <?php echo"Your driving instructor's great-aunt has a " . $_POST["wigcolor"] . " wig and "; ?>
   
    <?php if($_POST["BAC"] >= 1 && $_POST["BAC"] < 4) { ?>
        <?php echo"test, alright"; ?>
    <?php } elseif ($_POST["BAC"] >= 4 && $_POST["BAC"] < 7) { ?>
        <?php echo"test, drunk af"; ?>
    <?php } else{ ?>
        <?php echo"bouta die ffs"; ?>
        <?php } ?>
</div>
</body>
</html>
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
        <?php echo"for someone who knows their great-grandma's second cousin's niece's bestfriend's dog's middle name, I'm surprised you drink alcohol. "; ?>
    <?php } elseif ($_POST["BAC"] >= 4 && $_POST["BAC"] < 7) { ?>
        <?php echo"I wonder if that driving instructor whose great-aunt you love so dearly would teach you to drive drunk so you can go home to crash. "; ?>
    <?php } else{ ?>
        <?php echo"it's fucking incredible that someone in your state can move a mouse and read a form because you're so drunk you're bouta die. "; ?>
        <?php } ?>
    <?php echo"\n{$_POST["Reflection"]}. "; ?>
    <?php echo"\nJeez if I though you were sober enough to reflect that much I would have never asked."; ?>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<style>
    .DivMessage {
        border: 1px outset rgb(0, 13, 88);
        background-color: rgb(19, 100, 24);
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
</div>
</body>
</html>
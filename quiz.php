<!DOCTYPE html>
<html>
<head>        
    <title>The Unravelling Truth</title>
</head>
<body style="background-color:black;">
    <h1 style="color:#9e029e; font-size: xxx-large; font-family: garamond;">Swear Down you tell truth</h1>
<form action="form.php" method="POST" style="background-color: rgb(45, 189, 117);" onsubmit="return validateAge();">
  <fieldset>
    <legend>Your Precious Data:</legend>

    <label for="truthness">IS YOU FOR REAL RIGHT NOW</label><br>
    <input type="checkbox" id="truthness" name="truthness" value="Truthful" onblur="important()"><br>
    <p id="invisi" style="display:none">This field is required!</p>
    <br>
    <label for="dogname">Your great-grandma's second cousin's niece's bestfriend's dog's middle name:</label><br>
    <input type="text" id="dogname" name="dogname" value="" required><br>
    <label for="wigcolor">Your driving instructor's great-aunt's wig color:</label><br>
    <input type="text" id="wigcolor" name="wigcolor" value="" required><br>
    <label for="realname">Your First Name:</label><br>
    <input type="text" id="realname" name="realname" value="" required><br>
    <label for="Age">Your Age:</label><br>
    <input type="text" id="Age" name="Age" placeholder="Age (18-100)" required>

    <?php
    if (isset($_POST["Age"])) {
        $age = intval($_POST["Age"]);

        if ($age >= 18 && $age <= 100) {
            echo "Age is valid: $age";
        } else {
            echo "Invalid age entered. Please enter a valid age between 18 and 100.";
        }
      } 
    else {
        echo "Age not provided.";
      }
    ?>
    <br><br>

    <p style="color:#9e029e; font-size: large; font-family: garamond;">How drunk are you?</p><br>

        <input type="radio" id="BAC" name="BAC" value="1">
        <label for="BAC">BAC 0.020-0.039% &nbsp No loss of coordination, slight euphoria, and loss of shyness. Relaxation, but depressant effects are not apparent.</label><br>
        
        <input type="radio" id="BAC" name="BAC" value="2">
        <label for="BAC">BAC 0.040-0.059% &nbsp Feeling of well-being, relaxation, lower inhibitions, and sensation of warmth. Euphoria. Some minor impairment of judgment and memory, lowering of caution.</label><br>

        <input type="radio" id="BAC" name="BAC" value="3">
        <label for="BAC">BAC 0.060-0.099% &nbsp Slight impairment of balance, speech, vision, reaction time, and hearing. Euphoria. Reduced judgment and self-control. Impaired reasoning and memory.</label><br>

        <input type="radio" id="BAC" name="BAC" value="4">
        <label for="BAC">BAC 0.100-0.129% &nbsp Significant impairment of motor coordination and loss of good judgment. Speech may be slurred; balance, peripheral vision, reaction time, and hearing will be impaired.</label><br>

        <input type="radio" id="BAC" name="BAC" value="5">
        <label for="BAC">BAC 0.130-0.159% &nbsp Gross motor impairment and lack of physical control. Blurred vision and major loss of balance. Euphoria is reducing and beginning dysphoria (a state of feeling unwell)</label><br>

        <input type="radio" id="BAC" name="BAC" value="6">
        <label for="BAC">BAC 0.160-0.199% &nbsp Dysphoria predominates, nausea may appear. The drinker has the appearance of a sloppy drunk.</label><br>

        <input type="radio" id="BAC" name="BAC" value="7">
        <label for="BAC">BAC 0.200-0.249% &nbsp Needs assistance in walking; total mental confusion. Dysphoria with nausea and vomiting; possible blackout.</label><br>

        <input type="radio" id="BAC" name="BAC" value="8">
        <label for="BAC">BAC 0.250-0.399% &nbsp Alcohol poisoning. Loss of consciousness.</label><br>

        <input type="radio" id="BAC" name="BAC" value="9" required>
        <label for="BAC">BAC 0.40% + &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Onset of coma, possible death due to respiratory arrest.</label><br><br>

    <label for="Reflection" style="color:#9e029e; font-size: large; font-family: garamond;">Write a short reflection on how ashamed you are for being drunk.</label><br>
    <textarea name="Reflection" id="Reflection" rows="20" cols="30" pattern=".{25,}" title="refy" required></textarea>

    <br><br>
    <input type="submit">
  </fieldset>
</form>
<script>
  function important() {
    document.getElementById('invisi').style.display='block';
  }
  
</script>
<script>
  function validateAge() {
      var ageInput = document.getElementById("Age");
      var age = parseInt(ageInput.value);

      if (isNaN(age) || age < 18 || age > 100) {
          alert("Please enter a valid age between 18 and 100 you abolute buffoon, if you aren't 18 or you're older than 100, piss off.");
          ageInput.value = "";
          return false;
      }

      return true;
  }
</script>
</body>
</html>
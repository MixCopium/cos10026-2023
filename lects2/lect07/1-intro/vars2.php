<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <?php
  $numHeads = $_GET["numHeads"];
  
  // display an input form for numHeads
  displayForm($numHeads);

  // process the form input to display the result
  // allow the user to specify another input...
  if (isset($numHeads)) {
    displayHeadings($numHeads);
  }

  function displayForm($numHeads) {
    echo "<form action=\"vars1.php\">";
    echo "<label for=\"number\">Enter number of headings:";
      echo   "<input type=\"number\" id=\"numHeads\" name=\"numHeads\" ";
      echo   "value=\"$numHeads\">";
      echo "</label>";
      echo "</form>";
  }

  function displayHeadings($numHeads) {
    for ($i = 1; $i <= $numHeads;$i++) {
      echo "<h$i>Heading $i</h$i>";
    }
  }
  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Using query string (2)</title>
</head>

<body>
  <?php 
    // declare the state field (to be passed between client and server)
    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $occupation = $_GET["occupation"];
  ?>
  <h1>Query string (2)</h1>

  <ul>
    <li>First name: <?=$firstName?></li>
    <li>Last name: <?=$lastName?></li>
    <li>Occupation: <?=$occupation?></li>
  </ul>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL App</title>
</head>
<body>
<?php
  require_once("../util/mysqlToolkit.php");

  // step 1: connect
  require_once "settings.php";
  $dbconn = @mysqli_connect ($host, $user, $pwd, $db);

  if ($dbconn) {
    // connect: ok

    // alternative: select database after creating the connection
    // @mysqli_select_db($dbconn, $db);

    // step 2: create query
    $query = "SELECT * FROM cars";

    // step 3: execute query
    $result = mysqli_query ($dbconn, $query);

    // step 4: process query result
    if ($result) {
      // query ok, process result
      $count = mysqli_num_rows($result);
      echo "<p>Query: ok ($count records)";
    } else {
      // query error
      echo "<p>Query error";

      echo handleFuncError($dbconn);
    }

    // step 5: close connection after finished
    mysqli_close ($dbconn);
  } else {
    // error connecting to database
    echo "<p>Unable to connect to the db: $db.</p>";
    echo handleConnError($host);
  }
?>
</body>
</html>
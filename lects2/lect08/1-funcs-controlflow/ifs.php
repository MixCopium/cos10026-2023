<?php
if1();
echo "<p>";
if2();
echo "<p>";

if3();


function if1() {
  $exampleVar = 5;
  if ($exampleVar == 5) { // CONDITION EVALUATES TO 'TRUE'
    echo "<div>The condition evaluates to true.</div>";
    echo '<div>$exampleVar is equal to ', "$exampleVar.</div>";
    echo "<div>Each of these lines will be printed.</div>";
  }

  echo "<div>This statement always executes after if.</div>";
}

function if2() {
  // todo: how to get the current date/day?
  $today = 
    date("l"); //"Thursday";
    // getdate()["weekday"]
    ;

  $myDay = "Friday";
  if ($today == $myDay) {
    echo "<div>Today is $myDay</div>";
  } else {
    echo "<div>Today is not $myDay</div>";
  }
}

/* 
  1. Display the form on 1st request
  2. Process the form on submit
  3. display the result together with the form (with previous input)
*/
function if3() {
  // Usage: ONLY executes this script on the web server!
  // todo: how to test this function?
  $salesTotal = $_POST["salesTotal"];

  displayForm($salesTotal);

  if ($salesTotal > 50) {
    if ($salesTotal < 100) {
      echo "<div>The sales total is between 50 and 100.</div>";
    } else {
      echo "<div>sales total is >= 100.</div>";
    }
  } else {
    echo "<div>sales total is <= 50.</div>";
  }
}

function displayForm($salesTotal) {
  // echo '<form action="ifs.php" method="post">';
  // echo '  <label for="salesTotal">Sales total: ';
  // echo '    <input type="text" id="salesTotal" name="salesTotal" value="',$salesTotal,'">';
  // echo '  </label>';
  // echo '</form>';
  // use multi-line string format!!!
  $form = <<<BLK
  <form action="ifs.php" method="post">
    <label for="salesTotal">Sales total:
      <input type="text" id="salesTotal" name="salesTotal" value="$salesTotal">
    </label>
  </form>
  BLK;

  echo $form;
}
?>


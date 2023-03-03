<?php
$topGolfers = array("Tiger Woods", 
"Vijay Singh", 
"Ernie Els", 
"Phil Mickelson", 
"Retief Goosen", 
"Padraig Harrington",
"David Toms", 
"Sergio Garcia", 
"Adam Scott", 
"Stewart Cink");

$topFiveGolfers = array_slice($topGolfers, 2);
echo "<p>The top five golfers in the world are:</p><p>";
for ($i = 0; $i < count($topFiveGolfers); $i++) {
  echo "{$topFiveGolfers[$i]}<br />";
}
echo "</p>";

echo "<p>\$topGolfers (after): " . print_r($topGolfers, true). "<p/>";

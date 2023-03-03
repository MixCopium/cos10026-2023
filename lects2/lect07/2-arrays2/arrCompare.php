<?php
  $arr1 = array ("one"=>"apple", "two"=>"grapes");
  $arr2 = array ("three"=>"cherry", "two"=>"grapes");

  echo "<p>" ,'$arr1 (initial): ', print_r($arr1, true), "</p>";
  echo "<p>" ,'$arr2 (initial): ', print_r($arr2, true), "</p>";

  arrDiff();
  arrIntersect();

function arrDiff() {
  global $arr1, $arr2;
  $arr3 = array_diff($arr1, $arr2);
  echo "<p>" ,'$arr3 (diff($arr1, $arr2)): ', print_r($arr3, true), "</p>";

}

function arrIntersect() {
  global $arr1, $arr2;
  $arr3 = array_intersect($arr1, $arr2);
  echo "<p>" ,'$arr3 (intersect): ', print_r($arr3, true), "</p>";

}
?>
<?php
  echo longdate(time());

  function longdate($timestamp)
  {
	$temp = "The date is ";
    return $temp.date("l F jS Y", $timestamp);
  }
?>

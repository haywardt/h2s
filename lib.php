<?php
timeLapsed();
session_start();



function timeLapsed(){
  static $stime;
  $rtime = microtime(true) - $stime ;
  $stime = microtime(true);
  return $rtime;
}
?>

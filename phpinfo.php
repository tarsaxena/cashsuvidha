<?php 
//echo phpinfo();
//var_dump(memory_get_usage());
  //var_dump(memory_get_peak_usage());
echo $my_ip = $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo memory_get_usage();
if($_SERVER['REMOTE_ADDR']) 
{
  var_dump(memory_get_usage());
  echo "<br>";
  var_dump(memory_get_peak_usage());
}
echo phpinfo();
?>
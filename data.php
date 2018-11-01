<?php
//error_reporting(0);
include('config/configure.php');
$con = mysql_connect($config['server'],$config['user'],$config['pass']);
mysql_select_db($config['database']);

if($_POST['query']){
	$query = stripcslashes($_POST['query']);
	echo $query;
	echo '<br/>';
	$result = mysql_query($query)or die(mysql_error());
	$num_rows = mysql_affected_rows();
	echo "Your Query returned $num_rows rows:<br/>";
	$flag = true;
	if($num_rows){
		echo '<table border="1"><tr>';
		while ($row = mysql_fetch_assoc($result)) {
			if($flag){
				foreach ($row as $k => $v) {
				?>
				<td><?php echo $k;?></td>
				<?php
				}
				echo '</tr><tr>';
				$flag = false;
			}
			foreach ($row as $k => $v) {
			?>
			<td><?php echo $v;?></td>
		<?php
			}
			echo '</tr><tr>';
		}
		echo '</tr></table>';
	}
}
?>
<form name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="6%">&nbsp;</td>
      <td width="61%"><textarea name="query" cols="80" rows="10" id="query"></textarea></td>
      <td width="33%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="execute"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

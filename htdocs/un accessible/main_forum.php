<html>
<style>
body
{
background-image: url("http://ourclouds.weebly.com/uploads/2/8/8/4/28842373/246084792.jpg?551");
background-repeat: no-repeat;
background-size: 100%;
}
</style>
<body>
<?php

$host="localhost"; // Host name 
$username="root"; // mysqli username 
$password=""; // mysqli password 
$db_name="myforum"; // Database na	 
$tbl_name="fquestions"; // Table name 

// Connect to server and select databse.
$a=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($a,"$db_name")or die("mysqli_error($con)");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysqli_query($a,$sql);
?>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php

// Start looping table row
while($rows = mysqli_fetch_array($result)){
?>
<?php 
if($rows['topic']!='')
{
?>
<tr>
<td bgcolor="#FFFFFF">
<?php
}
?>
<?php 
if($rows['topic']!='')
{
echo $rows['id']; 
}
?>
<?php 
if($rows['topic']!='')
{
	?>
	</td>
<td bgcolor="#FFFFFF">
<a href="view_topic.php?id=">
<?php
}
?>

<?php 
if($rows['topic']!='')
{
    echo $rows['topic'];
}
?>
<?php 
if($rows['topic']!='')
{
	?></a><BR></td>
<td align="center" bgcolor="#FFFFFF">
<?php 
}
?>
<?php 
if($rows['topic']!='')
{
echo $rows['view']; 
}?>
<?php 
if($rows['topic']!='')
{
	?></td>
<?php 
}
?>
<?php 
if($rows['topic']!='')
{
	?>
<td align="center" bgcolor="#FFFFFF">
<?php
}
?>
<?php 
if($rows['topic']!='')
{
echo $rows['reply'];
}
 ?>
 </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysqli_close($a);
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="new_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
</body>
</html>

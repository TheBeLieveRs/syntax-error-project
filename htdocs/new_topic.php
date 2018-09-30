<!DOCTYPE html>
<html>
<head>
</head>
<style>
body{
background-image: url("http://ourclouds.weebly.com/uploads/2/8/8/4/28842373/246084792.jpg?551");
background-repeat: no-repeat;
background-size: 100%;
}
.a {
	margin-top: 200px;
}
.b {
	text-align: center;
}
a:link, a:visited {
	margin-left: 825px;
	background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}

a:hover, a:active {
    background-color: black;
}
</style>
<body>
<table class="a" width="400" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_new_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td class="b" colspan="3" bgcolor="#E6E6E6"><strong>Create Your Queries</strong> </td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50" /></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="text" id="email" size="50" /></td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>
<tr>
<td valign="top"><strong>Queries:</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>


<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> 
<input type="reset" name="Submit2" value="Reset" /></td>

</td>

</form>
</tr>
</table>
</table>
<?php
echo "<a href=main_forum.php>View your topic</a>";
?>
</body>
</html>
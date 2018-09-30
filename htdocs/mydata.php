<html>
<head>
</head>
<body>
<?php
$con = mysqli_connect("localhost","Matt");
if (!$con){
die("Can not connect: " . mysqli_error($con));
}
mysqli_select_db($con,"snippets");


if(isset($_POST['update'])){
$UpdateQuery = "UPDATE lectures SET Topic='$_POST[topic]', Name='$_POST[name]', Attendance='$_POST[attendance]' WHERE Topic='$_POST[hidden]'";               
mysqli_query($UpdateQuery, $con);
};

if(isset($_POST['delete'])){
$DeleteQuery = "DELETE FROM lectures WHERE Topic='$_POST[hidden]'";          
mysqli_query($DeleteQuery, $con);
};

if(isset($_POST['add'])){
$AddQuery = "INSERT INTO lectures (Topic, Name, Attendance) VALUES ('$_POST[utopic]','$_POST[uname]','$_POST[uattendance]')";         
mysqli_query($AddQuery, $con);
};



$sql = "SELECT * FROM lectures";
$myData = mysqli_query($con,$sql);
echo "<table border=1>
<tr>
<th>Topic</th>
<th>Name</th>
<th>Attendance</th>
</tr>";
while($record = mysqli_fetch_array($myData)){
echo "<form action=mydata5.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text name=topic value='" . $record['Topic'] . "' </td>";
echo "<td>" . "<input type=text name=name value='" . $record['Name'] . "' </td>";
echo "<td>" . "<input type=text name=attendance value='" . $record['Attendance'] . "' </td>";
echo "<td>" . "<input type=hidden name=hidden value='" . $record['Topic'] . "' </td>";
echo "<td>" . "<input type=submit name=update value=update" . " </td>";
echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "<form action=mydata5.php method=post>";
echo "<tr>";
echo "<td><input type=text name=utopic></td>";
echo "<td><input type=text name=uname></td>";
echo "<td><input type=text name=uattendance></td>";
echo "<td>" . "<input type=submit name=add value=add" . " </td>";
echo "</tr>";
echo "</form>";
echo "</table>";
mysqli_close($con);

?>

</body>
</html>
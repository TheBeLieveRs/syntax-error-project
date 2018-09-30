<html>
<style>
body{
background-image: url("http://ourclouds.weebly.com/uploads/2/8/8/4/28842373/246084792.jpg?551");
background-repeat: no-repeat;
background-size: 100%;
}
a:link, a:visited {
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
p
{
	font-family: Comic-Sans;
	text-align: center;
	font-size: 120px;
	color: red;

}
</style>
<body>
<?php

$host="localhost"; // Host name 
$username="root"; // mysqli username 
$password=""; // mysqli password 
$db_name="myforum"; // Database name 
$tbl_name="fquestions"; // Table name 

// Connect to server and select database.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("mysqli_error($db_name)");

// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($con,$sql);

if($result){
?>
<p>!!Successfully Submitted!!</p>;
<?php

echo "<a href=main_forum.php>.      View your topic</a>";
}
else {
echo "ERROR";
}
mysqli_close($con);
?>
</body>
</html>
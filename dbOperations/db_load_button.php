<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="assignments";

// Create connection
$index=$_GET['index'];
$module_id=$_GET['module_id'];
$module_id=trim($module_id);
$ass_id=$_GET['ass_id'];
$ass_id=trim($ass_id);

$module_id=trim($module_id);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT assignment_name FROM {$module_id} where assignment_id={$ass_id}";
$result=$conn->query($sql);
$conn->close();
$row=mysqli_fetch_array($result);
$ass_name=$row[0];
$ass_name=trim("ass_name");
$dbname="assignment_did_log";
$conn=new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM {$ass_name} where student_index={$index}";
$result=$conn->query($sql);
$output="";
$conn->close();
if(!empty($result)){
  $output.='<br><br><button class="button">Edit Submisson</button>';
}
else{
  $output.='<br><br><button class="button">Add Submisson</button>';
}
echo $output;
?>
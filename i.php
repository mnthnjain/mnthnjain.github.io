<?php
if( $_GET["email"]) {
      
   
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$email= $_GET["email"];
echo $name=$_GET["name"].":  ";
$city= $_GET["website"];
$age=$_GET["age"];
$gender= $_GET["gender"];
$q1=$_GET["q1"];
$q2=$_GET["q2"];
$q3=$_GET["q3"];
$q4=$_GET["q4"];
$q5=$_GET["q5"];
$q6=$_GET["q6"];
$q7=$_GET["q7"];
$q8=$_GET["q8"];
$q9=$_GET["q9"];
$q10=$_GET["q10"];
$q11=$_GET["q11"];
$q12=$_GET["q12"];
$q13=$_GET["q13"];
$q14=$_GET["q14"];
$q15=$_GET["q15"];
$q16=$_GET["q16"];
$q17=$_GET["q17"];
$q18=$_GET["q18"];
$q19=$_GET["q19"];
$q20=$_GET["q20"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO mdb (email,name,city,age,gender,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20) VALUES ('$email','$name','$city','$age','$gender','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20')";
mysqli_query($conn, $sql) or trigger_error(mysqli_error($sql)."in".$sql);

echo "your reqult has been recorded";


mysqli_close($conn);
exit();

}
?>
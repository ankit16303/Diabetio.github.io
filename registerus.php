<?php
$server_name= "localhost";
$username="root";
$password="";
$database_name="contact_us";
$conn = mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection 
if (!$conn) {
    die("Connection Failed:".mysqli_connect_error());
      }

if(isset($_POST['save']))
{
$name = $_POST['name'] ;
$email =$_POST['email' ];
$contact =$_POST['contact'];


$sql_query = "INSERT INTO register_table( name,email,contact)
VALUES('$name','$email','$contact')";

if (mysqli_query ($conn,$sql_query))
{
echo "New  Entry inserted successfully !";
}
else
{
   echo "Error:".$sql. "".mysqli_error($conn);
}
 mysqli_close ($conn);
}
?>

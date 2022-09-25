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
$first_name = $_POST['first_name'] ;
$last_name =$_POST['last_name'] ;
$email =$_POST['email' ];
$phone =$_POST['phone'];
$message = $_POST['message'];


$sql_query = "INSERT INTO query_details( first_name,last_name,email,phone,message)
VALUES('$first_name','$last_name ','$email','$phone','$message')";

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

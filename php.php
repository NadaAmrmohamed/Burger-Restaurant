<?php
$firstname=$_POST['nam'];
$number=$_POST['num'];
$address=$_POST['add'];

if(isset($_POST['bt']))
{

$host="localhost";
$user="root";
$password="";
$db="bis_level_four";

$conn = mysqli_connect($host,$user,$password,$db);


$insert="insert into studentsbisinfo values('$firstname','$number','$address')";
mysqli_query($conn,$insert);
if($conn){
    echo("<h1 style='color:green;'> Your Registration is Done! </h1>");
}
else{
    echo("<h1 style='color:red;'> Your Registration is Failed! </h1>"); 
}

}







?>
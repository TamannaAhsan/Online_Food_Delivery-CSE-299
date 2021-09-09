<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];

$email=$_POST['email'];
$location=$_POST['location'];
$number=$_POST['number'];
$message=$_POST['message'];


//connection code
$servername="localhost";
$username="root";
$dbpass="";
$dbname="food-delight";
$conn =new mysqli($servername,$username,$dbpass,$dbname);
if($conn->connect_error){

 die("Connection Failed".$conn->connect_error);


}
else{

    //echo"connected";
    $stmt=$conn->prepare("insert into delivery (firstName,lastName,email,location,number,message) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssis",$firstName,$lastName,$email,$location,$number,$message);
    $stmt->execute();
    echo"Submitted Successfully";
    $stmt->close();
    $conn->close();
}


?>

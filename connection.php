<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$location=$_POST['location'];
$number=$_POST['number'];


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
    $stmt=$conn->prepare("insert into delivery (firstName,lastName,gender,email,location,number) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$firstName,$lastName,$gender,$email,$location,$number);
    $stmt->execute();
    echo"Submitted Successfully";
    $stmt->close();
    $conn->close();
}


?>

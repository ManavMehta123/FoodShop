<?php
if (isset($_POST["sno"],$_POST["querytype"], $_POST["emailid"], $_POST["name"],$_POST["phone"],$_POST["Query"],$_POST["Membership"],$_POST["Query"])) {
    $sno = $_POST["sno"];
    $Querytype = $_POST["querytype"];
    $name = $_POST["name"];
    $emailid = $_POST["emailid"];
    $phone = $_POST["phone"];
    $Membership = $_POST["Membership"];
    $Query = $_POST["Query"];
}
require_once "config2.php";
$conn = new mysqli("localhost", "root", "", "customer");
if(mysqli_connect_error())
 {
    echo "error connection to db";
 }
 else
 {
  //  $query = "insert into contact(sno,Querytype,name , emailid ,phone ,Membership ,Query) values ('$sno',$Querytype','$name','$emailid','$phone','$Membership','$Query')";

			
     echo " Thank you for cantacting us , we will reach out to you,";
     echo "click";
     echo "<a href='index.html'>here</a>"; 
     echo "to go on main page";
 }
?>

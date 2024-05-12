<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name'])  &&
         isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['reason'])) {
        
        $username = $_POST['username'];
       
        $email = $_POST['email'];
        $phone = $_POST['phone'];
         $reason = $_POST['reason'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "customer";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT cancel_id FROM cancel WHERE name = ? LIMIT 1";
            $Insert = "INSERT INTO 'cancel'('name', 'email', 'phone','reason') values(?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $cancel_id);
            $stmt->execute();
            $stmt->bind_result($cancel_id);
            $stmt->store_result();
          
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$username, $email, $phone, $reason);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "Cancel request sent ";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
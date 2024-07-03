<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

// File upload handling

$target_file = basename($_FILES["pdfFile"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file is a PDF
if($fileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}

// Check file size (optional)
if ($_FILES["pdfFile"]["size"] > 5000000) {  // 5MB
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file and insert into database
} else {
    if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO app(firstName, lastName, Email, mobile, PDFfile) VALUES ('$firstName', '$lastName', '$email', '$mobile', '$target_file')";
        if ($conn->query($sql) === TRUE) {
            echo "New record added successfully."  ;
            exit();
    
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
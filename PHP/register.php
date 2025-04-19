<?php
 $servername = "localhost";  
$username = "root";  
$password = ""; 
$dbname = "AccountDB";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = mysqli_real_escape_string($conn, $_POST["firstName"]);
    $lastName = mysqli_real_escape_string($conn, $_POST["lastName"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $telephone = mysqli_real_escape_string($conn, $_POST["telephone"]);
    $regUsername = mysqli_real_escape_string($conn, $_POST["regUsername"]);
    $regPassword = password_hash($_POST["regPassword"], PASSWORD_DEFAULT);  
    $checkUsernameQuery = "SELECT username FROM Credentials WHERE username = '$regUsername'";
    $checkUsernameResult = $conn->query($checkUsernameQuery);

    if ($checkUsernameResult->num_rows > 0) {
        echo "Error: Username already exists. Please choose a different username.";
    } else {
 
        $sql = "INSERT INTO Credentials (firstName, lastName, address, telephone, username, password)
                VALUES ('$firstName', '$lastName', '$address', '$telephone', '$regUsername', '$regPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "Account created successfully! You can now <a href='login.html'>login</a>.";
        } else {
            echo "Error creating account: " . $conn->error;
        }
    }
}

$conn->close();
?>
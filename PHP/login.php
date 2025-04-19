<?php
session_start();  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AccountDB";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = mysqli_real_escape_string($conn, $_POST["username"]);
    $loginPassword = $_POST["password"];
 
    $sql = "SELECT id, username, password FROM Credentials WHERE username = '$loginUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc(); 
        if (password_verify($loginPassword, $row["password"])) { 
            $_SESSION["loggedin"] = true;
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            header("Location: welcome.php"); //  
            exit();
        } else {
            echo "Error: Incorrect password.";
        }
    } else {
        echo "Error: User not found.";
    }
}

$conn->close();
?>
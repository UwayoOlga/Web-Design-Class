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
 
$loginMessage = '';
$registerMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST['username']) && isset($_POST['password'])) { 
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
                header("Location: welcome.php");
                exit();
            } else {
                $loginMessage = "<p style='color:red; margin-top:-20px; margin-left:5px; margin-right:5px; font-weight: bold; background-color:rgba(197, 194, 194, 0.93); font-size: 0.7em;'>Error: Incorrect password.</p>";
            }
        } else {
            $loginMessage = "<p style='color:white;'>Error: User not found.</p>";
        }
    } 
    elseif (isset($_POST['firstName']) && isset($_POST['lastName'])) {
        // Registration form processing
        $firstName = mysqli_real_escape_string($conn, $_POST["firstName"]);
        $lastName = mysqli_real_escape_string($conn, $_POST["lastName"]);
        $address = mysqli_real_escape_string($conn, $_POST["address"]);
        $telephone = mysqli_real_escape_string($conn, $_POST["telephone"]);
        $regUsername = mysqli_real_escape_string($conn, $_POST["regUsername"]);
        $regPassword = password_hash($_POST["regPassword"], PASSWORD_DEFAULT);  
        
        $checkUsernameQuery = "SELECT username FROM Credentials WHERE username = '$regUsername'";
        $checkUsernameResult = $conn->query($checkUsernameQuery);

        if ($checkUsernameResult->num_rows > 0) {
            $registerMessage = "<p style='color:red; margin:10px; font-weight: bold; background-color: white; font-size: 1.2em;'>Error: Username already exists. Please choose a different username.</p>";
        } else {
            $sql = "INSERT INTO Credentials (firstName, lastName, address, telephone, username, password)
                    VALUES ('$firstName', '$lastName', '$address', '$telephone', '$regUsername', '$regPassword')";

            if ($conn->query($sql) === TRUE) {
                $registerMessage = "<p style='color:green; margin:10px; font-weight: bold; background-color: white; font-size: 1.2em;'>Account created successfully! You can now login.</p>";
                
            } else {
                $registerMessage = "<p style='color:red; margin:10px; font-weight: bold; background-color: white; font-size: 1.2em;'>Error creating account: " . $conn->error . "</p>";
            }
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment5</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

<div class="outer-container" width="100%">
    <div class="login-form">
        <h1 id="h1login">Login Form</h1>
        <div style="height: 5px; background-color: transparent; border-bottom: 2px solid rgb(197, 194, 194); margin: 10px 0;"></div>
<pre><form id="loginform" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="username">User-Name:</label><input type="text" id="username" name="username" required>
     <label for="password">Password:</label><input type="password" id="password" name="password" required>
        <button type="submit">Login</button>  <button type="reset">Cancel</button>
        <?php if (!empty($loginMessage)) echo $loginMessage; ?>
</form></pre>
    </div>

    <div class="registration-form">
        <h1 id="regD">Registration form</h1>
        <div style="height: 5px; background-color: transparent; border-bottom: 2px solid rgb(196, 196, 196); margin: 10px 0;"></div>
<pre>
    <form id="registrationForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <label for="firstName">FIRST-NAMES:</label><input type="text" id="firstName" name="firstName" required>

      <label for="lastName">LAST-NAME:</label><input type="text" id="lastName" name="lastName" required>

        <label for="address">ADDRESS:</label><input type="text" id="address" name="address" required>

      <label for="telephone">TELEPHONE:</label><input type="text" id="telephone" name="telephone" required>

     <label for="regUsername">USER-NAME:</label> <input type="text" id="regUsername" name="regUsername" required>

       <label for="regPassword">PASSWORD:</label><input type="password" id="regPassword" name="regPassword" required>

              <button type="submit">Signup</button>             <button type="reset">Cancel</button>
              
    <?php if (!empty($registerMessage)) echo $registerMessage; ?>

</form></pre>
    </div>
</div>

</body>
</html>
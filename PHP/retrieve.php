<?php
include 'db_connection.php';

// Debugging: Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, employee_name, employee_address, monthly_salary, employment_period, benefit_percentage, total_pension_amount, monthly_pension_amount FROM employees";
$result = $conn->query($sql);

// Debugging: Check for query errors
if (!$result) {
    die("Query failed: " . $conn->error);
}

echo "<h2>Retrieved Employee Pension Data</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Monthly Salary</th><th>Employment Period</th><th>Benefit %</th><th>Total Pension</th><th>Monthly Pension</th><th>Action</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["employee_name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["employee_address"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["monthly_salary"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["employment_period"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["benefit_percentage"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["total_pension_amount"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["monthly_pension_amount"]) . "</td>";
        echo "<td>
                <form action='delete.php' method='post' style='display:inline;'>
                    <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                    <input type='submit' value='Delete'>
                </form>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No employee pension data found in the database.";
}

echo '<br><a href="indexx.php">Go back to the form</a>';

$conn->close();
?>
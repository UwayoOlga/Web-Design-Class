<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = $_POST["calculated_employee_name"];
    $employee_address = $_POST["calculated_employee_address"];
    $monthly_salary = $_POST["calculated_monthly_salary"];
    $employment_period = $_POST["calculated_employment_period"];
    $benefit_percentage = $_POST["calculated_benefit_percentage"];
    $total_amount = $_POST["total_amount"];
    $monthly_amount = $_POST["monthly_amount"];

    $sql = "INSERT INTO employees (employee_name, employee_address, monthly_salary, employment_period, benefit_percentage, total_pension_amount, monthly_pension_amount)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiddss", $employee_name, $employee_address, $monthly_salary, $employment_period, $benefit_percentage, $total_amount, $monthly_amount);

    if ($stmt->execute()) {
        echo "Data saved successfully!";
        echo '<br><a href="indexx.php">Go back to the form</a>';
    } else {
        echo "Error saving data: " . $stmt->error;
        echo '<br><a href="indexx.php">Try again</a>';
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: indexx.php");
    exit();
}
?>
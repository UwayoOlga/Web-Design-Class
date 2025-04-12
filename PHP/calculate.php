<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = $_POST["employee_name"];
    $employee_address = $_POST["employee_address"];
    $monthly_salary = floatval($_POST["monthly_salary"]);
    $employment_period = intval($_POST["employment_period"]);
    $benefit_percentage = floatval($_POST["benefit_percentage"]);
 
    $total_amount = $monthly_salary * $employment_period * ($benefit_percentage / 100);
 
    $monthly_amount = $total_amount / ($employment_period * 12);  
    $total_amount_formatted = number_format($total_amount, 2);
    $monthly_amount_formatted = number_format($monthly_amount, 2);
 
    echo "<form id='redirectForm' action='indexx.php' method='post'>";
    echo "<input type='hidden' name='calculated_total_amount' value='" . $total_amount_formatted . "'>";
    echo "<input type='hidden' name='calculated_monthly_amount' value='" . $monthly_amount_formatted . "'>";
    echo "<input type='hidden' name='calculated_employee_name' value='" . htmlspecialchars($employee_name) . "'>";
    echo "<input type='hidden' name='calculated_employee_address' value='" . htmlspecialchars($employee_address) . "'>";
    echo "<input type='hidden' name='calculated_monthly_salary' value='" . $monthly_salary . "'>";
    echo "<input type='hidden' name='calculated_employment_period' value='" . $employment_period . "'>";
    echo "<input type='hidden' name='calculated_benefit_percentage' value='" . $benefit_percentage . "'>";
    echo "</form>";
    echo "<script>document.getElementById('redirectForm').submit();</script>";
} else {
     
    header("Location: indexx.php");
    exit();
}
?>
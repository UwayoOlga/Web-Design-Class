function calculatePension() {
     
    const employeeName = document.getElementById("employee_name").value.trim();
    const monthlySalaryInput = document.getElementById("monthly_salary").value;
    const employmentPeriodInput = document.getElementById("employment_period").value;
    const benefitPercentageInput = document.getElementById("benefit_percentage").value;
 
    if (employeeName === "") {
        alert("Please enter employee name");
        document.getElementById("employee_name").focus();
        return false;
    }
 
    const monthlySalary = parseFloat(monthlySalaryInput);
    if (isNaN(monthlySalary)) {
        alert("Please enter a valid number for monthly salary");
        document.getElementById("monthly_salary").focus();
        return false;
    }
    if (monthlySalary < 0) {
        alert("Monthly salary must be a positive value");
        document.getElementById("monthly_salary").focus();
        return false;
    }
 
    const employmentPeriod = parseInt(employmentPeriodInput);
    if (isNaN(employmentPeriod) || employmentPeriodInput.indexOf('.') !== -1) {
        alert("Employment period must be a whole number (integer)");
        document.getElementById("employment_period").focus();
        return false;
    }
    if (employmentPeriod < 0) {
        alert("Employment period must be a positive value");
        document.getElementById("employment_period").focus();
        return false;
    }
 
    const benefitPercentage = parseFloat(benefitPercentageInput);
    if (isNaN(benefitPercentage)) {
        alert("Please enter a valid number for benefit percentage");
        document.getElementById("benefit_percentage").focus();
        return false;
    }
    if (benefitPercentage < 0 || benefitPercentage > 100) {
        alert("Benefit percentage must be between 0 and 100");
        document.getElementById("benefit_percentage").focus();
        return false;
    }
 
    const totalAmount = monthlySalary * employmentPeriod * (benefitPercentage / 100);
    const monthlyAmount = totalAmount / (employmentPeriod * 12);  
    document.getElementById("total_amount").value = totalAmount.toFixed(2);
    document.getElementById("monthly_amount").value = monthlyAmount.toFixed(2);
 
    document.getElementById("calculated_employee_name").value = employeeName;
    document.getElementById("calculated_employee_address").value = document.getElementById("employee_address").value;
    document.getElementById("calculated_monthly_salary").value = monthlySalary;
    document.getElementById("calculated_employment_period").value = employmentPeriod;
    document.getElementById("calculated_benefit_percentage").value = benefitPercentage;

    return true;
}
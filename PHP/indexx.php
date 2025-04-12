<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script src="script.js"></script>
<div id="greenB">
        <div id="banner"><img src="banner.jpeg" width="100%" height="65"></div>
        <div id="middleD">
           <div id="icdlimage"><img src="icdl.jpeg" height="300px" width="400px"> </div>

           <div id="formD">
              <h4 id="hE">EMPLOYEE PENSION MANAGEMENT SYSTEM:</h4>
                  <pre >      <form style="margin-top: -13px;" action="submit.php" method="post" onsubmit="return calculatePension()"> 
     <label for="employee_name">EMPLOYEE NAMES:</label><input type="text" id="employee_name" name="employee_name" required> 
   <label for="employee_address">EMPLOYEE ADDRESS:</label><input type="text" id="employee_address" name="employee_address"> 
     <label for="monthly_salary">MONTHLY SALARY:</label><input type="number" id="monthly_salary" name="monthly_salary" step="0.01" required> 
<label for="employment_period">EMPLOYEEMENT-PERIOD:</label><input type="number" id="employment_period" name="employment_period" required> 
       <label for="benefit_percentage">benefit IN %:</label><input type="number" id="benefit_percentage" name="benefit_percentage" step="0.01" required>
              </pre>
              
              <pre>
              <div style="border-top: 1px solid gray; margin-top: 15px; "></div>
 <input style="margin-top: 7px;" type="button" value="CLICK TO CALCULATE" onclick="calculatePension()">
<label class="bold">Total amount:</label>
<input type="text" id="total_amount" name="total_amount" style="width: 100px;" readonly>
<label class="bold">Amount per mounth:</label>
<input type="text" id="monthly_amount" name="monthly_amount" style="width: 100px;" readonly></pre>
<input type="hidden" id="calculated_employee_name" name="calculated_employee_name"> <div style="border-top: 1px solid gray; margin-top: 15px; "></div>
                    <input type="hidden" id="calculated_employee_address" name="calculated_employee_address">
                    <input type="hidden" id="calculated_monthly_salary" name="calculated_monthly_salary">
                    <input type="hidden" id="calculated_employment_period" name="calculated_employment_period">
                    <input type="hidden" id="calculated_benefit_percentage" name="calculated_benefit_percentage">
<pre style="margin-top:3px;">
 
        <input type="submit" value="SUBMIT">     <input type="button" value="RETRIEVE" onclick="window.location.href='retrieve.php';">    <input type="button" value="DELETE" onclick="window.location.href='delete.php';"> </form>
    </pre>
    
        </div>
           <div id="workforce"> <img src="workforce.jpeg" height="300px" width="90%"></div>
        </div>
        <div id="programmesH" > <h2> ICDL Programmes</h2></div>
        <div id="Programmes">
            <div id="p1" >
                <h4 style="margin: 0;">ICDL</h4>
                <h4 style="margin: 5px;">Workforce</h4>
                <p style="margin-top: 0; padding-top: 10px;">Digital Skills for Employability and productivity</p>
            </div>

            <div id="p2">
                <h4 style="margin: 0;"> ICDL</h4>
                <H4 style="margin: 5px;">Professional</H4>
                <p>Digital Skills for occupational effectiveness</p>
            </div>
            <div id="p3">
                <h4 style="margin: 0;"> ICDL</h4>
                            <H4 style="margin: 5px;">Digital Students</H4>
                            <p>Digital Skills to design and develop, share and protect </p>
            </div>
            <div id="p4">
                <h4 style="margin: 0;"> ICDL</h4>
                            <H4 style="margin: 5px;">Digital Citizen</H4>
                            <p>Digital Skills toacess, engage and build computer confidence </p>
            </div>
            <div id="p5">
                <h4 style="margin: 0;"> ICDL</h4>
                            <H4 style="margin: 5px;">Digital Citizen</H4>
                            <p>Digital Skills toacess, engage and build computer confidence </p>
            </div>

        </div>

    </div>
</body>
</html>
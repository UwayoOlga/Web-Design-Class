function getInputValue(id, maxScore) {
    try {
        const value = document.getElementById(id).value;
        const num = parseInt(value);
        
        if (isNaN(num)) {
            throw new Error(`Please enter a valid number for ${id}`);
        }
        if (num < 0 || num > maxScore) {
            throw new Error(`Please enter a value between 0 and ${maxScore} for ${id}`);
        }
        
        return num;
    } catch (error) {
        alert(error.message);
        document.getElementById(id).value = ""; 
        document.getElementById(id).focus();  
        throw error;  
    }
}

function CalculateTotal() {
    try {
        var coursework = getInputValue("coursework", 30);
        var midterm = getInputValue("midterm", 30);
        var finalexam = getInputValue("finalexam", 40);
        
        var total = coursework + midterm + finalexam;
        document.getElementById("total").value = total;
    } catch (e) {
       
    }
}

function CalculateAverage() {
    try {
        var coursework = getInputValue("coursework", 30);
        var midterm = getInputValue("midterm", 30);
        var finalexam = getInputValue("finalexam", 40);
        
        var average = (coursework + midterm + finalexam) / (30 + 30 + 40) * 100;
        document.getElementById("average").value = average.toFixed(2) + "%";
    } catch (e) {
        
    }
}

function GradeButton() {
    try {
        var coursework = getInputValue("coursework", 30);
        var midterm = getInputValue("midterm", 30);
        var finalexam = getInputValue("finalexam", 40);
        var total = coursework + midterm + finalexam;
        var percentage = (total / 100) * 100;  

        if (percentage >= 70) {
            document.getElementById("grade").value = "A";
        } else if (percentage >= 60) {
            document.getElementById("grade").value = "B";
        } else if (percentage >= 50) {
            document.getElementById("grade").value = "C";
        } else {
            document.getElementById("grade").value = "Failed";
        }
    } catch (e) {
        
    }
}
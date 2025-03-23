
function calculateTotal() {
    
    var courseWork = parseFloat(document.getElementById('courseWork').value);
    var midTerm = parseFloat(document.getElementById('midTerm').value);
    var finalExam = parseFloat(document.getElementById('finalExam').value);

    
    if (isNaN(courseWork) || isNaN(midTerm) || isNaN(finalExam)) {
        alert("Please enter valid numbers for all fields.");
        return;
    }

    var total = courseWork + midTerm + finalExam;

    
    alert("Total Marks: " + total);
}


function calculateAverage() {
   
    var courseWork = parseFloat(document.getElementById('courseWork').value);
    var midTerm = parseFloat(document.getElementById('midTerm').value);
    var finalExam = parseFloat(document.getElementById('finalExam').value);

    
    if (isNaN(courseWork) || isNaN(midTerm) || isNaN(finalExam)) {
        alert("Please enter valid numbers for all fields.");
        return;
    }

    
    var average = (courseWork + midTerm + finalExam) / 3;

    
    alert("Average Marks: " + average.toFixed(2));
}
function clearFields() {
    
    document.getElementById('courseWork').value = '';
    document.getElementById('midTerm').value = '';
    document.getElementById('finalExam').value = '';
  
    document.querySelector('form').reset();
}

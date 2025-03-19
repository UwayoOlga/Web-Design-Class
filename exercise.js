function calculateTotal() {
    let courseWork = parseFloat(document.getElementById('courseWork').value) || 0;
    let midTerm = parseFloat(document.getElementById('midTerm').value) || 0;
    let finalExam = parseFloat(document.getElementById('finalExam').value) || 0;

    let total = courseWork + midTerm + finalExam;
    document.getElementById('total').innerText = total;
}

function calculateAverage() {
    let total = parseFloat(document.getElementById('total').innerText) || 0;
    let average = total / 3;
    document.getElementById('average').innerText = average.toFixed(2);
}

function clearFields() {
    document.getElementById('studentName').value = "";
    document.getElementById('studentId').value = "";
    document.getElementById('department').value = "";
    document.getElementById('courseWork').value = "";
    document.getElementById('midTerm').value = "";
    document.getElementById('finalExam').value = "";
    document.getElementById('total').innerText = "0";
    document.getElementById('average').innerText = "0";
}

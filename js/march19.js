 
 function total(){
    var act= parseInt(document.getElementById('class').value);
    var mid= parseInt(document.getElementById('term').value);
    var fin= parseInt(document.getElementById('exam').value);
    var sum=act + mid + fin;
    document.write(sum);

 }

 function average(){
    var act= parseInt(document.getElementById('class').value);
    var mid= parseInt(document.getElementById('term').value);
    var fin= parseInt(document.getElementById('exam').value);
    var average=(act + mid + fin)/3;
    document.write(average);
 }
 function grade() {
    var act = parseInt(document.getElementById('class').value);
    var mid = parseInt(document.getElementById('term').value);
    var fin = parseInt(document.getElementById('exam').value);
    var average = (act + mid + fin) / 3;
    if (average > 80 && average <= 100) {
        document.write('A');
    } else if (average > 70 && average <= 80) {
        document.write('B');
    } else if (average > 60 && average <= 70) {
        document.write('C');
    } else if (average > 50 && average <= 60) {
        document.write('D');
    } else {
        document.write('F');
    }
}
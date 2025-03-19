 
 function total(){
    var act= parseInt(document.getElementById('class').value);
    var mid= parseInt(document.getElementById('term').value);
    var fin= parseInt(document.getElementById('exam').value);
    var sum=act + mid + fin;
    document.getElementById('result').value = sum;

 }

 function average(){
    var act= parseInt(document.getElementById('class').value);
    var mid= parseInt(document.getElementById('term').value);
    var fin= parseInt(document.getElementById('exam').value);
    var average=(act + mid + fin)/3;
    document.getElementById('result').value = average;
 }
 function grade() {
    var act = parseInt(document.getElementById('class').value);
    var mid = parseInt(document.getElementById('term').value);
    var fin = parseInt(document.getElementById('exam').value); 

    var sum = act + mid + fin;  
 
    if (sum >= 80 && sum <= 100) {  
        document.getElementById('result').value = 'A';
    } else if (sum >= 70) {
        document.getElementById('result').value = 'B';
    } else if (sum >= 60) {
        document.getElementById('result').value = 'C';
    } else if (sum >= 50) {
        document.getElementById('result').value = 'D';
    } else {
        document.getElementById('result').value = 'FAIL';
        
    }
}

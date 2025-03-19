 
 function total(){
    var act= parseInt(document.getElementById('class').value);
    var mid= parseInt(document.getElementById('term').value);
    var fin= parseInt(document.getElementById('exam').value);
    var sum=act + mid + fin;
    document.write(sum);

 }
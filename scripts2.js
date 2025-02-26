 function check(){
 var name = document.getElementById('user').value;
 var word = document.getElementById('pass').value;
 if (name=="Peter" && word == 123){
    document.write('<a href="jsLesson2.html">Click</a>');
 }
 else{
    alert("Please enter the correct password");
 }
}


function Calculate(){
    var product = document.getElementById("total").value;
    var Price = document.getElementById("unit").value;
    var Answer = product * Price;
    document.write(Answer);
}

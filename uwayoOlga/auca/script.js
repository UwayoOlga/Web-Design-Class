function check(){
    var name = document.getElementById('olga').value;
    var word = document.getElementById('123').value;
    if (name=="olga" && word == 123){
      window.location.href = "index2.html";
    }
    else if (name=="" || word == ""){
        alert("One of the entered values is wrong");
     }
    else{
       alert("Please enter the correct values as you defined");
    }
   }
    
   
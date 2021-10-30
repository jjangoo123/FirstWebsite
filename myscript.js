function pload(){
    var datenow= new Date();
    document.getElementById("date1").innerHTML="Today is :"+datenow.toDateString();
    document.getElementById("time1").innerHTML="Time Now is :"+datenow.toTimeString();
    
}
function checkPassword(){
    
    var password1 = document.getElementsByName("password1")[0].value;
    var password2 = document.getElementsByName("password2")[0].value;
    
    if (password1!==password2){
        alert("Please enter same password");
        window.document.getElementsByName("password1")[0].value="";
        window.document.getElementsByName("password2")[0].value="";
    }
}
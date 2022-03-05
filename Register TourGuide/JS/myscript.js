function checkpasswords(){
    if(document.getElementById("epassword").value != document.getElementById("repassword").value){
        alert("Passwords Does not match");
        return false;
    
    }else{
        
        return true;
    }
}
function enablebutton(){
    if (document.getElementById("privacy").checked){
        document.getElementById("submit").disabled=false;
    }
    else{
        document.getElementById("submit").disabled=true;   
    }
}
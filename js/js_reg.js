function validate(){
    var name = document.getElementById("name");
    var phone = document.getElementById("phone");
    var email = document.getElementById("email");
    var pass = document.getElementById("password");

    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var phoneformat=/^\d{10}$/;
    var passformat=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

    if (name.value.trim() == "")
    {
        alert("Name Cannot Be Empty!");
        return false;
    }
    if(!phone.value.match(phoneformat))
    {
        alert("Please Enter a 10 Digit Phone Number");
        return false;
    }
    if(!email.value.match(mailformat))
    {
        alert("Please Enter a Valid Email Address!");
        return false;
    }
    if(!pass.value.match(passformat)) 
    { 
        alert('Enter Valid Password Of 7 to 15 Characters Which Contain At Least One Numeric Digit And a Special Character');
        return false;
    }
    return true;
}

$(document).ready(function(){
    $('input').focus(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    
  });
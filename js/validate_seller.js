function validate()
{
    var firmname =document.forms["seller_reg"]["firmname"];
    var owner =document.forms["seller_reg"]["owner"];
    var email =document.forms["seller_reg"]["email"];
    var mobile =document.forms["seller_reg"]["mobile"];
    var gender =document.forms["seller_reg"]["gender"];

    if (firmname.value == "")                                  
    { 
        window.alert("Please enter your Store name."); 
        firmname.focus(); 
        return false; 
    }
    if (owner.value == "")                                  
    { 
        window.alert("Please enter the Owner name."); 
        owner.focus(); 
        return false; 
    } 
    if (email.value == "")                                  
    { 
        window.alert("Please enter your email address."); 
        email.focus(); 
        return false; 
    } 
    if (mobile.value == "")                                  
    { 
        window.alert("Please enter your Mobile Number."); 
        mobile.focus(); 
        return false; 
    } 
    if (gender.value == "")                                  
    { 
        window.alert("Please enter the owner's gender."); 
        gender.focus(); 
        return false; 
    }  
}
$(document).ready(function() {
    $("#signup").trigger("reset");
     
    $("#btn_signup").attr("disabled", "disabled");
  
    $("#btn_signup").bind("click",function(){    
        })
      
    $("#signup input").keyup(function(){  
        commonSignupValidation();
    });

    
});
    

function commonSignupValidation(){
    var inputArray = new Array();
    inputArray.push("inputCompanyName,string,"+invalidCompanyName);
    inputArray.push("inputFirst,string,"+invalidFirstName);
    inputArray.push("inputLast,string,"+invalidLastName);
    inputArray.push("inputEmail,email,"+invalidEmail);
    inputArray.push("inputUserId,username,"+reqUserInput);
    inputArray.push("UserPassword,password,"+reqPasswordInput);
    inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
    if( validateAndShowError(inputArray, "signupmsg")){
        $("#btn_signup").removeAttr("disabled"); 
    }  
    else {
        $("#btn_signup").attr("disabled", "disabled");
    }  
   
}

 
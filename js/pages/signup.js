$(document).ready(function() {
     $("#signup").trigger("reset");
    $("#btn_signup").bind("click",function(){
        
        var inputArray = new Array();
        inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("UserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
        
        
    })
    
     $("#inputCompanyName").bind("keyup", function() {
        var inputArray = new Array();
        inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("UserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
    });
    
      $("#inputFirst").bind("keyup", function() {
        var inputArray = new Array();
        inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("UserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
    });
    
    $("#inputLast").bind("keyup", function() {
        var inputArray = new Array();
         inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("UserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
    });
    
    $("#inputEmail").bind("keyup", function() {
        var inputArray = new Array();
         inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("UserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
    });
    
    $("#inputUserId").bind("keyup", function() {
        var inputArray = new Array();
         inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("UserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
    });
    
     $("#UserPassword").bind("keyup", function() {
        var inputArray = new Array();
         inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("UserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
    });
    
     $("#inputconfirmPassword").bind("keyup", function() {
        var inputArray = new Array();
         inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("UserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
    });
    
});
    
    function validateAndShowError(arrayInput, errorDiv){
    var msg = '';
        
    for(var i=0; i< arrayInput.length; i++){
        
        var inputFields = arrayInput[i].split(",");
        var inputFieldId = '#' + inputFields[0];
        var regExp = inputFields[1];
        var errorMsg = inputFields[2];
        if(!validation($(inputFieldId).val(), regExp)) msg += errorMsg +"<br/>";
    }
    
    if(msg !== '') {
        $('#'+errorDiv).html(msg).show();
        return false;
    }
   else{
         $('#'+errorDiv).html(msg).hide();
        return true;
    }

}

$(document).ready(function() {
     $("#signup").trigger("reset");
    $("#btn_signup").bind("click",function(){
        
        var inputArray = new Array();
        inputArray.push("inputCompanyName,string,"+invalidCompanyName);
        inputArray.push("inputFirst,string,"+invalidFirstName);
        inputArray.push("inputLast,string,"+invalidLastName);
        inputArray.push("inputEmail,email,"+invalidEmail);
        inputArray.push("inputUserId,username,"+reqUserInput);
        inputArray.push("inputUserPassword,password,"+reqPasswordInput);
        inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
        
        
    })
    
    
    $("#inputUsername").bind("keyup", function() {
        var inputArray = new Array();
        inputArray.push("inputUserId,string,"+reqUserInput);
        inputArray.push("inputconfirmPassword,string,"+reqPasswordInput);
        validateAndShowError(inputArray, "loginmsg");
    });
    
    $("#inputPassword").bind("keyup", function() {
        var inputArray = new Array();
        inputArray.push("inputUserId,string,"+reqUserInput);
        inputArray.push("inputconfirmPassword,string,"+reqPasswordInput);
        validateAndShowError(inputArray, "loginmsg");
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

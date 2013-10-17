$(document).ready(function() {
    $("#btn_signup").bind("click",function(){
        
        var inputArray = new Array();
        inputArray.push("inputCompanyName,string,"+invalidUserInput);
        inputArray.push("inputFirst,string,"+invalidPasswordInput);
        inputArray.push("inputLast,string,"+invalidUserInput);
        inputArray.push("inputEmail,string,"+invalidPasswordInput);
        inputArray.push("inputUserId,string,"+invalidUserInput);
        inputArray.push("inputUserPassword,string,"+invalidPasswordInput);
        inputArray.push("inputconfirmPassword,string,"+invalidPasswordInput);
        validateAndShowError(inputArray, "signupmsg");
        
        
    })

});
$(document).ready(function() {
    $("#btn_login").bind("click", function() {
      
        var inputArray = new Array();
        inputArray.push("inputUsername,string,"+invalidUserInput);
        inputArray.push("inputPassword,string,"+invalidPasswordInput);
        validateAndShowError(inputArray, "loginmsg");
    // showProgress();
    //login($("#username").val(), $("#password").val());
    //startAppTimer(MAX_TRANSACTION_TIME);
    //appstate = trans.TRAN_LOGIN;
        
    });
	
	$("#forgotPasswordLnk").bind("click", function() {
      
       bootbox.prompt("What is your name?", function(result) {
		if (result === null) {
			console.log("Prompt dismissed");
		} else {
			console.log("Hi <b>"+result+"</b>");
		}
		});
        
    });
	
    
     $("#inputUsername").bind("keyup", function() {
        var inputArray = new Array();
        inputArray.push("inputUsername,string,"+invalidUserInput);
        inputArray.push("inputPassword,string,"+invalidPasswordInput);
        validateAndShowError(inputArray, "loginmsg");
    });
    
    $("#inputPassword").bind("keyup", function() {
        var inputArray = new Array();
        inputArray.push("inputUsername,string,"+invalidUserInput);
        inputArray.push("inputPassword,string,"+invalidPasswordInput);
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
    }else{
         $('#'+errorDiv).html(msg).hide();
        return true;
    }

}


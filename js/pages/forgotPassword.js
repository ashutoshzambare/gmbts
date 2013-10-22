$(document).ready(function() {
     $("#forgotPassword").trigger("reset");
    $("#btn_forgotPassword").bind("click", function() {
      
        var inputArray = new Array();
        inputArray.push("inputRegEmail,email,"+invalidUserInput);
        validateAndShowError(inputArray, "loginmsg");
    // showProgress();
    //login($("#username").val(), $("#password").val());
    //startAppTimer(MAX_TRANSACTION_TIME);
    //appstate = trans.TRAN_LOGIN;
        
    });

 });

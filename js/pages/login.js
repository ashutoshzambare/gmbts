$(document).ready(function() {
    $("#login").trigger("reset");
    
    $("#btn_login").attr("disabled", "disabled");
    
    $("#btn_login").bind("click", function() {
        console.log("UserName is: "+ $("#inputUsername").val() +" and Password is: "+ $("#inputPassword").val());
        login($("#inputUsername").val(),$("#inputPassword").val());
        showProgress();
    });
	
    $("#login input").keyup(function(){ 
        commonLoginaValidation(); 
    });

});

function commonLoginaValidation() {
       
    var inputArray = new Array();
    inputArray.push("inputUsername,email,"+invalidEmail);
    inputArray.push("inputPassword,password,"+invalidPasswordInput);
    if(validateAndShowError(inputArray, "loginmsg")){
        $("#btn_login").removeAttr("disabled"); 
    }  
    else{
        $("#btn_login").attr("disabled", "disabled");
    }
        
}


function login(username, password){

    var data = new Object();
    data.loginName = username;
    data.loginPassword = password;
       
    data = JSON.stringify(data);
    $.ajax({
        type: "POST",
        contentType: 'application/json',
        url: "api/login",
        data: data,
        success: function(data, textStatus, jqXHR){
            hideProgress();
            data = JSON.parse(data);
            if(data.error){
                showAlertMsg(data.error.text);
            }else{
                window.location=data.success.text;
            }
        },
        error:function(){
            hideProgress();
            showAlertMsg("Wrong User Name or Password");
        }  
    });  
}
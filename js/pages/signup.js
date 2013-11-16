$(document).ready(function() {
    $("#signup").trigger("reset");
     
    $("#btn_signup").attr("disabled", "disabled");
  
    $("#btn_signup").bind("click",function(){
        if (!($('#acceptTermofService').is(":checked")))
        {
            $("#signupmsg").html("Please accept Terms of service to proceed.").show();
        }else{
            $("#signupmsg").hide();
            showProgress();
            //   console.log("Company Name is: "+ $("#inputCompanyName").val() +" and First Name is: "+ $("#inputFirst").val()+" and Last Name is: "+ $("#inputLast").val()+" and Email is: "+ $("#inputEmail").val() +" and User Password is: "+ $("#UserPassword").val()+" and confirm Password is: "+ $("#inputconfirmPassword").val()  );
            signup($("#inputCompanyName").val(),$("#inputFirst").val(),$("#inputLast").val(),$("#inputEmail").val(),$("#UserPassword").val());
        }
           
    });
    
    $("#acceptTermofService").bind("click",function(){
        if (!($('#acceptTermofService').is(":checked")))
        {
            $("#signupmsg").html("Please accept Terms of service to proceed.").show();
        }else{
            $("#signupmsg").hide();
        }
           
    });
    
    
      
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
    inputArray.push("UserPassword,password,"+reqPasswordInput);
    inputArray.push("inputconfirmPassword,conpass,"+reqconPasswordInput);
    if( validateAndShowError(inputArray, "signupmsg")){
        $("#btn_signup").removeAttr("disabled"); 
    }  
    else {
        $("#btn_signup").attr("disabled", "disabled");
    }  
   
}

 
function signup(companyName , firstName , lastName , email , password){

    var data = new Object();
    data.companyName = companyName;
    data.firstName = firstName;
    data.lastName = lastName;
    data.email = email;
    data.password = password;  
    data = JSON.stringify(data);
    console.log(data);
    $.ajax({
        type: "POST",
        contentType: 'application/json',
        url: "api/signup",
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
            showAlertMsg("Wrong Email or Password");
        }  
    });  
}
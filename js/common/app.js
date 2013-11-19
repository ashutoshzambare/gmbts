$loadingOpen = false;
	
function validation(value, type, size) {
    var RegEx;

    if (value === null) return false;

    switch(type) {
        case "username":
            RegEx = /^[a-zA-Z0-9._-]{8,8}$/;
            break;
        case "password":
            RegEx = /^[A-Za-z0-9!@#$%^&*()_]{8,8}$/;
            break;
        case "conpass":
            if ($("#UserPassword").val() != $("#inputconfirmPassword").val() ) 
                return false;
            else
                return true;
            break;
        case "amount":
            if (value == 0) return false;
            RegEx = /^\d*[0-9](\.\d{1,2})?$/;
            break;
        case "phoneno":
            RegEx = /^\+(?:[0-9] ?){6,14}[0-9]$/;
            break;
        case "email":
            RegEx =/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            break;
        case "number":
            RegEx = /^\d*[0-9]$/;
            break;
        case "date":
            RegEx = /^\d{4}-([1-9]|0[1-9]|1[0,1,2])(-([1-9]|0[1-9]|[0,1,2][0-9]|3[0,1]))?$/;
            var today = new Date(); /* take today's date and make sure the time is ignored */
            today.setHours(0);
            today.setMinutes(0);
            today.setSeconds(0,0);
            var splitDate = value.split("-");  //Split the value and get day,month and year from it
            var year = splitDate[0];
            var month = splitDate[1];
            var day = splitDate.length == 3 ? splitDate[2] : 0;

            if (day > checkDaysInMonth(month,year)) return false;

            var testdate = new Date(year, (month -1) , day, 0, 0, 0).getTime();
            if (testdate < today.getTime() ) return false;
            break;
        case "string":
            RegEx = /^[a-zA-Z0-9 ]{6,25}$/; 
            break;
        case "creditcard":
            // based on http://en.wikipedia.org/wiki/Luhn
            // accept only spaces, digits and dashes
            if (/[^0-9 -]+/.test(value))
                return false;
                        
            if(value.length < 16)
                return false;

            var nCheck = 0,
            nDigit = 0,
            bEven = false;
            value = value.replace(/\D/g, "");

            for (var n = value.length - 1; n >= 0; n--) {
                var cDigit = value.charAt(n);
                var nDigit = parseInt(cDigit, 10);
                if (bEven) {
                    if ((nDigit *= 2) > 9) nDigit -= 9;
                }
                nCheck += nDigit;
                bEven = !bEven;
            }
            return (nCheck % 10) == 0;
            break;

        case "billname":
            if (value.length < 3) return false;
        case "length":
            if ((value != "" ) && (value.length < size))
                return false;
            else 
                return true;
        /* .. fall through ..*/
        case "specialchars" :
            RegEx = /^([^\s][a-zA-Z0-9_\s\-]*)$/;
            break;

        case "empty" :
            RegEx = /[^\s]/;
            break;

        case "text":
        default:
            RegEx = /^((\S+)(\s*))+$/;
            break;
    }
    if( !RegEx.test(value) )
        return false;
    else
        return true;
}

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

function showProgress() {
    toggleLoading();
}
function hideProgress() {
    toggleLoading();
//$('#password').removeAttr('disabled');
}

function toggleLoading(){
    if($loadingOpen){
        //hide loading screen		
        $('.pageLoadingOverlay').remove()
		
        $loadingOpen =  false;
    }
    else{
        //show loading screen
		
        var scrollPos = (window.pageYOffset > $('html').scrollTop())?(window.pageYOffset):($('html').scrollTop()),
        imgYPos = scrollPos + (($(window).height() / 2 ) -30 ) ,
        overlayObj = $('<div class="pageLoadingOverlay"></div>').height($(document).height())
        .css('background-position', 'center '+imgYPos+'px');		
        $('body').append(overlayObj);
		
        $loadingOpen =  true;
    }
}

$(function() {
	var input = document.createElement("input");
    if(('placeholder' in input)==false) { 
		$('[placeholder]').focus(function() {
			var i = $(this);
			if(i.val() == i.attr('placeholder')) {
				i.val('').removeClass('placeholder');
				if(i.hasClass('password')) {
					i.removeClass('password');
					this.type='password';
				}			
			}
		}).blur(function() {
			var i = $(this);	
			if(i.val() == '' || i.val() == i.attr('placeholder')) {
				if(this.type=='password') {
					i.addClass('password');
					this.type='text';
				}
				i.addClass('placeholder').val(i.attr('placeholder'));
			}
		}).blur().parents('form').submit(function() {
			$(this).find('[placeholder]').each(function() {
				var i = $(this);
				if(i.val() == i.attr('placeholder'))
					i.val('');
			})
		});
	}
});


function showMessage(message, divId, type){
    var msgDiv = $('#'+divId);
    msgDiv.html(message);
    switch(type){
        case 'error':msgDiv.addClass('alert-error');
                     break;
                 
        case 'info':msgDiv.removeClass('alert-error');
                    msgDiv.addClass('alert-info');
                    break;
        
        case 'success':msgDiv.removeClass('alert-error');
                       msgDiv.addClass('alert-success');
                       break;
    }
    msgDiv.show();   
}





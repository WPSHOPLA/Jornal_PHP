$('document').ready(function() 
{
	$.validator.addMethod('domain', function (value, element) {
			if (/[^-_.a-z0-9A-Z]/.test(value))
				return false;
		if (value == '')
				return true;
			var parts = value.split('.');
			if (parts == null)
				return false;
			if (parts.length < 2)
				return false;
			if (parts[parts.length-1].length < 2)
				return false;
		return true;
	}, 'Please enter a valid domain.');
	
	$.validator.addMethod('licenseID', function (value, element) {
			if (/[^-_.a-z0-9A-Z]/.test(value))
				return false;
	
		return true;
	}, 'Please enter a valid domain.');
	
	$.validator.addMethod('reminder', function (value, element) {
			if ((value)==0)
				return false;
	
		return true;
	}, 'Please enter a valid domain.');
	
	$("#password-reminder").validate({
		'focusInvalid': false,
		errorClass: 'error',
		'success': function(label) {
			$('#'+label.attr('for')).removeClass('lc-required-missing');
			//label.parent('div').parent('div').removeClass('error');
			//$('.error').removeClass('error');
			$('#form-msg').hide();
		},
		'errorPlacement': function(error, element) { 
			element.addClass('lc-required-missing');
		},
		'invalidHandler': function(form, validator) {
			var errors = validator.numberOfInvalids();
			//if (errors)	{ showError("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request."); }	
		},
		'submitHandler': function(form) {
		 formSubmit();
		 return false;
		}
	 });

	$('#password-reminder-submit').click(function(e){
		e.preventDefault();
		$('#password-reminder').submit();
	});
});




function formSubmit() {
	$.ajax({
		/*type: "POST",*/
		url: "https://my.licensecube.com/mvg/app.php",
		data: $("#password-reminder").serialize(),
		dataType: "jsonp",
		beforeSend: function(obj) {
			hideButtonSubmit();
		},
		success: function(json) {
			resultReminder(json);
		},
		error: function(objeto, iss, other) {
			showButtonSubmit();
			showError('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
		}

	});
	
}

function resultReminder(json)
{
	var inputError = String(json.inputError);
	inputError = inputError.split(',');		
	
	if (json.error==1)
	{	
		showButtonSubmit();
		showError(json.message);
	}	
		
	else if(json.error==0 )
	{
		hideForm();
		thankMessage(json.message);
	}		
	
	
}



function hideForm(){
	$('#password-reminder').hide();
}

function thankMessage(message){
	$('#thank-box').show();
	$('#thank-text').html(message);
	$('#thank-box-text').show();
	$('#error-box').hide();
}

function showError(message){
	$('#error-box').show();
	$('#error-text').html(message);
}



function hideButtonSubmit(){
	$('#password-reminder-submit').hide();
	$('#barber_pole').show();
}

function showButtonSubmit(){
	$('#password-reminder-submit').show();
	$('#barber_pole').hide();
}


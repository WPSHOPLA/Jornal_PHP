$(function() {
	$.validator.addMethod('licenseID', function (value, element) {
		if (/[^-_.a-z0-9A-Z]/.test(value)) return false;
		return true;
	}, 'Please enter a valid License ID.');
	
	$("#reissue-form").validate({
		'focusInvalid': false,
		errorClass: 'error',
		'success': function(label) {
			$('#'+label.attr('for')).removeClass('lc-required-missing');
			$('#form-msg').hide();
		},
		'errorPlacement': function(error, element) { 
			element.addClass('lc-required-missing');
		},
		'invalidHandler': function(form, validator) {
			var errors = validator.numberOfInvalids();
		},
		'submitHandler': function(form) {
			formReissueSubmit();
			return false;
		}
	 });

	$('#reissue-submit').click(function(e){
		e.preventDefault();
		$('#reissue-form').submit();
	});
});




function formReissueSubmit() {
	$.ajax({
		/*type: "POST",*/
		url: "https://my.licensecube.com/mvg/app.php",
		data: $("#reissue-form").serialize(),
		dataType: "jsonp",
		beforeSend: function(obj) {
			hideReissueButtonSubmit();
		},
		success: function(json) {
			resultReissuReminder(json);
		},
		error: function(objeto, iss, other) {
			showReissueError('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
		}

	});
	
}

function resultReissuReminder(json) {
	var inputError = String(json.inputError);
	inputError = inputError.split(',');		
	
	if (json.error==1) {
		var message = json.message;
		if(message == "Insufficient access") message = "We apologize; it appears that you’ve reached the re-issue limit. Please try again later, or contact our support department.";
		showReissueError(message);
	} else if(json.error==0 ) {
		hideForm();
		showReissueSuccess(json.message);
	}
}



function hideForm(){
	$('#reissue-form').hide();
}

function showReissueError(message){
	$('#error-new-text').html(message);
	$('#loading #load').hide();
	$('#loading #success').hide();
	$('#loading #error').show();
	$('#loading').show();
	
	setTimeout("showReissueButtonSubmit();", 4000);
}


function showReissueSuccess(message){
	$('#success-new-text').html(message);
	$('#loading #load').hide();
	$('#loading #error').hide();
	$('#loading #success').show();
	$('#loading').show();
}


function hideReissueButtonSubmit(){
	$('#reissue').hide();
	$('#loading #success').hide();
	$('#loading #error').hide();
	$('#loading #load').show();
	$('#loading').show();
}

function showReissueButtonSubmit(){
	$('#loading').hide();
	$('#reissue').show();
}


/*$.ajaxTransport("+*", function( options, originalOptions, jqXHR ) {
   
    if(jQuery.browser.msie && window.XDomainRequest) {
       
        var xdr;
       
        return {
           
            send: function( headers, completeCallback ) {

                // Use Microsoft XDR
                xdr = new XDomainRequest();
               
                xdr.open("get", options.url);
               
                xdr.onload = function() {
                   
                    if(this.contentType.match(/\/xml/)){
                       
                        var dom = new ActiveXObject("Microsoft.XMLDOM");
                        dom.async = false;
                        dom.loadXML(this.responseText);
                        completeCallback(200, "success", [dom]);
                       
                    }else{
                       
                        completeCallback(200, "success", [this.responseText]);
                       
                    }

                };
               
                xdr.ontimeout = function(){
                    completeCallback(408, "error", ["The request timed out."]);
                };
               
                xdr.onerror = function(){
                    completeCallback(404, "error", ["The requested resource could not be found."]);
                };
               
                xdr.send();
          },
          abort: function() {
              if(xdr)xdr.abort();
          }
        };
      }
    });

*/





// Installation Form - Billing System
$('document').ready(function() 
{
	$("#form-billing-system").validate({
		errorClass: 'lc-required-missing',
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				formError("installation");	
			}
			else
			{ 
				$('#form-login #message').html('ok');
				$('#form-login #message').css('display', 'none');
			}
			
		},
		
		submitHandler: function (form) 
		{	
			formSubmitBillingSystem(); 
			return false;
		}
				 
	 });
	
});


function formSubmitBillingSystem() 
{  		
		$.ajax({
		type: "POST",
		url: "https://my.licensecube.com/lc-api/installation_form_submit.php?jsoncallback=resultBillingSystem",
		data: $("#form-billing-system").serialize(),
		dataType: "jsonp",

		success: function(json)
		{ 
			resultBillingSystem(json);
		},
		error: function(objeto, iss, other)
		{ 
			$('#form-billing-system #button-submit').css('display', '');	
			$('#form-billing-system #loader').css('display', 'none');
			$('#form-login #message').css('display', '');
			$('#form-login #message').html('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#form-login #message').addClass('lc-box-error');
		},
		beforeSend: function(xhr){
		   xhr.withCredentials = true;
		   $('#form-billing-system #button-submit').css('display', 'none');	
		   $('#form-billing-system #loader').css('display', '');
		}

	});
	
}

function resultBillingSystem(json)
{
	
	
	if(json.status=='OK')
	{ 
		$('#tabc4 #message').css('display', 'none');
		$('#form-billing-system').css('display', 'none');
		$('#client-license').css('display', 'none');
		$('#thankyou-installation').css('display', '');
		$('#thankyou-installation-msg').html(json.message);
		$('#tabc4 .lc-form-note').css('display', 'none');
		$('#form-billing-system #loader').css('display', 'none');
		$('#tabc4 #title-license').css('display', 'none');
		$('#tabc4 #current-license').css('display', 'none');
		//$('#tabc4 #table-type-license-id').css('display', 'none');

	}
	else 
	{	
		$('#form-billing-system #button-submit').css('display', '');	
		$('#form-billing-system #loader').css('display', 'none');
		$('#tabc4 #message').css('display', '');
		$('#tabc4 #message').addClass('lc-box-error');
		$('#tabc4 #message').html(json.message);
	}
		
	
		
	if (json.status=='error-ratelimit')
	{	
		$('#form-billing-system #button-submit').css('display', '');	
		$('#form-billing-system #loader').css('display', 'none');
		$('#tabc4 #message').addClass('lc-box-error');
		$('#tabc4 #message').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
	}	
		
}


//--------------------------------------------------------------------------------------------------------------------------


//Installation Form - Control Panel
$('document').ready(function() 
{
	$("#form-control-panel").validate({
		errorClass: 'lc-required-missing',
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				formError("installation");	
			}
			else
			{ 
				$('#form-login #message').html('ok');
				$('#form-login #message').css('display', 'none');
			}
			
		},
		
		submitHandler: function (form) 
		{	
			formSubmitControlPanel(); 
			return false;
		}
				 
	 });
	
});

function formSubmitControlPanel() 
{  		
	$.ajax({
		type: "POST",
		url: "https://my.licensecube.com/lc-api/installation_form_submit.php?jsoncallback=resultControlPanel",
		data: $("#form-control-panel").serialize(),
		dataType: "jsonp",

		success: function(json)
		{ 
			resultControlPanel(json);
		},
		error: function(objeto, iss, other)
		{ 
			$('#form-control-panel #button-submit').css('display', '');	
			$('#form-control-panel #loader').css('display', 'none');
			$('#form-login #message').css('display', '');
			$('#form-login #message').html('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#form-login #message').addClass('lc-box-error');
		},
		beforeSend: function(xhr){
		   xhr.withCredentials = true;
		   $('#form-control-panel #button-submit').css('display', 'none');	
			$('#form-control-panel #loader').css('display', '');
		}

	});
	
}

function resultControlPanel(json)
{
	
	if(json.status=='OK')
	{ 
		$('#tabc4 #message').css('display', 'none');
		$('#form-control-panel').css('display', 'none');
		$('#client-license').css('display', 'none');
		$('#thankyou-installation').css('display', '');
		$('#thankyou-installation-msg').html(json.message);
		$('#tabc4 .lc-form-note').css('display', 'none');
		$('#form-control-panel #loader').css('display', 'none');
		$('#tabc4 #title-license').css('display', 'none');
		$('#tabc4 #current-license').css('display', 'none');
		//$('#tabc4 #table-type-license-id').css('display', 'none');

	}
	else 
	{	
		$('#form-control-panel #button-submit').css('display', '');	
		$('#form-control-panel #loader').css('display', 'none');
		$('#tabc4 #message').css('display', '');
		$('#tabc4 #message').addClass('lc-box-error');
		$('#tabc4 #message').html(json.message);
	}
		
	
		
	if (json.status=='error-ratelimit')
	{	
		$('#form-control-panel #button-submit').css('display', '');	
		$('#form-control-panel #loader').css('display', 'none');
		$('#tabc4 #message').addClass('lc-box-error');
		$('#tabc4 #message').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
	}	
		
}



//--------------------------------------------------------------------------------------------------------------------------



//Installation Form - Additional Software
$('document').ready(function() 
{
	$("#form-additional-software").validate({
		errorClass: 'lc-required-missing',
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				formError("installation");	
			}
			else
			{ 
				$('#form-login #message').html('ok');
				$('#form-login #message').css('display', 'none');
			}
			
		},
		
		submitHandler: function (form) 
		{	
			formSubmitAdditionalSoftware(); 
			return false;
		}
				 
	 });
	
});

function formSubmitAdditionalSoftware() 
{  		
	$.ajax({
		type: "POST",
		url: "https://my.licensecube.com/lc-api/installation_form_submit.php?jsoncallback=resultAdditionalSoftware",
		data: $("#form-additional-software").serialize(),
		dataType: "jsonp",

		success: function(json)
		{ 
			resultAdditionalSoftware(json);
		},
		error: function(objeto, iss, other)
		{ 
			$('#form-additional-software #button-submit').css('display', '');	
			$('#form-additional-software #loader').css('display', 'none');
			$('#form-login #message').css('display', '');
			$('#form-login #message').html('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#form-login #message').addClass('lc-box-error');
		},
		beforeSend: function(xhr){
		   xhr.withCredentials = true;
		   $('#form-additional-software #button-submit').css('display', 'none');	
			$('#form-additional-software #loader').css('display', '');
		}

	});
	
}

function resultAdditionalSoftware(json)
{
	
	
	$('#tabc4 #login-message').hide();

	if(json.status=='OK')
	{ 
		$('#tabc4 #message').css('display', 'none');
		$('#form-additional-software').css('display', 'none');
		$('#client-license').css('display', 'none');
		$('#thankyou-installation').css('display', 'none');
		$('#tabc4 #login-message').html(json.message);
		$('#tabc4 #login-message').show();
		//$('#thankyou-installation-msg').html(json.message);
		$('#tabc4 .lc-form-note').css('display', 'none');
		$('#form-additional-software #loader').css('display', 'none');
		$('#tabc4 #title-license').css('display', 'none');
		$('#tabc4 #current-license').css('display', 'none');
		//$('#tabc4 #table-type-license-id').css('display', 'none');

	}
	else 
	{	
		$('#form-additional-software #button-submit').css('display', '');	
		$('#form-additional-software #loader').css('display', 'none');
		$('#tabc4 #message').css('display', '');
		$('#tabc4 #message').addClass('lc-box-error');
		$('#tabc4 #message').html(json.message);
	}
		
	
		
	if (json.status=='error-ratelimit')
	{	
		$('#form-additional-software #button-submit').css('display', '');	
		$('#form-additional-software #loader').css('display', 'none');
		$('#tabc4 #message').addClass('lc-box-error');
		$('#tabc4 #message').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
	}	

	
}





//--------------------------------------------------------------------------------------------------------------------------



//Contact Form
$('document').ready(function() 
{
	$("#forms").validate({
		errorClass: 'lc-required-missing',
		
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				formError("contact");	
			}
			else
			{
				$('#message').html('ok');
				$('#message').css('display', 'none');
			}
		},
		
		submitHandler: function (form) 
		{	
			formSubmit(); 
			return false;
		}
				 
	 });
	
});

function formSubmit() 
{  		
	$.ajax({
		type: "POST",
		url: "http://www.licensecube.com/_include/ajax/FormMail.php",
		data: $("#forms").serialize(),
		dataType: "json",
		beforeSend: function(obj)
		{
			$('#button-submit').css('display', 'none');	
			$('#loader').css('display', '');
		},
		success: function(json)
		{
			result(json);
		},
		error: function(objeto, iss, other)
		{
			$('#button-submit').css('display', '');	
			$('#loader').css('display', 'none');
			$('#message').html('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#message').addClass('lc-box-error');
		}

	});
	
}

function result(json)
{
	var inputError = String(json.inputError);
	inputError = inputError.split(',');		

	if (json.status=='error-ratelimit')
	{	
		$('#button-submit').css('display', '');	
		$('#loader').css('display', 'none');
		$('#message').addClass('lc-box-error');
		$('#message').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
	}
	else if (json.status=='error')
	{	
		$('#button-submit').css('display', '');	
		$('#loader').css('display', 'none');
		$('#message').addClass('lc-box-error');
		$('#message').html("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request.");
	}
		
	else if(json.status=='ok' )
	{
		$('#message').css('display', 'none');
		$('#form-contact').css('display', 'none');
		$('#thankyou').css('display', '');
		$('.lc-form-note').css('display', 'none');
	}
		
	for(z=0;z<inputError.length;z++)
	{
		$('#'+inputError[z]).addClass('lc-required-missing');
				
	}
	
}


//--------------------------------------------------------------------------------------------------------------------------


//Change License
$(document).ready(function() 
{

	$("#change-license").validate({
		errorClass: 'lc-required-missing',
		
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{ 
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				$('#message').css('display', '');	
				formError("change");				
			}
			else
			{
				$('#message').html('ok');
				$('#message').css('display', 'none');
			}
		},
		
		submitHandler: function (form) 
		{	
			formSubmitChange(); 
			return false;
		}
				 
	 });
	
});

function formSubmitChange() 
{  		
	function haveDuplicateIPs() {
		var current = $('#current-ip').val();
		if (current == null)
			return false;
		if (current == '')
			return false;
		return ($('#new-ip').val() == current) ? true : false;

	}

	if (haveDuplicateIPs()) {
		$('#tabc2 #button-submit').css('display', '');
		$('#tabc2 #loader').css('display', 'none');
		$('#new-ip').addClass('lc-required-missing');
		$('#login-message').hide();
		$('#tabc2 #message').html('We apologize; it appears that you have accidentally input the same IP address for the as is currently listed on the license. Unfortunately, we are unable to process your update request until this issue is resolved. If you continue to have this error, please contact us on (855) 465-4236 for assistance.');
		$('#tabc2 #message').addClass('lc-box-error');
		$('#tabc2 #message').show();
		return;
	}

	$.ajax({
		type: "POST",
		url: "https://my.licensecube.com/lc-api/license_update.php?jsoncallback=resultChangeLicense",
		data: $("#change-license").serialize(),
		dataType: "jsonp",
		
		success: function(json)
		{
			resultChangeLicense(json);
		},
		error: function(objeto, iss, other)
		{ 
			$('#tabc2 #button-submit').css('display', '');	
			$('#tabc2 #loader').css('display', 'none');
			$('#tabc2 #message').html('We apologize, the license could not be updated at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#tabc2 #message').addClass('lc-box-error');
		},
		beforeSend: function(xhr){
		   xhr.withCredentials = true;
		   $('#tabc2 #button-submit').css('display', 'none');	
			$('#tabc2 #loader').css('display', '');
		}

	});
	
}

function resultChangeLicense(json)
{
	
	$('#tabc2 #login-message').hide();
	if(json.status=='OK' )
	{
		$('#tabc2 #message').css('display', 'none');
		$('#tabc2 #form-contact').css('display', '');
		$('#tabc2 #login-message').css('display' ,'');
		$('#tabc2 #login-message').html(json.message);
		$('#tabc2 #thankyou-change').css('display', 'none');
		$('#tabc2 #thankyou-change-msg').html(json.message);
		$('#tabc2 .lc-form-note').css('display', 'none');
		$('#tabc2 #client-license-change').css('display', 'none');
		$('#tabc2 #loader').css('display', 'none');
		$('#tabc2 #button-submit').css('display', '');
		$('#tr-current-ip').css('display', 'none');
		$('#tr-new-ip').css('display', 'none');
		$('#tr-current-domain').css('display', 'none');
		$('#tr-new-domain').css('display', 'none');
		$('#tr-license-id').css('display', 'none');
		
		$('#table-slaves').hide();
		
		$('#new-ip').val('');
		$('#new-domain').val('');
		$('#update-loading-licenses').css('display','');
		$.ajax({
			type: "POST",
			url: "https://my.licensecube.com/lc-api/license_info.php",
			data: { email: $('#email').val(), password: $('#password').val() },
			dataType: "jsonp",
			success: function(json) {
				resultLoginLicense1(json);
			},
		});
	}
	else
	{	
		$('#tabc2 #button-submit').css('display', '');	
		$('#tabc2 #loader').css('display', 'none');
		$('#tabc2 #message').addClass('lc-box-error');
		$('#tabc2 #message').html(json.message);
		$('#tabc2 #message').css('display', '');
	}
		
	
	if (json.status=='error-ratelimit')
	{	
		$('#tabc2 #button-submit').css('display', '');	
		$('#tabc2 #loader').css('display', 'none');
		$('#tabc2 #message').addClass('lc-box-error');
		$('#tabc2 #message').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
		$('#tabc2 #message').css('display', '');
	}

	
}



//--------------------------------------------------------------------------------------------------------------------------




//Cancel License
$('document').ready(function() 
{
	$("#cancel-license").validate({
		errorClass: 'lc-required-missing',
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
    		$('#tabc3 #login-message').css('display', 'none');
				formError("cancel");	
			}
			else
			{ 
				$('#form-contact-cancel-license #message').html('ok');
				$('#form-contact-cancel-license #message').css('display', 'none');
			}
			
		},
		
		submitHandler: function (form) 
		{	
			formSubmitCancel(); 
			return false;
		}
				 
	 });
	
});

function formSubmitCancel() 
{  		
	$.ajax({
		type: "POST",
		url: "https://my.licensecube.com/lc-api/license_update.php?jsoncallback=resultCencelLicense",
		data: $("#cancel-license").serialize(),
		dataType: "jsonp",
		beforeSend: function(obj)
		{
			$('#form-contact-cancel-license #button-submit').css('display', 'none');	
			$('#form-contact-cancel-license #loader').css('display', '');
		},
		success: function(json)
		{
			resultCencelLicense(json);
		},
		error: function(objeto, iss, other)
		{
			$('#tabc3 #login-message').css('display', 'none');
			$('#form-contact-cancel-license #button-submit').css('display', '');	
			$('#form-contact-cancel-license #loader').css('display', 'none');
			$('#form-contact-cancel-license #message').html('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#form-contact-cancel-license #message').addClass('lc-box-error');
			$('#form-contact-cancel-license #message').css('display', 'none');
		}

	});
	
}

function resultCencelLicense(json)
{
	
	var sorry_for_you_to_leave = "It appears that you’ve canceled your final license with us; as one of our valuable customers, we’re sorry to have to see you leave.<br/><br/>" +
		"At LicenseCube, we value each and every customer and take great pride in our long standing customer relationships. We understand every customer has specific needs that need to be met. If there are services and products you’d like to see us offer, please let us know!  Feedback is essential to our business and we’d love to hear from you, whether you have a suggestion, concern, question or anything else you’d like to bring to our attention.  Please feel free to contact us at any time by phone at (855) 465-4236, or live chat.<br/><br/>" +
		"Once again, we’re sorry to see you leave.<br/><br/>The LicenseCube Team.";

	if(json.status=='OK')
	{
		$('#form-contact-cancel-license #message').css('display', 'none');
		$('#form-contact-cancel-license #cancel-license').css('display', '');
		$('#thankyou-cancel').css('display', 'none');
		$('#tabc3 .lc-form-note').css('display', 'none');
		$('#thankyou-cancel-msg').css('display', 'none');

		$('#tabc3 #login-message').html(json.message);
		$('#tabc3 #login-message').css('display', '');

		$('#tabc3 #tr-current-ip').css('display', 'none');
		$('#tabc3 #tr-current-domain').css('display', 'none');
		$('#tabc3 #new-ip').val('');
		$('#tabc3 #new-domain').val('');

		if ($('#license-type option[id]').length == 1) { // this was his last license
			setTimeout(function() { $('#tabc3 #login-message').css('display', 'none'); }, 15000);
			var first = $('#license-type option[id]').attr('first');
			$('#form-contact-cancel-license #cancel-license').html(first + ',</br></br>' + sorry_for_you_to_leave);
		} else { // he has other licenses pending for cancellation
			$('#form-contact-cancel-license #loader').css('display', 'none');
			$('#form-contact-cancel-license #button-submit').css('display', '');
			$('#cancel-loading-licenses').css('display','');
			$.ajax({
				type: "POST",
				url: "https://my.licensecube.com/lc-api/license_info.php",
				data: { email: $('#tabc3 #email').val(), password: $('#tabc3 #password').val() },
				dataType: "jsonp",
				success: function(json) { 
					resultLoginLicense2(json);
				},
			});
		}
	}
	else 
	{	
		$('#tabc3 #login-message').css('display', 'none');
		$('#form-contact-cancel-license #button-submit').css('display', '');	
		$('#form-contact-cancel-license #loader').css('display', 'none');
		$('#form-contact-cancel-license #message').css('display', '');
		$('#form-contact-cancel-license #message').addClass('lc-box-error');
		$('#form-contact-cancel-license #message').html(json.message);
	}
		
	
		
	if (json.status=='error-ratelimit')
	{	
		$('#tabc3 #login-message').css('display', 'none');
		$('#form-contact-cancel-license #button-submit').css('display', '');	
		$('#form-contact-cancel-license #loader').css('display', 'none');
		$('#form-contact-cancel-license #message').addClass('lc-box-error');
		$('#form-contact-cancel-license #message').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
		
	}	
		
//	if (inputError != null)
//		for(z = 0; z < inputError.length ; z++)
//		{
//			$('#form-contact-cancel-license #'+inputError[z]).addClass('lc-required-missing');
//					
//		}
	
}








//--------------------------------------------------------------------------------------------------------------------------





//Ticket License
$('document').ready(function() 
{
	$("#form-ticket").validate({
		errorClass: 'lc-required-missing',
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				formError("cancel");	
			}
			else
			{ 
				$('#tabc2 #message').html('ok');
				$('#tabc2 #message').css('display', 'none');
			}
			
		},
		
		submitHandler: function (form) 
		{	
			formSubmitTicket(); 
			return false;
		}
				 
	 });
	
});

function formSubmitTicket() 
{  		
	$.ajax({
		type: "POST",
		url: "http://www.licensecube.com/_include/ajax/FormMail.php",
		data: $("#form-ticket").serialize(),
		dataType: "json",
		beforeSend: function(obj)
		{
			$('#form-ticket #button-ticket').css('display', 'none');	
			$('#form-ticket #loader').css('display', '');
		},
		success: function(json)
		{
			resultTicket(json);
		},
		error: function(objeto, iss, other)
		{ 
			$('#form-ticket #button-ticket').css('display', '');	
			$('#form-ticket #loader').css('display', 'none');
			$('#tabc2 #message').html('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#tabc2 #message').addClass('lc-box-error');
		}

	});
	
}

function resultTicket(json)
{

	if(json.status=='ok')
	{
		
		$('#tabc2 #message').css('display', 'none');
		$('#tabc2 #form-ticket').css('display', 'none');
		$('#tabc2 .lc-form-note').css('display', 'none');
		
		$('#tabc2 #change-license').css('display', 'none')
		$('#tabc2 #form-ticket').css('display', 'none')
		$('#tabc2 #thankyou-ticket').fadeIn();
		$('#tabc2 #thankyou-ticket-name').html($('#form-ticket #name-ticket').val());
		
	}
	else 
	{	
		$('#tabc2 #button-ticket').css('display', '');	
		$('#tabc2 #loader').css('display', 'none');
		$('#tabc2 #message').addClass('lc-box-error');
		$('#tabc2 #message').html(json.message);
	}
		
	
		
	if (json.status=='error-ratelimit')
	{	
		$('#form-contact-cancel-license #button-submit').css('display', '');	
		$('#form-contact-cancel-license #loader').css('display', 'none');
		$('#form-contact-cancel-license #message').addClass('lc-box-error');
		$('#form-contact-cancel-license #message').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
		
	}	
		

	
}






//--------------------------------------------------------------------------------------------------------------------------




//Login installation form
$('document').ready(function() 
{
	$("#login").validate({
		errorClass: 'lc-required-missing',
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				formError("login3");
			}
			else
			{ 
				$('#login #message-login').html('ok');
				$('#login #message-login').css('display', 'none');
			}
			
		},
		
		submitHandler: function (form) 
		{	
			formSubmitLogin(); 
			return false;
		}
				 
	 });
	
});

function formSubmitLogin() 
{  		
	$.ajax({
		type: "POST",
		url: "https://my.licensecube.com/lc-api/license_info.php?jsoncallback=resultLoginLicense",
		data: $("#login").serialize(),
		dataType: "jsonp",
		beforeSend: function(obj)
		{
			$('#login #button-submit').css('display', 'none');	
			$('#login #loader').css('display', '');
		},
		success: function(json)
		{ 
			resultLoginLicense(json);
		},
		error: function(objeto, iss, other)
		{
			$('#login #button-submit').css('display', '');	
			$('#login #loader').css('display', 'none');
			$('#login #message-login').html('We apologize, your license information retrieved at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#login #message-login').addClass('lc-box-error');
		}

	});
	
}

function resultLoginLicense(json)
{
	
	if(json.status=='OK')
	{
		if($('#login-form').val() == 'installation')
		{ 
			$('#login #message-login').css('display', 'none');
			$('#login').fadeOut();
			
			var typeForm = $('#type-form').val()
			
			$('#'+typeForm).fadeIn();
			
			$('#tabc4 .lc-form-note').css('display', 'none');
			$('#tabc4 #login-message').fadeIn();
			$('#tabc4 #name-login').html(json.first);
			//setTimeout("$('#tabc4 #login-message').fadeOut();", 3000);
			
			
			$('#form-billing-system #lc_sess_id').val(json.lc_sess_id);	
			$('#form-control-panel #lc_sess_id').val(json.lc_sess_id);	
			$('#form-additional-software #lc_sess_id').val(json.lc_sess_id);
		
			$('#tabc2 #lc-form-note').fadeOut();
			//$('#tabc2 #login-message').fadeIn();
			
		
			/*for(i=0;i<json.packv.length;i++)
			{
				
				if(json.packv[i].lc_requires_ip==1)
				{
					ipDomain = json.packv[i].ip_address
					licenseType = 1;
				}
				if(json.packv[i].lc_requires_domain==1)
				{
					ipDomain = json.packv[i].servername
					licenseType = 2;
				}
				if(json.packv[i].lc_requires_domain == 1 && json.packv[i].lc_requires_ip == 1)
					ipDomain = json.packv[i].ip_address + ", " + json.packv[i].servername;
				
				$("#tabc4 #lista").append('<li onclick="showForm(\''+ json.packv[i].lc_product_type +'\', \''+ json.packv[i].id +'\', \''+ json.packv[i].title +'\', \''+ licenseType +'\', \''+ ipDomain +'\');"><a>' + json.packv[i].title+" ("+ ipDomain + ')</a></li>');											
			}*/
						
			var ipDomain
			var ipDomainSend			
			var selectHTML;
			option='';	
			
			var product_type_ant = '';
			
			var packv =json.packv;
			var packv = packv.sort(ordenar); 
			json.packv = packv;
			var SelectHTML = '<select class="lc-input required"  name="license-type" id="license-type" onchange="selectInstallation();" ><option selected="selected" disabled="disabled" value=""> Please Select...</option>';		
					
			for(i=0;i<json.packv.length;i++)
			{ 
				if (json.packv[i].active !=3)
				{
					ipDomain = '(';
				
					if(json.packv[i].lc_requires_ip==1)
					{
						ipDomain += json.packv[i].ip_address;
						ipDomainSend = json.packv[i].ip_address;
						licenseType = 1;
					}
					if(json.packv[i].lc_requires_domain==1)
					{
						ipDomain += json.packv[i].servername;
						ipDomainSend = json.packv[i].servername;
						licenseType = 2;
					}
					if(json.packv[i].lc_requires_domain == 1 && json.packv[i].lc_requires_ip == 1)
						ipDomain += json.packv[i].ip_address + ", " + json.packv[i].servername;
						ipDomainSend = json.packv[i].ip_address + ", " + json.packv[i].servername;
				
					ipDomain += ')';
					
					if((json.packv[i].lc_requires_domain == 0 && json.packv[i].lc_requires_ip == 0) || (json.packv[i].ip_address == '' && json.packv[i].servername == ''))
					{
						ipDomain = '';
						ipDomainSend = '';
					}
					
					if (json.packv[i].lc_product_type == product_type_ant)
					{
						
						product_type_ant = json.packv[i].lc_product_type;
					}
					else
					{	var pro = json.packv[i].lc_product_type;
						pro = pro.replace('_', ' ');
						pro = pro.capitalize();
						//SelectHTML += "<optgroup label='"+ucWords(pro.replace('_', ' '))+"'>";	
		
						SelectHTML	+= "<optgroup label='"+ (pro) + "'>";			
						product_type_ant = json.packv[i].lc_product_type; 
					}
					
					option='<option type="' + json.packv[i].lc_product_type +'"  id="' + json.packv[i].id +'" title="' + json.packv[i].title +'" licenseType="' + licenseType +'" ipDomain="' + ipDomainSend +'" title="' + json.packv[i].title +'" servername="' + json.packv[i].servername +'" ip_address="' + json.packv[i].ip_address +'">' + json.packv[i].title+' '+ ipDomain + '</option>';
					 SelectHTML+=option;			
																
					if (json.packv.length != i+1)
					 {
						 if (json.packv[i+1].lc_product_type != product_type_ant)
						 {
							 SelectHTML += "</optgroup>";
							 
							 //$("#tabc2 #license-type").append(option);	
						 }	
					}
				}
			}
			SelectHTML+='</select>';
			
			$('#tabc4 #type-of-license').html(SelectHTML);
			
			$('#table-type-license-id').fadeIn();	
					
			
			$('#form-additional-software #tr-type-license-id').css('display', '');
			$('#form-additional-software #tr-type-license-id').fadeIn();
			
			$('#form-billing-system #tr-type-license-id').css('display', '');
			$('#form-billing-system #tr-type-license-id').fadeIn();	
			
			
		
		}
	}
	else 
	{	
		$('#tabc4 .lc-form-note').hide();
		$('#login #button-submit').css('display', '');	
		$('#login #loader').css('display', 'none');
		$('#login #message-login').css('display', '');
		$('#login #message-login').addClass('lc-box-error');
		$('#login #message-login').html(json.message);
	}
		
	
		
	if (json.status=='error-ratelimit')
	{	
		$('#tabc4 .lc-form-note').hide();
		$('#form-login #button-submit').css('display', '');	
		$('#form-login #loader').css('display', 'none');
		$('#form-login #message-login').addClass('lc-box-error');
		$('#form-login #message-login').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
	}	
	
	
}

function selectInstallation()
{ 
		type = $("#table-type-license-id #license-type option:selected").attr('type')
		id = $("#table-type-license-id #license-type option:selected").attr('id')
		title = $("#table-type-license-id #license-type option:selected").attr('title')
		licenseType = $("#table-type-license-id #license-type option:selected").attr('licenseType')
		ipDomain = $("#table-type-license-id #license-type option:selected").attr('ipDomain')
		ip_address = $("#table-type-license-id #license-type option:selected").attr('ip_address')
		servername = $("#table-type-license-id #license-type option:selected").attr('servername')
		showForm(type, id, title, licenseType, ipDomain, ip_address, servername)

}

function showForm(type, id, title, licenseType, ipDomain, ip_address, servername)
{ 
	
	$("#tabc4 #lc-box").slideUp("normal");
	$('#tabc4 #title-license').css('display', '');	
	$('#tabc4 #title-license').html(title);
	
	$('#tabc4 #title-license').css('display', '');	
	$('#tabc4 #title-license').html(title);
	$('#tabc4 #current-license').css('display', '');
	
	
	if (licenseType==1)
		$('#tabc4 #current-license').html('<b>Current IP: </b>'+ipDomain);
	else
		$('#tabc4 #current-license').html('<b>Current Domain: </b>'+ipDomain);

	
	if(type == 'billing_system')
	{
		$('#form-control-panel').css('display', 'none');
		$('#form-additional-software').css('display', 'none');
		$('#form-billing-system').fadeIn();	
		$('#form-billing-system #pack_id').val(id);	
		$("#form-billing-system #ftp_domain").attr("value", servername); 
	}
	else if(type == 'control_panel')
	{
		$('#form-billing-system').css('display', 'none');	
		$('#form-additional-software').css('display', 'none');
		$('#form-control-panel').fadeIn();	
		$('#form-control-panel').fadeIn();	
		$('#form-control-panel #pack_id').val(id);	
		$("#form-control-panel #server_ip_address").attr("value", ip_address); 
	}
	else
	{
		$('#form-control-panel').css('display', 'none');
		$('#form-billing-system').css('display', 'none');	
		$('#form-additional-software').fadeIn();
		$('#form-additional-software').fadeIn();
		$('#form-additional-software #pack_id').val(id);
		if (ip_address != '')
		{	
			$("#form-additional-software #server_ip_address").attr("value", ip_address); 
			$('#form-additional-software #server_ip_address').attr('disabled', 'disabled');
		}
		if (servername != '')
		{
			$("#form-additional-software #ftp_domain").attr("value", servername); 
			$('#form-additional-software #ftp_domain').attr('disabled', 'disabled');
		}
	}
		
	$('#form-billing-system #button-submit').css('display', '');	
	$('#form-billing-system #loader').css('display', 'none');
	$('#form-additional-software #button-submit').css('display', '');	
	$('#form-additional-software #loader').css('display', 'none');
	$('#form-control-panel #button-submit').css('display', '');	
	$('#form-control-panel #loader').css('display', 'none');
	
}




//--------------------------------------------------------------------------------------------------------------------------



//Login change form
$('document').ready(function() 
{
	$("#login1").validate({
		errorClass: 'lc-required-missing',
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				formError("login1");				
			}
			else
			{ 
				$('#login1 #message-login').html('ok');
				$('#login1 #message-login').css('display', 'none');
			}
			
		},
		
		submitHandler: function (form) 
		{	
			formSubmitLogin1(); 
			return false;
		}
				 
	 });
	
});

function formSubmitLogin1() 
{  		

	jQuery.support.cors = true;

	$.ajax({
		type: "POST",
		url: "https://my.licensecube.com/lc-api/license_info.php?jsoncallback=resultLoginLicense1",
		data: $("#login1").serialize(),
		dataType: "jsonp",
		crossDomain: true,
		
		beforeSend: function(obj)
		{ 
			$('#login1 #button-submit').css('display', 'none');	
			$('#login1 #loader').css('display', '');
			
		},
		success: function(json)
		{ 
			resultLoginLicense1(json);
			jQuery.support.cors = false;  
		},
		error: function(objeto, iss, other)
		{ 
			$('#login1 #button-submit').css('display', '');	
			$('#login1 #loader').css('display', 'none');
			$('#login1 #message-login').html('We apologize, the license could not be updated at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#login1 #message-login').addClass('lc-box-error');
		}

	});
	
}

function resultLoginLicense1(json)
{
	
	$('#tabc2 .lc-form-note').css('display', 'none');
	$('#update-loading-licenses').css('display','none');
	
	if(json.status=='OK')
	{
		if($('#login-form').val() == 'installation')
		{ 
			$('#login1 #message-login').css('display', 'none');
			$('#login1').fadeOut();
			
			$('#tabc2').fadeIn();
			$('#tabc2 #lc-form-note').css('display', 'none');
			$('#tabc2 #login-message').fadeIn();
			$('#tabc2 #name-login').html(json.first);
			
			//setTimeout("$('#tabc2 #login-message').fadeOut();", 3000);	
			
			
			$('#client-license-change').fadeIn();
			
			$('#change-license').fadeIn();
			$('#change-license #lc_sess_id').val(json.lc_sess_id);	
			$('#form-ticket #lc_sess_id').val(json.lc_sess_id);	

			var ipDomain;
			var ipDomainSend;			
			var selectHTML;
			var product_type_ant = '';
			
			var packv =json.packv;
			var packv = packv.sort(ordenar);  
			json.packv = packv;
		
			
			option='';
			
			//Una sola licencia y suspendida
			
			if (json.packv.length==1 && json.packv[0].active == 3)
			{
				$('#tabc2 .form-ticket').css('display', '');
				$("#tabc2 #name-ticket").attr("value", json.first+" " + json.last);
				$('#form-ticket #pack_id').val(json.packv[0].id);
				$('#tabc2 #button-ticket').css('display', '');
				
			}
			else
			{
				var some_failed = false;
				var SelectHTML = '<select class="lc-input required"  name="license-type" id="license-type" onchange="selectChange();" ><option selected="selected" disabled="disabled" value=""> Please Select...</option>';		
				for(i=0;i<json.packv.length;i++)
				{
					var disabled = json.packv[i].disabled;
					ipDomain = '(';
					if(json.packv[i].lc_requires_ip==1) {
						if (json.packv[i].title.toLowerCase().indexOf('InterWorx')!=-1 && json.packv[i].ip_address == ""){ // PLAN_ID DE INTERWORX
							ipDomain += "No IP address assigned";
							ipDomainSend = "No IP address assigned";
							disabled = 1;
						}else{
							ipDomain += json.packv[i].ip_address;
							ipDomainSend = json.packv[i].ip_address;
						}
						
					}
					if(json.packv[i].lc_requires_domain==1)
					{
						ipDomain += json.packv[i].servername
						ipDomainSend = json.packv[i].servername
					}
					if(json.packv[i].lc_requires_domain == 1 && json.packv[i].lc_requires_ip == 1)
					{
						ipDomain += json.packv[i].ip_address + ", " + json.packv[i].servername; 
						ipDomainSend = json.packv[i].ip_address + ", " + json.packv[i].servername;
					}
				
					ipDomain += ')';
					
					if((json.packv[i].lc_requires_domain == 0 && json.packv[i].lc_requires_ip == 0) || (json.packv[i].ip_address == '' && json.packv[i].servername == '')){
						ipDomain = '';
						ipDomainSend = '';
					}

					if (json.packv[i].lc_product_type == product_type_ant) {
						product_type_ant = json.packv[i].lc_product_type;
					} else {
						var pro = json.packv[i].lc_product_type;
						pro = pro.replace('_', ' ');
						pro = pro.capitalize();
		
						SelectHTML	+= "<optgroup label='"+ (pro) + "'>";			
						product_type_ant = json.packv[i].lc_product_type; 
					}
				
					option='<option requires_ip="' + json.packv[i].lc_requires_ip +'"  requires_licenseip="' + json.packv[i].lc_requires_license_id +'" requires_domain="' + json.packv[i].lc_requires_domain +'" id="' + json.packv[i].id +'" current="' + ipDomainSend +'" title="' + json.packv[i].title +'" license_id="' + json.packv[i].lc_license_id +'" active="' + json.packv[i].active +'" first="' + json.first  +'" last="' + json.packvlast+'" slaves="' + json.packv[i].slaves +'" microslaves="'+ json.packv[i].microslaves +'" minislaves="'+json.packv[i].minislaves+'" code="'+json.packv[i].code+'"';
					if (disabled==1) option+=' disabled="disabled"';
					option+='>' + json.packv[i].title+' '+ ipDomain + '</option>';
					// $("#tabc2 #license-type").append(option);
					 SelectHTML+=option;
					 
					if (json.packv.length != i+1) {
						if (json.packv[i+1].lc_product_type != product_type_ant) {
							SelectHTML += "</optgroup>";
						}	
					}
					
					if (json.packv[i].disabled == 1) some_failed = true;
					
				}
				SelectHTML+='</select>';
				
				$('#type-of-license').html(SelectHTML);
				
				$('#change-license').fadeIn();	
				$('#tr-type-license-id').fadeIn();
				
				if (some_failed) {
					$('#tabc2 #message').addClass('lc-box-error');
					$('#tabc2 #message').html("Some of the licenses could not be retrieved from the provider at this moment.  If you need to update one of them, please try again later.");
				}
			}
		}
	}
	else 
	{	
		$('#login1 #button-submit').css('display', '');	
		$('#login1 #loader').css('display', 'none');
		$('#login1 #message-login').css('display', '');
		$('#login1 #message-login').addClass('lc-box-error');
		$('#login1 #message-login').html(json.message);
	}
		
	
		
	if (json.status=='error-ratelimit')
	{	
		$('#login1 #button-submit').css('display', '');	
		$('#login1 #loader').css('display', 'none');
		$('#login1 #message-login').addClass('lc-box-error');
		$('#login1 #message-login').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
	}	
	
	
}
function selectChange()
{
		
		requires_ip = $("#tabc2 #license-type option:selected").attr('requires_ip');
		requires_licenseip = $("#tabc2 #license-type option:selected").attr('requires_licenseip');
		requires_domain = $("#tabc2 #license-type option:selected").attr('requires_domain');
		id = $("#tabc2 #license-type option:selected").attr('id');
		current = $("#tabc2 #license-type option:selected").attr('current');
		title = $("#tabc2 #license-type option:selected").attr('title');
		license_id = $("#tabc2 #license-type option:selected").attr('license_id');
		active = $("#tabc2 #license-type option:selected").attr('active');
		first = $("#tabc2 #license-type option:selected").attr('first');
		last = $("#tabc2 #license-type option:selected").attr('last');
		slaves = $("#license-type option:selected").attr('slaves');
		microslaves = $("#license-type option:selected").attr('microslaves');
		minislaves = $("#license-type option:selected").attr('minislaves');
		code = $("#license-type option:selected").attr('code');
		
		if (active==3)
		{
			$('#tabc2 #button-submit').css('display', 'none');
			$('#tabc2 #button-ticket').css('display', '');
			$('#tabc2 #form-ticket').css('display', '');
			$('#form-ticket #name-ticket').val(first+" " + last);
			$('#tabc2 #form-ticket').css('display', '');
			$('#form-ticket #pack_id').val(id);
			showFormChange(0, 0, 0, id, current, title, license_id);
			

		}
		else
		{
			$('#tabc2 #button-submit').show();
			$('#tabc2 #form-ticket').css('display', 'none');
			$('#tabc2 #change-license').css('display', '');
			showFormChange(requires_ip, requires_licenseip, requires_domain, id, current, title, license_id, slaves, microslaves, minislaves, code);
		}
}

function showFormChange(requires_ip, requires_licenseip, requires_domain, id, current, title, license_id, slaves, microslaves, minislaves, code){
	
	
	
	$('#client-license-change #lc-box').slideUp();
	//$('#change-license').fadeIn();	
	$('#change-license #pack_id').val(id);
	$('#tabc2 #title-license').css('display', '');	
	$('#tabc2 #title-license').html(title);
	$('#tabc2 #current-license').css('display', '');
	
	
	if (requires_licenseip == 0)
	{
		$("#tabc2 #tr-license-id").css('display', 'none');	
		$("#tabc2 #license-id").removeClass("required");
		$("#tabc2 #license-id").removeClass("licenseID");
		$('#tabc2 #license-id').val("");
		
			
	}
	else
	{
		$("#tabc2 #tr-license-id").css('display', '');	
		$("#tabc2 #license-id").addClass("required");
		
		$("#tabc2 #license-id").attr("value", license_id);
	}
	if (requires_ip == 0)
	{
		$("#tabc2 #tr-new-ip").css('display', 'none'); 
		$("#tabc2 #tr-current-ip").css('display', 'none'); 		
		$("#tabc2 #new-ip").removeClass("required");		
		$("#tabc2 #new-ip").removeClass("lc-required-missing");		
		$("#tabc2 #new-ip").removeClass("ip-address");
		$('#tabc2 #new-ip').val("");	
		
		$("#tabc2 #current-ip").removeClass("required");		
		$("#tabc2 #current-ip").removeClass("lc-required-missing");		
		$("#tabc2 #current-ip").removeClass("ip-address");
		$('#tabc2 #current-ip').val("");	
		
	}
	else
	{
		$("#tabc2 #tr-new-ip").css('display', '');
		$("#tabc2 #tr-current-ip").css('display', '');
		$("#tabc2 #new-ip").addClass("required");
		
		$("#tabc2 #current-ip").addClass("required");
		$("#tabc2 #current-ip").attr("value", current); 
					
	}
	
	if (requires_domain == 0)
	{
		$("#tabc2 #tr-new-domain").css('display', 'none');	
		$("#tabc2 #tr-current-domain").css('display', 'none');
		$("#tabc2 #new-domain").removeClass("required");
		$("#tabc2 #new-domain").removeClass("domain");	
		$('#tabc2 #new-domain').val("");
		
		$("#tabc2 #current-domain").removeClass("required");
		$("#tabc2 #current-domain").removeClass("domain");	
		$('#tabc2 #current-domain').val("");
	}
	else
	{
		$("#tabc2 #tr-new-domain").css('display', '');
		$("#tabc2 #tr-current-domain").css('display', '');
		$("#tabc2 #new-domain").addClass("required");
		
		$("#tabc2 #current-domain").addClass("required");
		$("#tabc2 #current-domain").attr("value", current);
	}
	
	if (code == "LIN46"){//SOLUSVM DEDICATED
		$("#table-slaves").show();
		
		$("#new-slaves").addClass("required");
		$("#current-slaves").addClass("required");
		$("#current-slaves").val(slaves);
		$("#new-slaves").val(slaves);
		
		$("#new-microslaves").addClass("required");
		$("#current-microslaves").addClass("required");
		$("#current-microslaves").val(microslaves);
		$("#new-microslaves").val(microslaves);
		
		$("#new-minislaves").addClass("required");
		$("#current-minisalves").addClass("required");
		$("#current-minislaves").val(minislaves); 
		$("#new-minislaves").val(minislaves);
	}
}



//--------------------------------------------------------------------------------------------------------------------------




//Login cancel form
$('document').ready(function() 
{
	$("#login2").validate({
		errorClass: 'lc-required-missing',
		errorPlacement: function(error, element) {},
		invalidHandler: function(e, validator) 
		{
			var errors = validator.numberOfInvalids();
				
			if (errors)
			{
				formError("login2");
			}
			else
			{ 
				$('#login2 #message-login').html('ok');
				$('#login2 #message-login').css('display', 'none');
			}
			
		},
		
		submitHandler: function (form) 
		{	
			formSubmitLogin2(); 
			return false;
		}
				 
	 });
	
});

function formSubmitLogin2() 
{  		
	$.ajax({
		type: "POST",
		url: "https://my.licensecube.com/lc-api/license_info.php?jsoncallback=resultLoginLicense2",
		data: $("#login2").serialize(),
		dataType: "jsonp",
		beforeSend: function(obj)
		{
			$('#login2 #button-submit').css('display', 'none');	
			$('#login2 #loader').css('display', '');
		},
		success: function(json)
		{ 
			resultLoginLicense2(json);
		},
		error: function(objeto, iss, other)
		{
			$('#login2 #button-submit').css('display', '');	
			$('#login2 #loader').css('display', 'none');
			$('#login2 #message-login').html('We apologize, the license could not be canceled at this time. Please contact our support department for further assistance at (855) 465-4236.');
			$('#login2 #message-login').addClass('lc-box-error');
		}

	});
	
}

function resultLoginLicense2(json)
{
	
	$('#tabc3 .lc-form-note').css('display', 'none');
	$('#cancel-loading-licenses').css('display', 'none');
	if(json.status=='OK')
	{
		if($('#login-form').val() == 'installation')
		{ 
			$('#login2 #message-login').css('display', 'none');
			$('#login2').fadeOut();
			
			$('#cancel-license #lc_sess_id').val(json.lc_sess_id);	

			$('#tabc3 .lc-form-note').css('display', 'none');
			$('#tabc3 #login-message').fadeIn();
			$('#tabc3 #name-login').html(json.first);
			//setTimeout("$('#tabc3 #login-message').fadeOut();", 3000);
					
			var ipDomain
			var ipDomainSend;			
			var selectHTML;
			var product;
			option='';
			var product_type_ant = '';
			
			var packv =json.packv;
			var packv = packv.sort(ordenar); 	
			json.packv = packv;
			var SelectHTML = '<select class="lc-input required"  name="license-type" id="license-type" onchange="selectCancel();" ><option selected="selected" disabled="disabled" value=""> Please Select...</option>';		

						
			for(i=0;i<json.packv.length;i++)
			{ 
				ipDomain = '(';
				if(json.packv[i].lc_requires_ip==1)
				{
					ipDomain += json.packv[i].ip_address
					ipDomainSend = json.packv[i].ip_address
				}
				if(json.packv[i].lc_requires_domain==1)
				{
					ipDomain += json.packv[i].servername
					ipDomainSend = json.packv[i].servername
				}
				if(json.packv[i].lc_requires_domain == 1 && json.packv[i].lc_requires_ip == 1)
				{
					ipDomain += json.packv[i].ip_address + ", " + json.packv[i].servername;
					ipDomainSend = json.packv[i].ip_address + ", " + json.packv[i].servername;  
				}
			
				ipDomain += ')';
				
				if((json.packv[i].lc_requires_domain == 0 && json.packv[i].lc_requires_ip == 0) || (json.packv[i].ip_address == '' && json.packv[i].servername == ''))
				{
					ipDomain = '';
			  		ipDomainSend = '';
				}
				
				if (json.packv[i].lc_product_type == product_type_ant)
				{
					
					product_type_ant = json.packv[i].lc_product_type;
				}
				else
				{	var pro = json.packv[i].lc_product_type;
					pro = pro.replace('_', ' ');
					pro = pro.capitalize();
	
					SelectHTML	+= "<optgroup label='"+ (pro) + "'>";			
					product_type_ant = json.packv[i].lc_product_type; 
				}
				
     			option='<option requires_ip="' + json.packv[i].lc_requires_ip +'"  requires_licenseip="' + json.packv[i].lc_requires_license_id +'" requires_domain="' + json.packv[i].lc_requires_domain +'" id="' + json.packv[i].id +'" current="' + ipDomainSend +'" first="' + json.first + '" title="' + json.packv[i].title +'">' + json.packv[i].title+' '+ ipDomain + '</option>';
     			 SelectHTML+=option;	
					
				if (json.packv.length != i+1)
				 {
					 if (json.packv[i+1].lc_product_type != product_type_ant)
					 {
						 SelectHTML += "</optgroup>";
						 
						 //$("#tabc2 #license-type").append(option);	
					 }	
				}
							
															
			}
			SelectHTML+='</select> ';
			
			$('#tabc3 #type-of-license').html(SelectHTML);
			//$("#tabc3 #license-type").append(SelectHTML);
			
			$('#cancel-license').fadeIn();	
			$('#tabc3 #tr-type-license-id').css('display', '');
			$('#tabc3 #tr-type-license-id').fadeIn();	
				
		
		}
		
		
		
	}
	else 
	{	
		$('#login2 #button-submit').css('display', '');	
		$('#login2 #loader').css('display', 'none');
		$('#login2 #message-login').css('display', '');
		$('#login2 #message-login').addClass('lc-box-error');
		$('#login2 #message-login').html(json.message);
	}
		
	
		
	if (json.status=='error-ratelimit')
	{	
		$('#login2 #button-submit').css('display', '');	
		$('#login2 #loader').css('display', 'none');
		$('#login2 #message-login').addClass('lc-box-error');
		$('#login2 #message-login').html("We are sorry, seems you already submitted some inquiries?  Please, try again later.");
	}	
	
	
}


function selectCancel()
{
		requires_ip = $("#tabc3 #license-type option:selected").attr('requires_ip')
		requires_licenseip = $("#tabc3 #license-type option:selected").attr('requires_licenseip')
		requires_domain = $("#tabc3 #license-type option:selected").attr('requires_domain')
		id = $("#tabc3 #license-type option:selected").attr('id')
		current = $("#tabc3 #license-type option:selected").attr('current')
		title = $("#tabc3 #license-type option:selected").attr('title')

		showFormCancel(requires_ip, requires_licenseip, requires_domain, id, title, current);
}


function showFormCancel(requires_ip, requires_licenseip, requires_domain, id, license, title)
{ 
	//$('#client-license-cancel #lc-box').slideUp();
	//$('#cancel-license').fadeIn();	
	$('#cancel-license #pack_id').val(id);
	//$('#tabc3 #current-license').css('display', '');	
	//$('#tabc3 #current-license').html("You are about to cancel the <b>" + license + "</b> for <b>" + title+"</b>");
	
	
	if (requires_licenseip == 0)
	{
		$("#tabc3 #tr-license-id").css('display', 'none');	
		$("#tabc3 #license-id").removeClass("required");
		$('#tabc3 #license-id').val("");
			
	}
	else
	{
		$("#tabc3 #tr-license-id").css('display', '');	
		$("#tabc3 #license-id").addClass("required");
		$('#tabc3 #license-id').val(title);
	}
	if (requires_ip == 0)
	{
		$("#tabc3 #tr-current-ip").css('display', 'none');		
		$("#tabc3 #current-ip").removeClass("required");		
		$("#tabc3 #current-ip").removeClass("lc-required-missing");		
		$("#tabc3 #current-ip").removeClass("ip-address");		
		$('#tabc3 #current-ip').val("");
		
	}
	else
	{
		$("#tabc3 #tr-current-ip").css('display', '');		
		$("#tabc3 #current-ip").addClass("required");		
		$('#tabc3 #current-ip').val(title);
					
	}
	
	if (requires_domain == 0)
	{
		$("#tabc3 #tr-current-domain").css('display', 'none');			
		$("#tabc3 #current-domain").removeClass("required");		
		$('#tabc3 #current-domain').val("");
	}
	else
	{
		$("#tabc3 #tr-current-domain").css('display', '');		
		$("#tabc3 #current-domain").addClass("required");		
		$('#tabc3 #current-domain').val(title);		
	}
	
	
		
}




//--------------------------------------------------------------------------------------------------------------------------





function clearErrorMessage(label) 
{
	var validator = $('#forms').validate();
    var _ierr = 0;
    if (!$('.lc-required-missing:not([disabled])').length) {
    		$('#message').fadeOut();
    } else {
    	setTimeout('clearErrorMessage()', 300);
    }
}

function clearErrorMessageCancel() 
{
	var validator = $('#change-license').validate();
    var _ierr = 0;
    if (!$('.lc-required-missing:not([disabled])').length) {
    	$('#form-contact-cancel-license #message').fadeOut();
    } else {
    	setTimeout('clearErrorMessage()', 300);
    }
}

function clearErrorMessageChange() 
{
	var validator = $('#change-license').validate();
    var _ierr = 0;
    if (!$('#login1 .lc-required-missing:not([disabled])').length) {
    	$('#tabc2 #message').fadeOut();
	} else {
    	setTimeout('clearErrorMessageChange()', 300);
    }
}

function clearErrorMessageInstallation() 
{
	var validator = $('#cancel-license').validate();
    var _ierr = 0;
    if (!$('.lc-required-missing:not([disabled])').length) {
    	$('#tabc4 #message').fadeOut();
	} else {
    	setTimeout('clearErrorMessageInstallation()', 300);
    }
}

function clearErrorMessageLogin1() 
{
	var validator = $('#login1').validate();
    var _ierr = 0;
    if (!$('.lc-required-missing:not([disabled])').length) {
    	$('#login1 #message-login').fadeOut();
	$('#lc-form-note').css('display', '');
	} else {
    	setTimeout('clearErrorMessageLogin1()', 300);
    }
}

function clearErrorMessageLogin2() 
{
	var validator = $('#login2').validate();
    var _ierr = 0;
    if (!$('.lc-required-missing:not([disabled])').length) {
    	$('#login2 #message-login').fadeOut();
	$('#tabc3 .lc-form-note').css('display', '');
	} else {
    	setTimeout('clearErrorMessageLogin2()', 300);
    }
}

function clearErrorMessageLogin3() 
{
	var validator = $('#login').validate();
    var _ierr = 0;
    if (!$('.lc-required-missing:not([disabled])').length) {
    	$('#login #message-login').fadeOut();
	$('#tabc4 .lc-form-note').css('display', '');
	} else {
    	setTimeout('clearErrorMessageLogin3()', 300);
    }
}




 

function formError(form, typeform) 
{
	 if (form=='contact')
	 {	 
	 	$('#message').addClass('lc-box-error');
		$('#message').html("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request.");
		setTimeout('clearErrorMessage()', 5000);
	 }
	 else if (form=='change')
	 {
    $('#tabc2 #login-message').css('display', 'none');
		$('#tabc2 #message').addClass('lc-box-error');
		$('#tabc2 #message').html("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request.");
		setTimeout('clearErrorMessageChange()', 5000);	
	 }
	 else if (form=='login1')
	 {
		$('#lc-form-note').hide();
		$('#login1 #message-login').addClass('lc-box-error');
		$('#login1 #message-login').html("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request.");
		setTimeout('clearErrorMessageLogin1()', 300);	
	 }
	 else if (form=='login2')
	 {
		$('#tabc3 .lc-form-note').hide();
		$('#login2 #message-login').addClass('lc-box-error');
		$('#login2 #message-login').html("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request.");
		setTimeout('clearErrorMessageLogin2()', 300);	
	 }
	 else if (form=='login3')
	 {
		$('#tabc4 .lc-form-note').hide();
		$('#login #message-login').addClass('lc-box-error');
		$('#login #message-login').html("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request.");
		setTimeout('clearErrorMessageLogin3()', 300);	
	 }
	 else if (form=='installation')
	 {
		$('#tabc4 #message').addClass('lc-box-error');
		$('#tabc4 #message').html("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request.");
		setTimeout('clearErrorMessageInstallation()', 5000);	
	 }
	 
	 else
	 {
		 $('#form-contact-cancel-license #message').addClass('lc-box-error');
	 	 $('#form-contact-cancel-license #message').html("We apologize! There seems to be a few fields that you've missed, and you'll need to complete them before we can process your request.");
		 setTimeout('clearErrorMessageCancel()', 5000);
	 }
     
}
function ordenar(a,b) { 
    // aquí lo que tienes que hacer es convertir a y b a objetos Date 
	
    if (a.lc_product_type == b.lc_product_type) return 0;
  return (a.lc_product_type < b.lc_product_type) ? 1 : -1;
   
}

String.prototype.capitalize = function(){
					return this.replace(/\w+/g, function(a){
						return a.charAt(0).toUpperCase() + a.slice(1).toLowerCase();
					});
				};

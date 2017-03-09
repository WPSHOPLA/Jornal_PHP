$.validator.addMethod('phone', function (value, element) {
		if (/[^-+()\0-9 ]/.test(value))
			return false;
    if (value == '')
			return true;
		return true;
  	}, 'Please enter your telephone number.');
	
/*$.validator.addMethod('ip-address', function (value, element) {
		if (!value.length)
			return true;
		var matches = /(\d+).(\d+).(\d+).(\d+)/.exec(value);
		if ((matches == null) || (matches.length != 5))
			return false;
		for (var i = 1; i <= 5; ++i)
			if ((matches[i] < 0) || (matches[i] > 255))
				return false;
    return true;
  }, 'Please enter a valid IP address.');*/

           
$.validator.addMethod('ip-address', function (value, element) {
	partes=value.split('.'); 
    if (partes.length!=4) 
        return false; 
     
    for (i=0;i<4;i++) 
	{  
        num=partes[i]; 
        if (num>255 || num<0 || num.length==0 || isNaN(num)) 
       		return false; 
         
    } 
    return true;
}, 'Please enter a valid IP address.');


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


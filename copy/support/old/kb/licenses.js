
function changeLicense(lic)
{
	//$('#message').requires_licenseid('display', 'none');
	alert(document.getElementById('license').value);
}
$(document).ready(function(){
	$("#license-type").change(function(){
		
		var selected = $("#license-type option:selected"); 
	
		if ($(selected).attr('requires_licenseid') == undefined)
		{
			$("#tr-license-id").css('display', 'none');	
			$("#license-id").removeClass("required");
			$('#license-id').val("");
				
		}
		else
		{
			$("#tr-license-id").css('display', '');	
			$("#license-id").addClass("required");
		}
		if ($(selected).attr('requires_ip') == undefined)
		{
			$("#tr-current-ip").css('display', 'none');
			$("#tr-new-ip").css('display', 'none');
			$("#current-ip").removeClass("required");
			$("#new-ip").removeClass("required");
			$('#new-ip').val("");
			$('#current-ip').val("");
			
		}
		else
		{
			$("#tr-current-ip").css('display', '');
			$("#tr-new-ip").css('display', '');
			$("#current-ip").addClass("required");
			$("#new-ip").addClass("required");
			$("#new-ip").addClass("domain");			
		}
		
		if ($(selected).attr('requires_domain') == undefined)
		{
			$("#tr-current-domain").css('display', 'none');
			$("#tr-new-domain").css('display', 'none');	
			$("#current-domain").removeClass("required");
			$("#new-domain").removeClass("required");	
			$('#new-domain').val("");
			$('#current-domain').val("");
		}
		else
		{
			$("#tr-current-domain").css('display', '');
			$("#tr-new-domain").css('display', '');
			$("#current-domain").addClass("required");
			$("#new-domain").addClass("required");		
		}
		
	});
})

$(document).ready(function(){
	$("#license-type2").change(function(){
		
		var selected = $("#license-type2 option:selected"); 
	
		if ($(selected).attr('requires_licenseid') == undefined)
		{
			$("#tr-license-id2").css('display', 'none');	
			$("#license-id2").removeClass("required");
			$('#license-id2').val("");
				
		}
		else
		{
			$("#tr-license-id2").css('display', '');	
			$("#license-id2").addClass("required");
		}
		if ($(selected).attr('requires_ip') == undefined)
		{
			$("#tr-current-ip2").css('display', 'none');
			$("#current-ip2").removeClass("required");
 			$('#current-ip2').val("");
			
		}
		else
		{
			$("#tr-current-ip2").css('display', '');
			$("#current-ip2").addClass("required");
			
		}
		
		if ($(selected).attr('requires_domain') == undefined)
		{
			$("#tr-current-domain2").css('display', 'none');
			$("#tr-new-domain2").css('display', 'none');	
			$("#current-domain2").removeClass("required");
			$('#current-domain2').val("");
		}
		else
		{
			$("#tr-current-domain2").css('display', '');
			$("#tr-new-domain2").css('display', '');
			$("#current-domain2").addClass("required");

		}
		
	});
})



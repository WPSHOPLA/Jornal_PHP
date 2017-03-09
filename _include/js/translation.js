$('document').ready(function(){  
	
	checkChangeDomain();
	checkDomainItemActive();
  
	$('#select-lenguage li').click(function() {
  		landing=paths['en'].split("/");
		
			if(this.id == 'es')
				setCookie("language", 'es', "/", 0, ".licensecube.com");
			else if(this.id == 'en')
				setCookie("language", 'en', "/", 0, ".licensecube.com");
			else
				setCookie("language", 'pt', "/", 0, ".licensecube.com");
			
			checkChangeDomain();
		
	});
});



function changeItemActive(lenguage){	
	
		if(lenguage=='es'){
			$('#select-lenguage #es').removeClass("disabled");
			$('#select-lenguage #es').addClass("enabled");
			$('#select-lenguage #en').removeClass("enabled");
			$('#select-lenguage #en').addClass("disabled");
			$('#select-lenguage #pt').removeClass("enabled2");
			$('#select-lenguage #pt').addClass("disabled");
		}
		else if(lenguage=='en') {
			$('#select-lenguage #en').removeClass("disabled");
			$('#select-lenguage #en').addClass("enabled");
			$('#select-lenguage #es').removeClass("enabled");
			$('#select-lenguage #pt').removeClass("enabled2");
			$('#select-lenguage #pt').addClass("disabled");
		}	
		else{
			$('#select-lenguage #es').removeClass("enabled");
			$('#select-lenguage #es').addClass("disabled");
			$('#select-lenguage #en').removeClass("enabled");
			$('#select-lenguage #en').addClass("disabled");
			$('#select-lenguage #pt').removeClass("disabled");
			$('#select-lenguage #pt').addClass("enabled2");
		}
		Cufon.replace('.language-bar');
}

function checkDomainItemActive(){
	actualDomain = checkActualDomain(); 
	var myDomainCookie = getCookie("language");
	
	if(myDomainCookie!= null)
		changeItemActive(myDomainCookie);
	else
		changeItemActive(actualDomain);			
}


function checkChangeDomain (){
  var myDomainCookie = getCookie("language");
  var actualDomain = '';  
  actualDomain = checkActualDomain(); 
  // alert(myDomainCookie +"  "+ actualDomain);
   
  if(myDomainCookie == actualDomain) return; 
  
  if(checkActualDomain()=='en'){
	  if(myDomainCookie!= null){
		if(myDomainCookie != actualDomain) 
			landing=paths['en'].split("/");
			if(landing[1]!="p") 		
				changeDomain(myDomainCookie);	
	  }
	  else{
		/*var myBrowserLenguage = "<?=best_locale($_SERVER['HTTP_ACCEPT_LANGUAGE'], $_SERVER['DOCUMENT_ROOT'] . '/_include/modules/locale')?>";*/ 
		
			myBrowserLenguage = myBrowserLenguage.split("_"); 
			landing=paths['en'].split("/");
			if(landing[1]!="p")
				if(actualDomain!=myBrowserLenguage[0])
					changeDomain(myBrowserLenguage[0]);
	}
  }
}



function changeDomain(len){
	// if(len == 'es')
		// window.location.hostname = 'es.mvg.com.uy';
	// else if(len == 'en')
		// window.location.hostname = 'mvg.com.uy';
	// else
		// window.location.hostname = 'pt.mvg.com.uy';
	landing=paths['en'].split("/");
	if(landing[1]!="p") {
		if(len == 'es')
			window.location = 'http://es.licensecube.com'+paths[len];
		else if(len == 'en')
			window.location = 'http://www.licensecube.com'+paths[len];
	}
	
	/*if(len == 'es')
		window.location = 'http://es.licensecube.com';
	else if(len == 'en')
		window.location = 'http://www.licensecube.com';
	else
		window.location = 'http://pt.licensecube.com';*/
}

function setCookie(name, value, path, expires, domain, secure)
{ path = '/';
    document.cookie= name + "=" + escape(value) +
        ((expires) ? "; expires=" + "" : "") +
        ((path) ? "; path=" + path : "") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
		//GuardarCookie('currency');
		//document.cookie = "currency" + "=" + escape('holaaa') + "; expires=" + caducidad + "; path=/" 
}


function getCookie(name)
{
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1)
    {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
    }
    var end = document.cookie.indexOf(";", begin);
    if (end == -1)
    {
        end = dc.length;
    }
	
    return unescape(dc.substring(begin + prefix.length, end));
}

function checkActualDomain(){
	actualDomain = window.location.hostname.split('.'); 
	
	if(actualDomain[0]=='www'){
		if(actualDomain[1] == 'licensecube')
			return "en";
		else
			return "es";
	}else
		return actualDomain[0];
}

<?
//*************************************************************************//
// BELOW YOU WILL FIND THE CONFIGURATION INFORMATION FOR MAKING GLOBAL CHANGES TO THE 
// LICENSECUBE WEBSITE. THESE CHANGES NEED TO BE REVIEWED BEFORE MAKING THE FINAL UPLOAD.


// SOCIAL MEDIA SETTINGS

	// ACTIVE SOCIAL MEDIA 

		$twitter_link = _("http://www.twitter.com/licensecube");
		$facebook_link = _("http://www.facebook.com/LicenseCube");
		$sharethis_link = _("http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d5ee35a529b3dca");
		$rss_link = _("http://blog.licensecube.com/feed");
		$youtube_link = _("http://www.youtube.com/user/LicenseCube#p/u");
	
	// INACTIVE SOCIAL MEDIA
	
		$flikr_link = _("#");	  // CURRENTLY NOT SUPPORTED	
		$order_process_dirname = 'https://my.licensecube.com/license-process';
		
	//  SECURITY	
		
		$sitelock_security_seal = "https://www.sitelock.com/verify.php?site=www.licensecube.com";
    
// VERSION CHANGES (*** NO LONGER SUPPORTED **)

	//$vps_plesk_version = _(" ");
    //$vps_cpanel_version = _("11.28.x");
    //$dedicated_virtuozzo = _(" ");
	
//*************************************************************************//	
// WITHIN SECTION WE RUN THE CONIFGURATION FOR SETTING AND CONTROLLING THE LANDING
// LANDING PAGES THAT ARE PROMOTING LICENSES FOR CERTAIN SERVICES

	// Parallels Landing Pages
	
		// Keyword: WHMCS Leased License
			$seo_whmcs_leased_main = "Obtain your WHMCS Leased License today... <br /> We'll guide you in the right direction!";
			$seo_whmcs_leased_title = "WHMCS Leased License - Cheap and Instant Monthly WHMCS Licenses";
			$seo_whmcs_leased_keywords = "whmcs, monthly whmcs, leased whmcs, cheap whmcs, whmcs reseller";
			$seo_whmcs_leased_description = "Lease your WHMCS license from certified reseller. Pay monthly for your WHMCS license and greatly reduce the cost of your web hosting business.";
	
		// Keyword: Plesk for Windows
			$seo_plesk_windows_main = "Buy your Plesk for Windows License.<br /> Start Windows Hosting, with Plesk for Windows!";
			$seo_plesk_windows_title = "Plesk for Windows - Buy Parallels Plesk Panel for Your Windows Server";
			$seo_plesk_windows_keywords = "plesk windows, windows 2003, windows 2008, parallels plesk, plesk license, buy plesk";
			$seo_plesk_windows_description = "Buy your Parallels Plesk Panel for Windows license today and get an easy, profitable, and complete server automation for your Windows Server 2003 or 2008.";
			
		// Keywords: Plesk for Linux
			$seo_plesk_linux_main = "Purchase your Plesk for Linux License.<br /> Start Linux Shared Hosting, with Plesk for Linux!";
			$seo_plesk_linux_title = "Plesk for Linux - Buy Parallels Plesk Panel for Your Linux Server";
			$seo_plesk_linux_keywords = "plesk, plesk panel, parallels plesk panel, plesk for linux, linux plesk, buy plesk, plesk license";
			$seo_plesk_linux_description = "Buy Parallels Plesk Panel today and automate your Linux server. Linux Plesk Panel is working on any modern linux distribution like CentOS, Ubuntu, Debian.";
			
		// Keywords: Plesk 10
			$seo_plesk_10_main = "Buy your Plesk 10 Hosting License.<br /> Empower your online web business with Plesk 10!";
			$seo_plesk_10_title = "Parallels Plesk Panel 10 - Buy Your Parallels Plesk 10 Instant License";
			$seo_plesk_10_keywords = "plesk, plesk 10, parrallels plesk 10, buy plesk, buy plesk panel, plesk license, parallels license";
			$seo_plesk_10_description = "Parallels Plesk Panel 10 is a powerful web hosting automation system. Plesk 10 includes fully automated billing and provisioning and integrated SiteBuilder.";
			
		// Keywords: Plesk SiteBuilder
			$seo_plesk_sb_main = "Buy your Plesk SiteBuilder License.<br /> Start Creating Picture Perfect Website Designs!";
			$seo_plesk_sb_title = "Parallels Plesk SiteBuilder - Buy Plesk SiteBuilder Instant License";
			$seo_plesk_sb_keywords = "sitebuilder, plesk sitebuilder, parallels sitebuilder, plesk module, wysiwyg editor, plesk web designer, plesk templates";
			$seo_plesk_sb_description = "Parallels Plesk SiteBuilder is an easy and scalable web application which is helping you to create and manage your Blog, Image Gallery, Forum and more.";
			
		// Keywords: Plesk Demo 
			$seo_plesk_demo_main = "Try the MOST POPULAR Control Panel. <br /> Take the Plesk Demo Challange, you'll be glad you did.";
			$seo_plesk_demo_title = "Parallels Plesk Panel 10 Demo - Try the Plesk Panel Online Demos";
			$seo_plesk_demo_keywords = "plesk demo, plesk 10 demo, plesk live demo, plesk test, plesk trial, parallels plesk demo";
			$seo_plesk_demo_description = "Experience Parallels Plesk Panel functionality and power today on Plesk Panel live demos. Plesk 10 online demo can be accessed as any Plesk Panel user role.";
			
		// Keywords: Virtuozzo
			$seo_virtuozzo_main = "Start virtualizing your web business. <br /> Virtuozzo can dramatically improve your revenue.";
			$seo_virtuozzo_title = "Parallels Virtuozzo Containers - Linux and Windows OS Virtualization";
			$seo_virtuozzo_keywords = "virtuozzo, virtualization, os virtualization, parallels virtuozzo, virtuozzo linux, virtuozzo windows, linux virtualization, windows virtualization";
			$seo_virtuozzo_description = "Virtuozzo Containers is an operating system virtualization solution from Parallels that lets you maximize the investment in your Linux or Windows server.";
			
		// Keywords: Parallels Plesk
			$seo_parallels_plesk_main = "Are you \"Powered by: Parallels Plesk?\"<br /> If not, let Parallels Plesk show you the difference...";
			$seo_parallels_plesk_title = "Parallels Plesk Control Panel - Instant Parallels License Reseller";
			$seo_parallels_plesk_keywords = "plesk, parallels plesk, plesk panel, parallels panel, parallels reseller, parallels license, plesk license";
			$seo_parallels_plesk_description = "Parallels Plesk Panel has intuitive user interface and saves you time creating web sites, managing emails and deploying applications to your hosting server.";
			
		// Keywords: Plesk Server
			$seo_plesk_server_main = "Maximumize: Profits, Performance, and Reliability. <br /> Plesk Server Control Panel can do just that for you...";
			$seo_plesk_server_title = "Plesk Server - Automate your Web Hosting Server with Parallels Plesk";
			$seo_plesk_server_keywords = "plesk, plesk panel, parallels plesk, plesk server, parallels server, linux server, windows server";
			$seo_plesk_server_description = "Plesk Panel offers an advanced web hosting management via intuitive user interface. Plesk Panel also has power user mode for easier server administration.";
			
		// Keywords: Plesk Mail
			$seo_plesk_mail_main = "Control Email Delivery, with advanced features.<br /> Plesk Mail enables total email control and filtering.";
			$seo_plesk_mail_title = "Plesk Mail - Get a Simple Email Solution with Parallels Plesk Panel";
			$seo_plesk_mail_keywords = "plesk, plesk mail, plesk email, plesk webmail, parallels mail, plesk antispam, plesk antivirus";
			$seo_plesk_mail_description = "Plesk provides access to spam and virus filtering tools and variety of email protocols and web based interfaces for your customers to review their email.";
			
		// Keywords: Plesk Update
			$seo_plesk_update_main = "Updates made simple. Parallels Plesk Simple. <br /> Let's make your Parallels Plesk updates process easy...";
			$seo_plesk_update_title = "Plesk Update - Secure Plesk Panel Server with Parallels Updates";
			$seo_plesk_update_keywords = "plesk, plesk update, plesk upgrade, secure plesk, plesk security, parallels updates";
			$seo_plesk_update_description = "Install Plesk updates, control panel add-ons or upgrade your Plesk control panel to the latest available release using Parallels Plesk Panel Updater.";
			
		// Keywords: Virtuozzo Containers
			$seo_virtuozzo_containers_main = "Improve Performance. Lower Expenses. Improve Sales. <br/> Can your existing virtualization platform do this?";
			$seo_virtuozzo_containers_title = "Virtuozzo Containers - Your Operating System Virtualization Solution";
			$seo_virtuozzo_containers_keywords = "virtuozzo, parallels virtuozzo, parallels containers, virtualization, vps, virtual server, virtual contaner";
			$seo_virtuozzo_containers_description = "Parallels Virtuozzo Containers is a cost saving virtualization solutions increasing the utilization of existing servers by 2-3 times over other hypervisors.";
			
		// Keywords: WHMCS Themes
			$seo_whmcs_themes_main = "Customize your WHMCS Billing System License.<br /> WHMCS Themes allow you to do just that!";
			$seo_whmcs_themes_title = "WHMCS Themes - Skin your Billing System with WHMCS Templates";
			$seo_whmcs_themes_keywords = "whmcs, whmcs themes, whmcs templates, whmcs integration, whmcs design";
			$seo_whmcs_themes_description = "Buy a new feel and look for your WHMCS billing system with free or paid templates. Get your new WHMCS theme integrated by a professional WHMCS integrator.";
			
		// Keywords: WHMCS Reseller
			$seo_whmcs_reseller_main = "Find your perfect WHMCS Reseller! <br /> We've got all the tips that you need to get started!";
			$seo_whmcs_reseller_title = "WHMCS Reseller - Buy a Discounted WHMCS License from Volume Resellers";
			$seo_whmcs_reseller_keywords = "whmcs, whmcs reseller, whmcs distributor, discounted whmcs, cheap whmcs, whmcs license, buy whmcs";
			$seo_whmcs_reseller_description = "WHMCS license resellers offer increasing discounts on license purchases. WHMCS license discounts are sometimes more than 15% of the original WHMCS price.";
			
		// Keywords: WHMCS Modules
			$seo_whmcs_modules_main = "Expand your WHMCS Billing System. <br /> Automate your routine billing tasks and functions!";
			$seo_whmcs_modules_title = "WHMCS Modules - Domain Registrars, Servers and Hosting Billing Modules";
			$seo_whmcs_modules_keywords = "whmcs, whmcs modules, whmcs cpanel module, whmcs licensing module, whmcs billing, whmcs domain module, whmcs automation";
			$seo_whmcs_modules_description = "WHMCS modules are automating hosting account provisioning, domain name registratration and licenses of all the software your company offers with WHMCS.";
			
		// Keywords: WHMCS Nulled
			$seo_whmcs_nulled_main = "Get THE REAL WHMCS, not a nulled imitation. <br /> The real WHMCS is key to billing system automation...";
			$seo_whmcs_nulled_title = "WHMCS Nulled - Why you Shoud Not use Cracked (Nulled) Version of WHMCS";
			$seo_whmcs_nulled_keywords = "whmcs, nulled whmcs, cracked whmcs, free whmcs, free whmcs license, whmcs null download, whmcs license key";
			$seo_whmcs_nulled_description = "Do not let your customers to get spammed because your are cheap to buy a WHMCS license. Nulled WHMCS script also can contain call home and spyware scripts.";
			
		// Keywords: Buy WHMCS
			$seo_buy_whmcs_main = "BUY your WHMCS License from a certified reseller...<br /> Expand the partnership, when you need future licenses!";
			$seo_buy_whmcs_title = "Buy WHMCS - Cheap and Instant WHMCS License Reseller";
			$seo_buy_whmcs_keywords = "whmcs, buy whmcs, cheap whmcs, discounted whmcs, whmcs license, whmcs reseller";
			$seo_buy_whmcs_description = "Buy your licence from certified WHMCS reseller. Instant activaton of WHMCS licenses and discounted WHMCS prices on bulk orders.";
			
		// Keywords: Plesk 9.5
			$seo_plesk_95_main = "Have you enhanced with Parallels Plesk 9.5? <br /> Plesk 9.5 adds more unique tools to your toolbox...";
			$seo_plesk_95_title = "Plesk 9.5 - The Most Complete and Stable Web Hosting Panel";
			$seo_plesk_95_keywords = "plesk, plesk 9.5, plesk panel, parrallels plesk, plesk 9";
			$seo_plesk_95_description = "Plesk Panel 9.5 has been developed for the professional hosting providers. Plesk 9.5 provides the most complete set of features in the web hosting industry.";
			
		// Keywords: Virtuozzo for Windows
			$seo_virtuozzo_for_windows_main = "Ready to start selling Windows VPS's? <br /> Virtualize Windows using the power of Virtuozzo!";
			$seo_virtuozzo_for_windows_title = "Virtuozzo for Windows - Parallels Containers Windows OS Virtualization";
			$seo_virtuozzo_for_windows_keywords = "virtuozzo, parallels virtuozzo, virtuozzo windows, virtuozzo containers, windows virtualization";
			$seo_virtuozzo_for_windows_description = "Virtuozzo for Windows offers the latest Windows 2008 R2 Server based virtualization. Buy Windows Virtuozzo for VPS and cloud servers at the highest density.";
			
		// Keywords: Fantastico de lux
			$seo_fantastico_de_luxe_main = "Fantastico makes it easy to install 60+ scripts…<br /> Your next WordPress installation is a single-click away!";
			$seo_fantastico_de_luxe_title = "Fantastico De Luxe - The Leading Autoinstaller For cPanel Servers";
			$seo_fantastico_de_luxe_keywords = "fantastico, fantastixo deluxe, autoinstaller, cpanel, script autoinstaller, cpanel autoinstaller";
			$seo_fantastico_de_luxe_description = "Fantastico De Luxe is the leading cPanel autoinstaller. Fantastico gives web-hosting customers the ability to install multiple instances of any script.";
			
		// Keywords: Fantastico Install
			$seo_fantastico_install_main = "Installing Fantastico isn't complicated... <br /> So ensure you get your license installed correctly...";
			$seo_fantastico_install_title = "Fantastico Installation - How To Install Fantastico Instruction";
			$seo_fantastico_install_keywords = "fantastico, fantastico install, cpanel vps, cpanel dedicated, fantastico installation";
			$seo_fantastico_intsall_description = "Fantastico installation how-to for cPanel VPS or Dedicated Servers. You don't need to download any files in order to install Fantastico on your cPanel server.";
			
		// Keywords: Auto Installer
			$seo_auto_installer_main = "Ensure you pick the correct web hosting auto installer. <br /> Make life simpler, while improving web hosting sales!";
			$seo_auto_installer_title = "Auto Installer - Designed To Make Installing Popular Scripts Easily";
			$seo_auto_installer_keywords = "auto installer, script installer, softaculous, fantastico, one click installer";
			$seo_auto_installer_description = "Using an auto installer you can easily install scripts with a single-click. Auto installers also assist in improving web hosting sales.";	
			
		// Keywords: WHMSonic
			$seo_whmsonic_main = "Control your live streams with WHMSonic!<br /> Accurately, manage all your live streams with a click...";
			$seo_whmsonic_title = "WHMSonic - Shoutcast Streaming Media, AutoDJ, Radio Reseller Server";
			$seo_whmsonic_keywords = "whmsonic, autodj, shoutcast, cpanel streaming, radio streaming, streaming media";
			$seo_whmsonic_description = "WHMSonic helps your cPanel users to setup radio from their cPanel and fully control it under your permission. WHMSonic makes the control of shoutcast easy.";
			
		// Keywords: AutoDJ
			$seo_autodj_main = "Automate your playlist with WHMSonic & AutoDJ!<br /> Stream live 24/7 even while you are away...";
			$seo_autodj_title = "Auto DJ - Content Delivery System for SHOUTcast streaming server";
			$seo_autodj_keywords = "autodj, whmsonic, auto streaming, shoutcast server, winamp";
			$seo_autodj_description = "Auto DJ allows you to keep your SHOUTcast streaming server online 24/7 without having to run a source like Winamp or SAM Broadcaster from your computer.";
			
		// Keywords: Virtuozzo for Linux 
			$seo_virtuozzo_for_linux_mian = "Start virtualizing your Linux on your server... <br /> Take the first step with Parallels Virtuozzo for Linux!";
			$seo_virtuozzo_for_linux_title = "Virtuozzo for Linux - Parallels Containers Linux OS Virtualization";
			$seo_virtuozzo_for_linux_keywords = "virtuozzo, parallels virtuozzo, virtuozzo linux, virtuozzo containers, linux virtualization";
			$seo_virtuozzo_for_linux_description = "Virtuozzo for Linux offers the best virtualization for every linux based server. Buy Linux Virtuozzo for VPS and cloud servers at the highest density.";
			
		// Keywords: Virtuozzo Power Panel 
			$seo_virtuozzo_power_panel_main = "Control all the resources within one location... <br /> Make life simple, one-click simple within Virtuozzo!";
			$seo_virtuozzo_power_panel_title = "Virtuozzo Power Panel - Powerful Web-based VPS Administration Tool";
			$seo_virtuozzo_power_panel_keywords = "virtuzzo power panel, vzpp, virtuozzo panel, power panel, vps control panel";
			$seo_virtuozzo_power_panel_description = "Virtuozzo Power Panel provides users with access to their VPS so they can easily perform management tasks without root rights to the server.";
			
		// Keywords: Virtuozzo OpenVZ
			$seo_virtuozzo_openvz_main = "Virtuozzo or OpenVZ, what's the right choice? <br /> How-to pick the best virtualization platform...";
			$seo_virtuozzo_openvz_title = "Virtuozzo - Virtualization and Automation Built On Top Of OpenVZ";
			$seo_virtuozzo_openvz_keywords = "virtuozzo, openvz, virtuozzo benefits, why virtuozzo, parallels virtuozzo";
			$seo_virtuozzo_openvz_description = "Parallels Virtuozzo Containers provides improvements over OpenVZ and more functionality in the areas like density, management tools, recovery, and updates.";
			
		// Keywords: Host Billing System
			$seo_host_billing_system_main = "How to pick the perfect Host Billing System... <br /> Pick the best billing system for your online business!";
			$seo_host_billing_system_title = "Host Billing System - Automated Signups, Payments and Provisioning";
			$seo_host_billing_system_keywords = "host billing, hosting billing, hosting automation, automated hosting, automated billing";
			$seo_host_billing_system_description = "Automate your billing with a host billing system. Host billing systems allow you to invoice, create, suspend, and terminate accounts with a single-click.";
			
		// Keywords: Host Billing Software
			$seo_host_billing_software_main = "How to pick the best Host Billing Software? <br /> Choose the one that is best suited for your needs...";
			$seo_host_billing_software_title = "Host Billing Software - Automatic Billing and Hosting Account Creation";
			$seo_host_billing_software_keywords = "billing system, billing software, hosting software, hosting automation, automated billing";
			$seo_host_billing_software_description = "Host billing software provides the web hosting companies with ability to create an order system to manage multiple host websites, managed from single area.";
			
		// Keywords: Buy Virtuozzo 
			$seo_buy_virtuozzo_main = "Choose the right virtualization system. <br /> Buy a Virtuozzo license and make things really simple...";
			$seo_buy_virtuozzo_title = "Buy Virtuozzo - Purchase License from Parallels Authorized Reseller";
			$seo_buy_virtuozzo_keywords = "buy virtuozzo, purchase virtuozzo, parallels partner, virtuozzo license, cheap virtuozzo";
			$seo_buy_virtuozzo_description = "Purchase your Virtuozzo license at unique low pricing, negotiated discounts and volume pricing are available as we are a Parallels Authorized Reseller.";
			
		// Keywords: InterWorx
			$seo_interworx_main = "Mission critical applications rely on InterWorx! <br /> InterWorx makes high availability affordable...";
			$seo_interworx_title = "InterWorx - Linux Hosting Control Panel for Dedicated Server and VPS";
			$seo_interworx_keywords = "interworx, control panel, hosting cluster, load balancer, hosting control panel";
			$seo_interworx_description = "InterWorx allows you to build a load balanced cluster of Linux servers which is expanding your web hosting options beyond what the competition can offer.";
			
		// Keywords: cPanel Reseller
			$seo_cpanel_reseller_main = "Choose your perfect cPanel Reseller… <br /> Stand out from the rest of the web hosting crowd!";
			$seo_cpanel_reseller_title = "cPanel Reseller - Buy Instant VPS or Dedicated Server cPanel License";
			$seo_cpanel_reseller_keywords = "cpanel reseller, cpanel distributor, cpanel license, buy cpanel, external cpanel licence";
			$seo_cpanel_reseller_description = "Purchase cPanel license from official cPanel licenses distributor with many years of experience. cPanel license reseller with instant license activation.";
			
		// Keywords: Get cPanel
			$seo_get_cpanel_main = "Choosing the right provider to get cPanel from...<br /> Make the right choice when selecting your partner!";
			$seo_get_cpanel_title = "Get cPanel - Purchase cPanel License from Distributor and Get Started";
			$seo_get_cpanel_keywords = "cpanel, purchase cpanel, get cpanel, buy cpanel, cpanel license, cpanel price";
			$seo_get_cpanel_description = "Purchase cPanel is a great choice to keep servers secure, provision customers, transfer accounts from server to server, deploy applications, and much more.";
			
		// Keywords: LiteSpeed Server
			$seo_litespeed_server_main = "Replace YOUR web server with a LiteSpeed Server! <br /> Bolster performance and free up RESOURCES...";
			$seo_litespeed_server_title = "LiteSpeed Server - High-performance and high-scalability Web Server";
			$seo_litespeed_server_keywords = "litespeed server, apache, web server, fast web server, nginix";
			$seo_litespeed_server_description = "LiteSpeed web server has superior performance, completely Apache interchangeable and can fix a major bottleneck in your existing web delivery platform.";
			
		// Keywords: KernelCare
			$seo_kernelcare_server_main = "KernelCare provides live Linux kernel patching without the need for a reboot. ";
			$seo_kernelcare_server_title = "No performance impact live Linux kernel patching without the need for a reboot.";
			$seo_kernelcare_server_keywords = "kernelcare, kernel patching, linux kernel";
			$seo_kernelcare_server_description = "KernelCare is automated so your kernel remains up-to-date within hours of a patch release.";
			
		// Keywords: Ubersmith
			$seo_ubersmith_main = "Are you ready for the real big leagues?<br /> Ubersmith can automate anything, even your doors...";
			$seo_ubersmith_title = "Ubersmith - Datacenter Management and Enterprise-level Billing System";
			$seo_ubersmith_keywords = "ubersmith, billing system, datacenter software, support system, server automation";
			$seo_ubersmith_description = "Ubersmith delivers powerful device management, monitoring and automation tools integrated with a fully featured client relationship and support manager.";
			
		// Keywords: Centova Cast
			$seo_centova_cast_main = "Centova Cast makes audio streaming simple.<br /> Be in FULL CONTROL of your online radio streams!";
			$seo_centova_cast_title = "Centova Cast - Advanced Internet Radio Stream Hosting Control Panel";
			$seo_centova_cast_keywords = "centova cast, autodj, internet radio, radio streaming, radio control panel";
			$seo_centova_cast_description = "Centova Cast has an easy web-based stream configuration, AutoDJ support with powerful playlist scheduler and centralized administration of all servers.";			
	
//*************************************************************************//
// WITHIN THIS SECTION, WE CONTROL WHERE THE LINKS GO TO BE ABLE TO CONTROL THE
// MODULES, AND GUIDES. 	


	// UBERSMITH DOWNLOAD CONTROL
		$api_module_ubersmith = "http://www.licensecube.com/support/modules/ubersmith/" . _("LicenseCube-Ubersmith-v1.2.zip");
		$api_module_ubersmith_text = _("Download our Ubersmith integration modules");
		$api_module_ubersmith_guide = _("#");
		$api_module_ubersmith_guide_text = _("Download our Installation Guide");
		$api_module_ubersmith_guide_text_size = _("(.pdf, 2.3MB)");
		
	// WHMCS DOWNLOAD CONTROL
		$api_module_whmcs = "http://www.licensecube.com/support/modules/whmcs/" . _("LicenseCube-WHMCS-v1.3.zip");
		$api_module_whmcs_text = _("Download our WHMCS integration modules");
		$api_module_whmcs_guide = _("#");
		$api_module_whmcs_guide_text = _("Download our WHMCS Guide");
		$api_module_whmcs_guide_text_size = _("(.pdf, 2.3MB)");
		
	// CLIENTEXEC DOWNLOAD CONTROL
		$api_module_clientexec = _("#");
		$api_module_clientexec_text = _("Download our ClientExec integration modules");
		$api_module_clientexec_guide = _("#");
		$api_module_clientexec_guide_text = _("Download our WHMCS Guide");
		$api_module_clientexec_guide_text_size = _("(.pdf, 2.3MB)");
		
	// BLESTA DOWNLOAD CONTROL 
		$api_module_blesta = _("#");
		$api_module_blesta_text = _("Download our ClientExec integration modules");
		$api_module_blesta_guide = _("#");
		$api_module_blesta_guide_text = _("Download our WHMCS Guide");
		$api_module_blesta_guide_text_size = _("(.pdf, 2.3MB)");
		
	// HOSTBILL DOWNLOAD CONTROL
		$api_module_hostbill = _("#");
		$api_module_hostbill_text = _("Download our ClientExec integration modules");
		$api_module_hostbill_guide = _("#");	
		$api_module_hostbill_guide_text = _("Download our HostBill Guide");
		$api_module_hostbill_guide_text_size = _("(.pdf, 2.3MB)");
		
	// GENERAL API DOWNLOAD CONTROL
		$api_module_general = _("#");
		$api_module_general_text = _("Download our API Guide");
		$api_module_general_size = _(" ");	
		
//*************************************************************************//  
// IN THIS SECTION WE HAVE THE DISCOUNTED PROMOTIONAL LANDING PAGES. EACH ONE
// IS LOCATED IN A FORMAT, SO PLEASE STICK WITH THE FORMAT WHEN ADDING / REMOVING

	// PLESK LANDING PAGE
	
		$plesk_landing_page_coupon = _("W2SPLB15"); // COUPON THAT IS LOADED INTO THE CHECKOUT
	
		$plesk_landing_page_title = _("Cheap Plesk 10 Special Limited Time Offer $9.95/mo.");
		$plesk_landing_page_keywords = _("plesk, plesk 10, plesk panel, plesk license, discounted plesk, plesk promotion, cheap plesk");
		$plesk_landing_page_description = _("Get cheap Plesk 10 license with special promo price of $9.95/mo, with instant Plesk license activaton and 24/7 support.");
		
		$plesk_landing_page_alt_one = _("");
		$plesk_landing_page_alt_two = _("");
		$plesk_landing_page_video = _("http://www.youtube.com/v/Ehh6gCnTHLk?version=3");
		$plesk_landing_page_video_alt = _("Plesk License - Learn more about Plesk");
		$plesk_langing_page_tag_line = _("Try Parallels Plesk License on for size...");
		
		$plesk_landing_page_check_1 = _("Easy Website Creation");
		$plesk_landing_page_check_2 = _("Friendly user interface");
		$plesk_landing_page_check_3 = _("Multi language support");
		$plesk_landing_page_check_4 = _("Add/Remove based upon business");
		$plesk_landing_page_check_5 = _("Google Tools Integration");
		
	
	// CPANEL LANDING PAGE
	
		$cpanel_landing_page_coupon = _(""); // COUPON THAT IS LOADED INTO THE CHECKOUT
	
		$cpanel_landing_page_title = _("cPanel Special Limited Time offer $29.95 on LicenseCube");
		$cpanel_landing_page_keywords = _("cpanel, cpanel license, cheap cpanel, cpanel promotion, discounted cpanel license");
		$cpanel_landing_page_description = _("Special time limited discounted offer for cPanel VPS and dedicated server licenses");
		
		$cpanel_landing_page_alt_one = _("");
		$cpanel_landing_page_alt_two = _("");
		$cpanel_landing_page_video = _("http://www.youtube.com/v/KOSAEkO2y5s?version=3");
		$cpanel_landing_page_video_alt = _("See cPanel/WHM In Action...");
		$cpanel_langing_page_tag_line = _("See what cPanel/WHM License can do for you...");
		
		$cpanel_landing_page_check_1 = _("Mobile Accessibility");
		$cpanel_landing_page_check_2 = _("Web Developer Friendly");
		$cpanel_landing_page_check_3 = _("Powerful Reseller Tools");
		$cpanel_landing_page_check_4 = _("Optimized to use less resources");
		$cpanel_landing_page_check_5 = _("One-Click version upgrades");	
		
	// WHMCS LANDING PAGE
	
		$whmcs_landing_page_coupon = _("W2SWHM19"); // COUPON THAT IS LOADED INTO THE CHECKOUT
	
		$whmcs_landing_page_title = _("WHMCS Special Limited Time offer $11.95 on LicenseCube");
		$whmcs_landing_page_keywords = _("whmcs, whmcs license, cheap whmcs, whmcs reseller, whmcs promotion, whmcs coupon code");
		$whmcs_landing_page_description = _("Special limited time offer for cheap WHMCS license from LicenseCube");
		
		$whmcs_landing_page_alt_one = _("");
		$whmcs_landing_page_alt_two = _("");
		$whmcs_landing_page_video = _("http://www.youtube.com/v/Ao3chB9ZWWU?version=3");
		$whmcs_landing_page_video_alt = _("Make things simpler with WHMCS...");
		$whmcs_langing_page_tag_line = _("Let's try a WHMCS License on for size...");
		
		$whmcs_landing_page_check_1 = _("Developer Friendly");
		$whmcs_landing_page_check_2 = _("Fully Featured API");
		$whmcs_landing_page_check_3 = _("Automated Provisioning");
		$whmcs_landing_page_check_4 = _("Integrated Support Center");
		$whmcs_landing_page_check_5 = _("Extensive Module Library");		
	
	
//*************************************************************************//	
// WITHIN THIS SECTION WE MANAGE THE ALT TAGS FOR THE INDEX PAGES FOR ALL THE SECTIONS
// THAT ARE LISTED WITHIN THIS LIST: /contorl-panels/ , /billing-systems/ , /additional-licenses/	


	// CONTROL PANELS SECTION (INDEX PAGE ONLY)
	
		// VPS SECTION

			$cpanel_vps_alt	= "Get started today with a VPS cPanel license";
			$plesk_vps_alt = _("Obtain your Plesk VPS license, and start hosting");
			$directadmin_vps_alt = _("Choose a DirectAdmin license as your hosting partner");
			$softaculous_vps_alt = _("Purchase a softaculous license for your customers");
			$fantastico_vps_alt = _("Get your fantastico license for your vps today");
			$installatron_vps_alt = _("Get your multi-versatile Installatron license today!");
			$interworx_vps_alt = _("Enable high availability on your hosting platform...");
			$isp_manager_vps_alt = _("Start controlling your customers with ISPmanager...");
			
		// DEDICATED SECTION 	

			$cpanel_dedicated_alt = _("Get your Dedicated cPanel License, and start hosting!");
			$plesk_dedicated_alt = _("Choose a Dedicated Plesk License, and enjoy easy a user-freiendly control panel");
			$directadmin_dedicated_alt = _("Choose a DirectAdmin Dedicated License, and save big");
			$softaculous_dedicated_alt = _("Select from 200+ Scripts that you can install with the softaculous license");
			$fantastico_dedicated_alt = _("Choose the premier auto-installer when you get a Fantastico license");
			$enkompass_dedicated_alt = _("Choose a Enkompass license for your Windows hosting needs, and you'll be impressed");
			$virtuozzo_dedicated_alt = _("Start selling VPS services with a Virtuozzo license");
			$installatron_dedicated_alt = _("Installatron is the most sophisticated auto-installer on the market currently.");
			$interworx_dedicated_alt = _("An InterWorx license helps you ensure high availability with your servers");
			$solusvm_dedicated_alt = _("Start providing SolusVM virtual private servers on a budget...");
			$isp_manager_dedicated_alt = _("Fine-tune your hosting environment with a ISPmanager license");
		
	// BILLING SYSTEMS (INDEX PAGE ONLY)
	
			// GENERAL LICENSING 
			
				$whmcs_license_alt = _("Fully automate your hosting, support and billing with a WHMCS license");
				$pleskbilling_license_alt = _("Streamline your business with a Plesk Billing license, and automate your online business");
				$whmautopilot_license_alt = _("Grow your business with a WHMAutoPilot license");
				$blesta_license_alt = _("Obtain a Blesta license, and automate your daily tasks");
				$clientexec_license_alt = _("Take your hosting to a  new level with a ClientExec license");
			
	// ADDITIONAL LICENSES (INDEX PAGE ONLY)
	
			// NON PLATFORM DEPENDANT LICENSES 
			
				$sitebuilder_license_alt = _("Start building eligant websites with a Parallels Sitebuilder");
				$whmxtra_license_alt = _("Simplify your administrive down to one-click tasks with a WHMXtra license");
				$miva_license_alt = _("Build a solid e-commerce platform using the Miva Merchant license");
			
			
			// VPS SECTION
			
				$rvskins_vps_alt = _("Customize your cPanel VPS with a new RVSkins License");
				$rvsitebuilder_vps_alt = _("Allow your customers to grow with you with an RVSiteBuilder VPS license");
				$whmsonic_vps_alt = _("Start selling ShoutCast streams with a whmsonic license for your vps");
				
				
			// DEDICATED SECTION		
				$rvskins_dedicated_alt = _("Stylize your control panel with a new RVSkins license");
				$rvsitebuilder_dedicated_alt = _("Build sites easily with an RVSiteBuilder Dedicated License");
				$whmsonic_dedicated_alt = _("Start offering ShoutCast streaming reseller packages with a WHMSonic license");
				$ksplice_dedicated_alt = _("Rebooting is history. Never have to reboot again with a Ksplice license");
				$cloudlinux_dedicated_alt = _("Increase your revenue, lower support costs, all with a CloudLinux license!");
	
	
//*************************************************************************//
// WITHIN THIS SECTION WE MANAGE THE CONFIGURATIONS FOR ALL THE PRODUCTS WITHIN
// THE SITE. PLEASE ADD / REMOVE / EDIT BASED UPON THE LICENSES THAT ARE BEING ORDERED


	// BILLING SYSTEM SECTION

		$billing_main_title = _("Billing System Licenses - Choose Your Billing System");
		$billing_main_meta_description = _("Comparison of different billing systems. Full explanation for each billing system to help customer to choose the right one.");
		$billing_main_keywords = _("billing system, billing system license, whmcs, plesk billing, whmautopilot, blesta, clientexec");
	
		$billing_whmcs_title = _("WHMCS License - Client Management and Billing System (WHMCS)");
		$billing_whmcs_meta_description = _("WHMCS is an automated client management, billing and support system with support for many control panels, domain registrars and payment gateways.");
		$billing_whmcs_keywords = _("whmcs, whmcs license, client management system, billing system, support system, automated billing");
	
		$billing_pbilling_title = _("Plesk Billing License - Parallels Plesk Billing Software");
		$billing_pbilling_meta_description = _("Plesk Billing is a system for advanced automated web-based recurring billing. Parallels Plesk Billing integrates easily with Plesk Control Panel.");
		$billing_pbilling_keywords = _("plesk billing, plesk billing license, plesk control panel, parallels automated billing, web hosting billing, isp billing, online billing");
	
		$billing_whmauto_title = _("WHMAutopilot License - Complete Web Host Management (WHMAutoPilot)");
		$billing_whmauto_meta_description = _("WHMAutopilot is a system to manage orders and automate provisioning. WHMAutopilot can manage multiple host websites and has integrated support manager.");
		$billing_whmauto_keywords = _("whmautopilot, whmautopilot license, automated provisioning, automated account creation, automated billing, billing platform");
		
		$billing_blesta_title = _("Blesta License - Client Management, Billing and Support (Blesta)");
		$billing_blesta_meta_description = _("Blesta is a modular software for client management, billing, and support. Blesta can be used by web-hosting companies, web designers and developers.");
		$billing_blesta_keywords = _("blesta, blesta license, web hosting automation, client management software, billing system, support system");
		
		$billing_clientexec_title = _("ClientExec License - Web Hosting Billing and Support (ClientExec)");
		$billing_clientexec_meta_description = _("Clientexec is a flexible web hosting billing solution with a lot of plugins and features. Clientexec can be integrated with almost any control panel.");
		$billing_clientexec_keywords = _("clientexec, clientexec license, hosting billing system, customizable billing system, reseller billing system, hosting client management");
		
		$billing_hostbill_title = _("HostBill License - Automated Billing, Provisioning and Support (HostBill)");
		$billing_hostbill_meta_description = _("HostBill helps you to create, suspend, unsuspend and terminate accounts automatically. HostBill support more than 30 Hosting Control Panels like cPanel and Plesk.");
		$billing_hostbill_keywords = _("HostBill, automated billing, hosting billing system, hosting support system, automated account provisioning");
		
		$billing_billmanager_title = _("BILLmanager License - Billing System for Full Automation of Hosting Activities (BILLmanager)");
		$billing_billmanager_meta_description = _("BILLmanager automates the maximum number of hosting functions, such as customers signup, ordering hosting services, invoicing, and contracts preparation.");
		$billing_billmanager_keywords = _("billmanager, automated provisioning, hosting automation, hosting billing, hosting ordering system");
		
		$billing_ubersmith_title = _("Ubersmith License  | Enterprise Data Center Management and Billing Solution (Ubersmith)");
		$billing_ubersmith_meta_description = _("Ubersmith delivers powerful device management, monitoring and automation tools integrated with a fully featured client relationship and support manager.");
		$billing_ubersmith_keywords = _("ubersmith, data center management software, billing system, hosting support system, hosting billing software");		
			
	// CONTROL PANELS SECTION
	
		$controlp_main_title = _("Control Panel License - Virtual and Dedicated Server Licenses");
		$controlp_main_meta_description = _("A wide selection of licenses for industry leading control panels for virtual and dedicated servers like cPanel, Plesk, Directadmin, Virtuozzo.");
		$controlp_main_keywords = _("control panel, control panel license, cPanel license, Plesk license, Directadmin license, VPS licenses, dedicated licenses");
		
		$controlp_cpanel_title = _("cPanel License - Automated Hosting Platform (cPanel)");
		$controlp_cpanel_meta_description = _("cPanel is the leading control panel to turn your servers into automated hosting platform. With cPanel you can perform daily tasks quickly, and easily.");
		$controlp_cpanel_keywords = _("cpanel license, cpanel, whm, leading control panel, reseller tools, automated hosting, hosting control panel");
		
		$controlp_plesk_title = _("Plesk License - Complete Server Automation (Plesk)");
		$controlp_plesk_meta_description = _("Plesk is easy to use and profitable control panel. Plesk helps you for easy website creation with friendly user interface and multi language support.");
		$controlp_plesk_keywords = _("plesk license, plesk, parallels plesk, hosting control panel, multi language control panel, server automation");
		
		$controlp_directa_title = _("DirectAdmin License - Affordable Control Panel (DirectAdmin)");
		$controlp_directa_meta_description = _("DirectAdmin is the easiest to use hosting control panel. DirectAdmin is one of the most powerful, extremely stable and has low resource requirements.");
		$controlp_directa_keywords = _("directadmin license, directadmin, cheap control panel, low resource control panel, easy control panel, fast control panel");
		
		$controlp_softac_title = _("Softaculous License - Auto Script Installer (Softaculous)");
		$controlp_softac_meta_description = _("Softaculous is an automatic script installer with more than 200+ scripts which supports multiple control panels including DirectAdmin and cPanel/WHM.");
		$controlp_softac_keywords = _("softaculous license, softaculous, automatic script installer, script installation, web hosting scripts, wordpress installer, joomla installer");
		
		$controlp_fantas_title = _("Fantastico License - Autoinstaller for cPanel Servers (Fantastico)");
		$controlp_fantas_meta_description = _("Fantastico is the market leader in scripts auto-installers for cPanel/WHM servers. Fantastico integrates with cPanel and offer more than 50 scripts.");
		$controlp_fantas_keywords = _("fantastico license, fantastico, fantastico de luxe, scripts auto-installer, cpanel script installator, cpanel addons, open-source scripts");
		
		$controlp_enkomp_title = _("Enkompass License - Windows Server Control Panel (Enkompass)");
		$controlp_enkomp_meta_description = _("Enkompass is cost-effective, stable, and scalable control panel With central management of multiple servers across an Active Directory domain.");
		$controlp_enkomp_keywords = _("enkompass license, enkompass, windows control panel, active directory domain, windows server, microsoft iis7, cPanel/WHM for windows");
		
		$controlp_virtuo_title = _("Virtuozzo License - OS Virtualization Solution (Virtuozzo)");
		$controlp_virtuo_meta_description = _("Parallels Virtuozzo is an easy to use operating system virtualization which lets you maximize the investment in your existing server hardware.");
		$controlp_virtuo_keywords = _("virtuozzo license, virtuozzo, parallels virtuozzo containers, virtuzlization, OS virtualization, VPS technology");
		
		$controlp_instal_title = _("Installatron License - Universal Hosting Autoinstaller (Installatron)");
		$controlp_instal_meta_description = _("Installatron is a premiere auto-install and auto-upgrade plugin for web-hosting control panels like cPanel/WHM, Enkompass, DirectAdmin, InterWorx, Kloxo, Plesk.");
		$controlp_instal_keywords = _("installatron, installatron license, auto-installer, script installer, hosting panel plugin, application updates");
		
		$controlp_interw_title = _("InterWorx License - Linux Based Hosting Control Panel (InterWorx)");
		$controlp_interw_meta_description = _("InterWorx is a linux based hosting control panel suitable for dedicated server and VPS. InterWorx allows you to build a load balanced cluster of servers.");
		$controlp_interw_keywords = _("interworx, interworx license, linux control panel, hosting control panel, high availability, clustering");
				
		$controlp_solusvm_title = _("SolusVM License - Powerful GUI Based VPS Management System (SolusVM)");
		$controlp_solusvm_meta_description = _("SolusVM is a VPS management system with OpenVZ, KVM, Xen PV and HVM support. With SolusVM you can install virtually any OS including Linux and Windows.");
		$controlp_solusvm_keywords = _("solusvm, solusvm license, VPS management system, VPS control panel, openvz, xen, kvm");
		
		$controlp_ispmanager_title = _("ISPmanager License - Server Administration Control Panel (ISPmanager)");
		$controlp_ispmanager_meta_description = _("ISPmanager is one of the leading web 	hosting server control panels. ISPmanager allows you to manage your server with friendly multi-language web interface.");
		$controlp_ispmanager_keywords = _("ispmanager license, ispmanager, control panel API, automated web hosting, hosting control panel, hosting automation");
		
		$controlp_cloudlinux_title = _("CloudLinux License - Get Superior Server Stability (CloudLinux)");
		$controlp_cloudlinux_meta_description = _("CloudLinux adds amazing server stability improvements and makes every server more efficient. CloudLinux is helping you to get the most out of each server.");
		$controlp_cloudlinux_keywords = _("cloudlinux, cloud OS, server security, CentOS alternative, linux OS, cPanel hosting, cPanel OS");
		
		$controlp_hostingsuite_title = _("");
		$controlp_hostingsuite_meta_description = _("");
		$controlp_hostingsuite_keywords = _("");
				
	// ADDITIONAL LICENSES SECTION
	
		$additional_main_title = _("Additional Hosting Control Panel and Billing Software Licenses");
		$additional_main_meta_description = _("LicenseCube offers the largest selection of additional licenses like Plesk Site Builder, RVSkin, RVSiteBuilder, WHMXtra, Miva Merchant and WHMSonic.");
		$additional_main_keywords = _("plesk site builder, rvskin, rvsitebuilder, whmxtra, miva merchant, whmsonic");
		
		$additional_sbuilder_title = _("Parallels Sitebuilder License - Create and Manage Websites Online");
		$additional_sbuilder_meta_description = _("Parallels SiteBuilder is easy, scalable and powerful WYSIWYG web application with Blog, Image Gallery, Guestbook, eShop, SitePal and Forum modules.");
		$additional_sbuilder_keywords = _("parallels sitebuilder license, sitebuilder, WYSIWYG sitebuilder, WYSIWYG editor, multi-language sitebuilder, blog software, forum software");
		
		$additional_rvskins_title = _("RVSkins License - Advanced Skin Management for cPanel (RVSkin)");
		$additional_rvskins_meta_description = _("RVSkins is a multi-theme skin management software that provides 25 additional languages for cPanel and WHMCS and AWBS passwordless access.");
		$additional_rvskins_keywords = _("rvskin license, rvskin, cPanel skin, cPanel WHMCS integration, cPanel AWBS integration, cPanel languages");
		
		$additional_rvbuilder_title = _("RVSiteBuilder License - Website Builder Application (RVSiteBuilder)");
		$additional_rvbuilder_meta_description = _("RVSiteBuilder is affordable website building application with more than 851 templates, multi-lingual support and fully integrated to cPanel.");
		$additional_rvbuilder_keywords = _("rvsitebuilder license, rvsitebuilder, website builder, cPanel site builder, multi-lingual cPanel, WYSIWYG editor, cPanel integration");
		
		$additional_whmxtra_title = _("WHMXtra License - Add More Functionality To Your cPanel (WHMXtra) ");
		$additional_whmxtra_meta_description = _("WHMXtra is auto-installer for administrators which saves time and adds more functionality to your cPanel with a single command installations.");
		$additional_whmxtra_keywords = _("whmxtra license, whmxtra, auto-installer, cPanel administration tools, cPanel easy installs, FFMPEG installation, cPanel one-click installs");
		
		$additional_mivamerch_title = _("Miva Merchant License - E-commerce Shopping Cart (Miva Merchant) ");
		$additional_mivamerch_meta_description = _("Miva Merchant is flexible and powerful e-commerce shopping cart which offers design flexibility, real-time shipping rates and enterprise security.");
		$additional_mivamerch_keywords = _("miva merchant license, miva merchant, e-commerce, shopping cart, order management, shipping rates, enterprise security");
		
		$additional_whmsonic_title = _("WHMSonic License - cPanel Shoutcast Administration (WHMSonic)");
		$additional_whmsonic_meta_description = _("WHMSonic is a cPanel/WHM ShoutCast plugin with real-time bandwidth control and turns your server in ShoutCast streaming media and radio reseller.");
		$additional_whmsonic_keywords = _("whmsonic license, whmsonic, shoutcast plugin, streaming media, cPanel shoutcast, radio reseller, streaming software");
		
		$additional_ksplice_title = _("Ksplice Automated Kernel Updates - Automated Server Security (Ksplice)");
		$additional_ksplice_meta_description = _("Ksplice applies all the latest Linux kernel security updates without the need for a server reboot. Secure your server and avoid downtime with Ksplice.");
		$additional_ksplice_keywords = _("ksplice, security updates, kernel updates, server security, linux updates, server updates, automated updates");
		
		$additional_litespeed_title = _("LiteSpeed License - High-performance and High-scalability Apache Alternative (LiteSpeed)");
		$additional_litespeed_meta_description = _("LiteSpeed Web Server has superior performance in terms of speed and scalability. It is more than 6 times faster than Apache and good web server alternative.");
		$additional_litespeed_keywords = _("litespeed, apache alternative, apache alternatives, fast web server, secure web server");
		
		$additional_kernelcare_title = _("KernelCare - Break the reboot cycle. Stop the ritual. Use KernelCare.");
		$additional_kernelcare_meta_description = _("Every month or so, sysadmins go through an ancient ritual of rebooting servers. The ritual is usually conducted at the darkest of night, when everyone is asleep. Careful preparation has to be done in advance. Emails concerning the downtime has to be sent. Time scheduled. Everything has to be ready. And if the ritual goes wrong, special 'fsck' dance has to be performed.");
		$additional_kernelcare_keywords = _("KernelCare, system admin, rebooting");

		$additional_trendy_sitebuilder_title = _("Trendy Site Builder License - Create a Stunning Flash Websites Insanely Easy (Trendy SiteBuilder)");
		$additional_trendy_sitebuilder_meta_description = _("With Trendy Flash Website design software you need a zero knowledge of programming to create stunning flash websites with simple point-n-click interface.");
		$additional_trendy_sitebuilder_keywords = _("trendy flash builder, flash site builder, hosting website builder, online site builder");
		
		$additional_zopim_live_chat_title = _("Zopim Live Chat License | Online Chat Software Trusted and Loved by Companies (Zopim Live Chat)");
		$additional_zopim_live_chat_meta_description = _("Zopim Live Chat was developed based on input from thousands of online users over years. There is a big chance Zopim already built what you have in mind.");
		$additional_zopim_live_chat_keywords = _("zopim , zopim live chat, live chat software, online live chat system, hosting live chat");
		
	// OTHER PAGES ON THE SITE
	
		$main_index_page = _("Buy Cheap cPanel, Plesk, WHMCS License - Instant Server Licenses");
		$main_index_page_meta_description = _("Buy your cPanel, Pesk, WHMCS license with instant activation after completion of your order. Cheap server license reseller with free software installation.");
		$main_index_page_keywords = _("cpanel license, plesk license, whmcs license, license reseller, cheap license, instant license");
		
		$company_index_page = _("About us - LicenseCube");
		$company_index_page_meta_description = _("LicenseCube is selling cheap and instant licenses for various control panels and billing systems like cPanel, Plesk, WHMCS and Clientexec.");
		$company_index_page_keywords = _("licenses, instant licenses, instant cpanel, bulk discount licenses, instant license activation, free installation services");
		
		$company_privacy_page = _("Privacy Policy - LicenseCube");
		$company_privacy_meta_description = _("LicenseCube privacy policy. LicenseCube takes your privacy very seriously and it is fully committed to safeguard your privacy online.");
		$company_privacy_page_keywords = _("privacy, privacy policy, online privacy, online data, personal information, personal data, secure data");
		
		$company_terms_page = _("Terms of Service - LicenseCube");
		$company_terms_meta_description = _("Terms of service is a legal agreement between LicenseCube and customers for the use of services re-sold through LicenseCube web site.");
		$company_terms_page_keywords = _("terms of service, TOS, terms, license terms, license agreement, service agreement, payment agreement, legal");
		
		$company_sitemap_page = _("Sitemap - LicenseCube");
		$company_sitemap_meta_description = _("Sitemap page contains all the sections and links of the website and you can find everything on one page. If you do not find it please contact us.");
		$company_sitemap_keywords = _("sitemap, site map, fast links, vps licenses, dedicated server licenses, billing systems, additional licenses, site information");
		
		$contact_index_page = _("Contact Us - LicenseCube");
		$contact_index_page_meta_description = _("If you have any questions or concerns you can contact our LicenseCube instant license team via phone, email or live chat. We are available 24/7.");
		$contact_index_page_keywords = _("license contacts, license support, license questions, license email, license phone, license 24/7, contact form");
		
		$support_index_page = _("License Support Center - License Knowledgebase - LicenseCube");
		$support_index_page_meta_description = _("Knowledgebase with the most common license questions answered. Click on question and you will view the answer or contact our support department.");
		$support_index_page_keywords = _("support center, support department, license questions, license help, license support, license knowledgebase, license assistance");
		
		$company_blog_page ="LicenseCube Blog - Get the latest licensing news on hosting licenses";
		$company_blog_meta_description = _("Learn about licenses from the latest releases, to newest licenses that are offered. Even subscribe our RSS feed and stay updated with all the latest news.");
		$company_blog_page_keywords = _("cPanel, Plesk, DirectAdmin, WHMCS, ClientExec, Fantastico, Softaculous");
		
		$company_api_page = _("API Billing Systems License Modules - LicenseCube");
		$company_api_page_meta_description = _("Web hosting providers, can make changes or obtaining a new licenses via their billing system. LicenseCube API supports WHMCS, ClientExec, Blesta, Ubersmith.");
		$company_api_page_keywords = _("api, api integration, license api, whmcs api, ubersmith api, clientexec api, blesta api, hostbill api, billing system module");
		
		$company_top10_page = _("Top 10 Reasons to choose LicenseCube as your license reseller");
		$company_top10_page_meta_description = _("Top reasons to choose LicenseCube as a license provider for your web hosting business. Cheapest licenses combined with API and WHMCS, ClientExec modules.");
		$company_top10_page_keywords = _("license provider, license reseller, license API, 24/7 support, instant licenses, bulk licenses,WHMCS license module, ClentExec license module");
		
		$company_error_404_page = "Page Not Found - LicenseCube";
		$company_error_404_page_meta_description = "The error 404 message means that you have typed an incorrect url address in the web browser or the page has been deleted.";
		$company_error_404_page_keywords = "error 404, wrong link, nonexistent page, broken link, url not found, resource not found";

//*************************************************************************//    
// BELOW WE HAVE INFORMATION ABOUT GENERAL SITE MESSAGING THAT IS TO BE INCLUDED
// ON DIFFRENT PARTS OF THE SITE. THIS IS DONE TO AID IN SALES AND MAKE THE SITE<br />
// FEEL MORE PERSONABLE. 
    
    	$vps_message = _("Let's CUSTOMIZE your HOSTING PLATFORM together.<br /> It's Important that your first fit be your best fit.");
    	$vps_cpanel_message = _("World's #1 MOST POPULAR control panel!<br /> It simply, can't get better then this.");
        $vps_plesk_message = _("Welcome to the MOST OPTIMIZED control panel. <br /> It simply blows away the competition.");
        $vps_directa_message = _("Hosting Industry's BEST VALUE control panel.<br /> It's impossible to find any that have so many features.");
        $vps_softacl_message = _("Install Over 200+ One-Click Applications. <br /> Every application that you'll ever use is contained within.");
        $vps_fantastico_message = _("cPanel/WHM's MOST USED auto-installer. <br /> Let's install something together with one-click.");
		$vps_installatron_message = _("Installatron the MOST VERSATILE auto-installer. <br /> Install any application, on any control panel.");
		$vps_interwrox_message = _("High Availability combined with simplicity. <br />InterWorx the glue that ensures constant availability.");
		$vps_ispmanager_message = _("ISPmanager. Easy management, with easy tools.<br /> Quickly take your online business to the next level...");
        
		$dedicated_message = _("Turbo Charge your Dedicated Server.<br /> Just tell us what features you need.");
    	$dedicated_virtuozzo_message = _("Virtuozzo. Changing the way you view your server. <br /> Increase your revenue by offering VPS services. ");
      	$dedicated_enkompass = _("Enkompass. Windows Hosting made easy.<br /> Expand your hosting portfolio to include Windows!");
        $dedicated_solusvm = _("Start offering VPS Services, on a budget. <br /> SolusVM can take your business to new heights!");
		$dedicated_cloudlinux_message = _("Build your business with CloudLinux. <br /> Expand your business with confidence and stability.");
		
		$billing_message = _("There are many leaders in this market niche.<br /> Which do you feel most comfortable with?");
        $billing_whmcs_message = _("Welcome to the BILLING LEADER. <br /> It's simply the most versatile billing system. ");
        $billing_pbill_message = _("I am the MOST INTEGRATED Billing System. <br /> The billing system that can work in any environment.");
		$billing_whmauto_message = _("The Industry's BEST VALUE Billing System. <br /> It's the most cost-effective billing system out there.");
		$billing_clien_message = _("The #1 MOST USED RESELLER Billing System. <br /> It's the most modular billing system currently avaliable.");
		$billing_blesta_message = _("Blesta. It's THE HIDDEN GEM of the billing systems. <br /> Give Blesta a go, and you'll never look back.");
		$billing_hostbill_message = _("Need a RELIABLE Billing System? Check out HostBill! <br /> Then relax and let HostBill do all the heavy lifting.");
		$billing_billmanager_message = _("The MOST ANTICIPATED Billing System. <br /> BILLmanager makes doing online billing affordable.");
		$billing_ubersmith_message = _("Get SERIOUS with your billing system. <br /> Ubersmith takes the guesswork out of billing.");
        
		$additional_message = _("Design it. Build it. Adjust it. Let's improve together. <br /> Take your hosting offer to the next level with these... ");
		$additional_sitebuilder = _("Build STUNNING WEBSITES, easily. <br /> Attract more customers with a sleek 1000+ templates.");
		$additional_rvskins = _("Customize YOUR HOSTING with a new themes. <br /> Stylize your control panel with your own look!");
		$additional_rvsitebuilder = _("Easy. Quick. Inexpensive. 851+ Web Templates. <br /> It's a matter of a couple of clicks, and you've got a site.");
		$additional_whmxtra = _("Function outside of command line. <br /> WHMXtra gives your cPanel/WHM the extra kick!");
        $additional_miva_message = _("Take your e-commerce store to new heights. <br /> MIVA does e-commerce the right way, since 1997!");
		$additional_whmsonic = _("Start your own AUDIO STREAMING services. <br /> Broadcast your customers audio content to the internet.");
		$additional_ksplice = _("Automated SECURITY UPDATES are now reality.<br /> Apply all your server updates, without a single reboot!");
		$additional_litespeed = _("Improvement starts with your webserver. <br /> LiteSpeed will make your website load in a flash!");
		$additional_kernelcare = _("KernelCare provides live Linux kernel patching. <br /> It is automated so your kernel remains up-to-date.");
		$additional_trendy_sitebuilder = _("Build REMARKABLE websites in just minutes! <br /> Trendy SiteBuilder will put your website on the map!");
		$additional_zopim_live_chat = _("Refocus your marketing efforts with Zopim. <br /> Zopim allows you to contour to your visitors needs!");
        
        $support_message = _("Maximizing efficiency, with as few clicks as possible,<br /> that's what we believe.");
    	$company_message = _("Having been in the industry for 10+ Years,<br /> We know all the movers and shakers in town.");
        $company_sitemap = _("A sitemap is a directory of everything on a site.<br /> Its truly the most powerful page on the site.");
        $company_terms = _("When signing up, the T's and C's are important.<br /> Please read them carefully.");
        $company_privacy = _("We are commited to ensuring your Privacy.<br /> Have questions? Please ask.");
    	$contact_message = _("Contacting us is easy and quick. Its as simple as 1-2-3.<br /> GET IN CONTACT TODAY!");
		$company_blog_index = _("Learn about the LATEST LICENSING NEWS here.<br /> When it comes to licensing, this is the place to be.");
		$company_blog_inner_page = _("We greatly appreciate your readership.<br /> Have some feedback for us? Leave a comment!");
		$company_top10_reasons_page = _("Why should you choose a LicenseCube License? <br /> We have 10+ reasons why LicenseCube stands out!");
		$company_error_404_page_message = "Aw sucks! This page is no longer available… <br />However, please feel free to browse our website!";
	
		$order_process = _("Congratulations! You've made a smart decision. <br /> We'll activate your license upon completion of the order!");
		$order_process_confirmation = _("");
		
		$api_message_billing_modules = _("Integration is REALLY EASY. We keep things simple. <br /> Easy integration gets you back to your business faster!");
		
//*************************************************************************//
// CONTROL PANELS - WITHIN THIS SECTION YOU WILL BE ABLE TO MANAGE THE ORDER 
// LINKS AND OTHER FUNCTIONS OF THE MAIN SITE. UPDATE THAT WE"VE REMOVED THE
// SUPPORT FOR THE DEMOS BECAUSE WE FEEL WE MIGHT BE LOSING SALES FROM THIS.


	// CPANEL LICENSE CONFIGURATION
	
		$vps_cpanel_link = _("https://my.licensecube.com/license-process/cpanel_vps");
		$dedi_cpanel_link = _("https://my.licensecube.com/license-process/cpanel_dedicated");
		  //$vps_cpanel_demo = _("http://demo.cpanel.net:2086/login/?user=demo&pass=demo");
			$vps_cpanel_video = _("http://player.vimeo.com/video/16247315?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933");
			$vps_cpanel_video_title = _("Introduction to cPanel &amp; Web Host Manager");
		
	// PLESK LICENSE CONFIGURATION
		
		$vps_plesk_link = _("https://my.licensecube.com/license-process/plesk_vps");
		$dedi_plesk_link = _("https://my.licensecube.com/license-process/plesk_dedicated");
		  //$vps_plesk_demo = _("http://www.parallels.com/products/plesk/demos/");
			$vps_plesk_video = _("http://www.youtube.com/v/hh5jIn_mqT4?version=3");
			$vps_plesk_video_title = _("Introduction to Parallels Plesk 10");
		
	// DIRECTADMIN LICENSE CONFIGURATION	
		
		$vps_direct_link = _("https://my.licensecube.com/license-process/directadmin_vps");
		$dedi_direct_link = _("https://my.licensecube.com/license-process/directadmin_dedicated");
		  //$vps_direct_demo = _("http://www.directadmin.com/demo.html");
			$vps_direct_video = _("http://www.youtube.com/v/ruQV5qiQcZg?version=3");
			$vps_direct_video_title = _("DirectAdmin has everything in its toolkit...");
		
	// SOFTACULOUS LICENSE CONFIGURATION	
		
		$vps_softacl_link = _("https://my.licensecube.com/license-process/softaculous_vps");
		$dedi_softacl_link = _("https://my.licensecube.com/license-process/softaculous_dedicated");
		  //$vps_softacl_demo = _("http://demo.softaculous.com/enduser/index.live.php");
			$vps_softacl_video = _("http://www.youtube.com/v/5NedpPsqZ_w?version=3");
			$vps_softacl_video_title = _("Softaculous - The Auto-Installer that makes things simple.");
		
	// FANTASTICO LICENSE CONFIGURATION	
		
		$vps_fantast_link = _("https://my.licensecube.com/license-process/fantastico_vps");
		$dedi_fantast_link = _("https://my.licensecube.com/license-process/fantastico_dedicated");
		  //$vps_fantast_demo = _("");	
		  	$vps_fantast_video = _("http://www.youtube.com/v/5UXZJTIt4sE?version=3");
			$vps_fantast_video_title = _("Fantastico License - Automate your life!");
			
	// INSTALLATRON LICENSE CONFIGURATION
	
		$cp_vps_installatron_link = _("https://my.licensecube.com/license-process/installatron_dedicated");
		$cp_dedicated_installatron_link = _("https://my.licensecube.com/license-process/installatron_vps");
		  //$cp_installatron_demo = _("http://demo.installatron.com/installatron");
			$cp_installatron_video = _("http://www.youtube.com/v/i1Bj7aeFcIQ?version=3");
			$cp_installatron_video_title = _("Install anything. Quickly, with Installatron!");
		
	// ENKOMPASS LICENSE CONFIGURATION	
		
		$cp_enkompass_link = _("https://my.licensecube.com/license-process/enkompass_dedicated");
		  //$cp_enkompass_demo = _("http://www.cpanel.net/windows/demo.html");
			$cp_enkompass_video = _("http://www.youtube.com/v/kNVceRh6v-g?version=3");
			$cp_enkompass_video_title = _("Enkompass - Increase your revenue stream");
			
	// SOLUSVM LICENSE CONFIGURATION
		
		$cp_solusvm_link = _("https://my.licensecube.com/license-process/solusvm_dedicated");
		  //$cp_solusvm_demo = _("");
			$cp_solusvm_video = _("http://www.youtube.com/v/gpVSY8f8hWc?version=3");
			$cp_solusvm_video_title = _("SolusVM Control Panel In Action...");
			
	// VIRTUOZZO LICENSE CONFIGURATION	
		
		$cp_virtuozzo_link = _("https://my.licensecube.com/license-process/virtuozzo_dedicated");
		  //$cp_virtuozzo_demo = _("");
			$cp_virtuozzo_video = _("http://www.youtube.com/v/0kzjnNv0sCE?version=3");
			$cp_virtuozzo_video_title = _("Parallels Virtuozzo - See It in Action...");
			
	// INTERWORX LICENSE CONFIGURATION
	
		$cp_vps_interworx_link = _("https://my.licensecube.com/license-process/installatron_vps");
		$cp_dedicated_interworx_link = _("https://my.licensecube.com/license-process/installatron_dedicated");
		  //$cp_interworx_demo = _("http://www.interworx.com/demo");
			$cp_interworx_video = _("http://player.vimeo.com/video/13268879?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933");
			$cp_interworx_video_title = _("High Availability Clustering");
			
	// ISPMANAGER LICENSE CONFIGURATION
	
		$cp_vps_ispman_link = _("https://my.licensecube.com/license-process/isp_manager_license");
		$cp_dedicated_ispman_link = _("https://my.licensecube.com/license-process/isp_manager_license");
		  //$cp_ispman_demo = _("http://ispmanager.com/en/software/ispmanager/demo");
			$cp_ispman_video = _("http://www.youtube.com/v/KS6mG9VYnzY?version=3");
			$cp_ispman_video_title = _("Take a sneak peak at ISPmanager in action...");
			
			
//*************************************************************************//    			
// BILLING SYSTEMS - WITHIN THIS SECTION YOU WILL BE ABLE TO MANAGE THE CONFIG
// OF THIS FILE AND ADJUST ORDER LINKS, ETC...
			
		
	// WHMCS LICENSE CONFIGURATION 

		$bsystem_whmcs_link = _("https://my.licensecube.com/license-process/whmcs_license");
		  //$bsystem_whmcs_demo = _("http://whmcs.com/demo.php");
			$bsystem_whmcs_video = _("http://www.youtube.com/v/Ao3chB9ZWWU?version=3");
			$bsystem_whmcs_video_title = _("WHMCS Billing System - The Billing leader...");
			
	// BLESTA LICENSE CONFIGURATION		
		
		$bsystem_blesta_link = _("https://my.licensecube.com/license-process/blesta_license");
		  //$bsystem_blesta_demo = _("http://demo.blesta.com/");
			$bsystem_blesta_video = _("http://player.vimeo.com/video/18857176?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933");
			$bsystem_blesta_video_title = _("Welcome to the Blesta Billing System");
			
	// PLESK BILLING LICENSE CONFIGURATION		
		
		$bsystem_pbill_link = _("https://my.licensecube.com/license-process/pleskbilling_license");
			//$bsystem_pbill_demo = _("http://www.parallels.com/products/plesk/billing/modules/");
			  $bsystem_pbill_video = _("http://www.youtube.com/v/llLOyVVp2oY?checkout=3");
			  $bsystem_pbill_video_title = _("Plesk Billing License Overview");

	// CLIENTEXEC LICENSE CONFIGURATION	
		
		$bsystem_clien_link = _("https://my.licensecube.com/license-process/clientexec_license");
		  //$bsystem_clien_demo = _("http://www.clientexec.com/demo.html");
			$bsystem_clien_video = _("http://www.youtube.com/v/T5N5ZFRcNnI?version=3");
			$bsystem_clien_video_title = _("ClientExec - See it in action for yourself...");
						
	// WHMAUTOPILOT LICENSE CONFIGURATION		
			
		$bsystem_whmau_link = _("https://my.licensecube.com/license-process/whmautopilot_license");
		  //$bsystem_whmau_demo = _("");
		    $bsystem_whmau_video = _("");
			$bsystem_whmau_video_title = _("");
			
	// BILLMANAGER LICENSE CONFIGURATION
	
		$bsystem_billman_link = _("");
			$bsystem_billman_video = _("http://www.youtube.com/v/IeIRYLetTJ8?version=3");
			$bsystem_billman_video_title = _("BILLmanager makes everything possible...");
			
	// HOSTBILL LICENSE CONFIGURATION
	
		$bsystem_hostbill_link = _("");
			$bsystem_hostbill_video = _("http://www.youtube.com/v/3Qotpjvfc5M?version=3");
			$bsystem_hostbill_video_title  = _("HostBill makes life super-easy...");
			
	//	UBERSMITH LICENSECONFIGURATION
	
		$bsystem_ubersmith_link = _("");
			$bsystem_ubersmith_video = _("http://www.youtube.com/v/9R5_rEXnNZ8?version=3");
			$bsystem_ubersmith_video_title  = _("Let Ubersmith do the heavy lifting...");
			
//*************************************************************************//			
// ADDITIONAL LICENSES - WITHIN THIS SECT YOU WILL BE ABLE TO MANGE THE CONFIG
// OF THIS FILE AND AJUDST THE ORDER LINKS, ETC...		


	// PARALLELS SITEBUILDER LICENSE CONFIGURATION
		
		$additional_sitebuilder_link = _("https://my.licensecube.com/license-process/sitebuilder_license");
	 	  //$additional_sitebuilder_demo  = _("http://www.parallels.com/products/plesk/sitebuilder/demo/");
			$additional_sitebuilder_video = _("http://www.youtube.com/v/ILiNY-K_9R8?version=3");
			$additional_sitebuilder_video_title = _("Parallels SiteBuilder - Makes building sites simple...");
			
	// RVSKINS LICENSE CONFIGURATION		
			
		$additional_rvskins_link = _("https://my.licensecube.com/license-process/rvskins_vps");
		$additional_rvskins_link_dedicated = _("https://my.licensecube.com/license-process/rvskins_dedicated");
		  //$additional_rvskins_demo = _("http://www.rvskin.com/index.php?page=public/demo");
			$additional_rvskins_video = _("http://www.youtube.com/v/Ub1TMkVzIRE?version=3");
			$additional_rvskins_video_title = _("Customize your cPanel/WHM with RVSkins!");
			
	// RVSITEBUILDER LICENSE CONFIGURATION		
			
		$additional_rvbuilder_link = _("https://my.licensecube.com/license-process/rvsitebuilder_vps");
		$additional_rvbuilder_link_dedicated = _("https://my.licensecube.com/license-process/rvsitebuilder_vps");
		  //$additional_rvbuilder_demo = _("");
		    $additional_rvbuilder_video = _("http://www.youtube.com/v/7PG_Tw5ySiQ?version=3");
			$additional_rvbuilder_video_title = _("RVSiteBuilder - Allow your customers to take control...");
			
	// MIVA MERCHANT LICENSE CONFIGURATION		
			
		$additional_miva_link = _("https://my.licensecube.com/license-process/miva_license");
		  //$additional_miva_demo = _("http://www.mivamerchant.com/featured-stores");
			$additional_miva_video = _("http://player.vimeo.com/video/16471489?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff");
			$additional_mvia_video_title = _("Miva Merchant In Action...");
			
	// WHMSONIC LICENSE CONFIGURATION		
			
		$additional_whmsonic_link = _("https://my.licensecube.com/license-process/whmsonic_vps");
		$additional_whmsonic_link_dedicated = _("https://my.licensecube.com/license-process/whmsonic_dedicated");
		  //$additional_whmsonic_demo = _("");
		    $additional_whmsonic_video = _("http://www.youtube.com/v/U0hDXPz8Lg0?version=3");
			$additional_whmsonic_video_title = _("WHMSonic - Start your SHOUTcast streaming service!");
			
	// CLOUDLINUX LICENSE CONFIGURATION - NO DEMOS/VIDEOS AVALIABLE
	
		$cp_cloudlinux_link = _("https://my.licensecube.com/license-process/cloudlinux_license");
		  //$cp_cloudlinux_demo = _("");
		    $cp_cloudlinux_video = _("http://www.youtube.com/v/qSpRbRL2tB0?version=3");
		    $cp_cloudlinux_video_title = _("CloudLinux - The resource limiter...");
			
	// KSPLICE LICENSE CONFIGURATION - NO DEMOS/VIDEOS AVALIABLE
	
		$additional_ksplice_link = _("https://my.licensecube.com/license-process/ksplice_dedicated"); // NO SUPPORT CURRENTLY AVALIABLE FOR VPS
		$additional_ksplice_link_dedicated = _("https://my.licensecube.com/license-process/ksplice_dedicated");
		  //$additional_ksplice_demo = _("");
		  	$additional_ksplice_video = _("");
			$additional_ksplice_video_title = _("");	
			
	// WHMXTRA LICENSE CONFIGURATION		
			
		$additional_whmxtra_link = _("https://my.licensecube.com/license-process/whmxtra_vps");
		$additional_whmxtra_link_dedicated = _("https://my.licensecube.com/license-process/whmxtra_dedicated");
		  //$additional_whmxtra_demo = _("http://whmxtra.com/demo/index.php");
			$additional_whmxtra_video = _("http://www.youtube.com/v/_r8IvSrS1EA?version=3");
			$additional_whmxtra_video_title = _("WHMXtra - The administrator time saver!");
			
	// TRENDY LICENSE CONFIGURATION
	
		$additional_trendy_link  = _("");
			$additional_trendy_video  = _("http://www.youtube.com/v/DIz2yynfLAY?version=3");
			$additional_trendy_video_title  = _("Trendy - Website design just got simple...");
			
	
	// LITESPEED LICENSE CONFIGURATION
	
		$additional_litespeed_link = _("");
			$additional_litespeed_video  = _("http://www.youtube.com/v/IX2EUiaewDw?version=3");
			$additional_litespeed_video_title  = _("LiteSpeed - Take control of your web server...");


/* Web Presence Builder */

$seo_wpb_main = "Buy your Parallels Web Presence License.<br /> Start Creating Picture Perfect Website Designs!";
$seo_wpb_title = "Parallels Web Presence License - Buy Parallels Web Presence License";
$seo_wpb_keywords = "web presence builder parallels web presence builder,wysiwyg editor,web presence builder web designer";
$seo_wpb_description = "Parallels Web Presence Builder is an easy and scalable web application which is helping you to create and manage your website.";


$additional_wpb_title = "Web Presence Builder";
$additional_wpb_keywords = "web presence builder parallels web presence builder,wysiwyg editor,web presence builder web designer";
$additional_wpb_meta_description = "Parallels Web Presence Builder is an easy and scalable web application which is helping you to create and manage your website.";
$additional_wpb= "Parallels Web Presence Builder is an easy and scalable web application which is helping you to create and manage your website.";
$additional_wpb_video = "https://www.youtube.com/v/njlqz0X2SK0?version=3";
$additional_wpb_vide_title = "Parallels Web Presence Builder";

/* / --- */
			
// ** END OF CONFIGURATION FILE **//
			
?>

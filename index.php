<?php
require_once('form-handler.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>JFFC</title>
        <meta property='og:title'  content='Junior Form Function and Class, the biggest student web design conference in Asia'>
        <meta name='twitter:title' content='Junior Form Function and Class, the biggest student web design conference in Asia'>

        <meta property='og:url'  content='http://jffc.asia/'>
        <meta name='twitter:url' content='http://jffc.asia/'>
        <link rel='canonical'       href='http://jffc.asia/'>

        <meta name='description'         content='Get tickets and learn about the magic behind great web design'>
        <meta property='og:description'  content='Get tickets and learn about the magic behind great web design'>
        <meta name='twitter:description' content='Get tickets and learn about the magic behind great web design'>

        <meta property="og:image"  content="/img/meta-img.png">
        <meta name="twitter:image" content="/img/meta-img.png">

        <meta property="og:site_name" content='Junior Form Function and Class, the biggest student web design conference in Asia'>
        <meta property="og:type" content="website">

        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="theme-color" content="#181743">

        <!--Critical CSS-->
        <style type="text/css">
            @font-face {
              font-family: 'Work Sans';
              font-style: normal;
              font-weight: 400;
              src: local(Work Sans), local(WorkSans-Regular), url(https://fonts.gstatic.com/s/worksans/v2/ElUAY9q6T0Ayx4zWzW63VKCWcynf_cDxXwCLxiixG1c.ttf) format('truetype');
            }

            @font-face {
              font-family: 'Work Sans';
              font-style: normal;
              font-weight: 500;
              src: local(Work Sans Medium), local(WorkSans-Medium), url(https://fonts.gstatic.com/s/worksans/v2/Nbre-U_bp6Xktt8cpgwaJInF5uFdDttMLvmWuJdhhgs.ttf) format('truetype');
            }

            @font-face {
              font-family: Athelas;
              src: url(fonts/Athelas-Regular.ttf);
            }

            html {
              font-family: 'Work Sans', sans-serif;
              font-size: 16px;
              font-weight: normal;
              line-height: 1.5;
              background-color: rgb(255, 255, 255);
              color: rgb(102, 102, 102);
              background-position: initial initial;
              background-repeat: initial initial;
            }

            body {
              margin: 0px;
            }

            a {
              background-color: transparent;
            }

            a {
              color: rgb(30, 135, 240);
              text-decoration: none;
            }

            img {
              vertical-align: middle;
            }

            img {
              max-width: 100%;
              height: auto;
              box-sizing: border-box;
            }

            img {
              border-style: none;
            }

            ul {
              margin: 0px 0px 20px;
            }

            * + ul {
              margin-top: 20px;
            }

            h1 {
              margin: 0px 0px 20px;
              font-family: Athelas, serif;
              font-weight: normal;
              color: rgb(51, 51, 51);
              text-transform: none;
            }

            * + h1 {
              margin-top: 40px;
            }

            h1 {
              font-size: 2.625rem;
              line-height: 1.2;
            }

            ul {
              padding-left: 30px;
            }

            hr {
              box-sizing: content-box;
              height: 0px;
              overflow: visible;
              margin: 0px 0px 20px;
              border-width: 1px 0px 0px;
              border-top-style: solid;
              border-top-color: rgb(229, 229, 229);
            }

            * + hr {
              margin-top: 20px;
            }

            nav {
              display: block;
            }

            .uk-button {
              margin: 0px;
              border: none;
              overflow: visible;
              font-family: inherit;
              font-style: inherit;
              font-variant: inherit;
              font-weight: inherit;
              color: inherit;
              text-transform: none;
              display: inline-block;
              box-sizing: border-box;
              padding: 0px 30px;
              vertical-align: middle;
              line-height: 38px;
              text-align: center;
              text-decoration: none;
              font-size: 1.1em;
              width: 180px;
              border-top-left-radius: 40px;
              border-top-right-radius: 40px;
              border-bottom-right-radius: 40px;
              border-bottom-left-radius: 40px;
            }

            .uk-button-primary {
              background-color: rgb(247, 1, 112);
              color: rgb(255, 255, 255);
              border: 1px solid transparent;
            }

            .uk-container {
              box-sizing: content-box;
              max-width: 1200px;
              margin-left: auto;
              margin-right: auto;
              padding-left: 15px;
              padding-right: 15px;
            }

            @media (min-width: 640px) {
              .uk-container {
                padding-left: 30px;
                padding-right: 30px;
              }
            }

            @media (min-width: 960px) {
              .uk-container {
                padding-left: 40px;
                padding-right: 40px;
              }
            }

            .uk-container::before,
            .uk-container::after {
              content: '';
              display: table;
            }

            .uk-container::after {
              clear: both;
            }

            .uk-container > :last-child {
              margin-bottom: 0px;
            }

            .uk-grid-small {
              margin-left: -15px;
            }

            .uk-grid-small > * {
              padding-left: 15px;
            }

            .uk-grid-match > * {
              display: -webkit-flex;
              -webkit-flex-wrap: wrap;
            }

            .uk-grid-match > * > :not([class*="uk-width"]) {
              box-sizing: border-box;
              width: 100%;
              -webkit-flex: 1 1 auto;
            }

            .uk-overlay {
              padding: 30px;
            }

            .uk-overlay > :last-child {
              margin-bottom: 0px;
            }

            .uk-navbar-container:not(.uk-navbar-transparent) {
              background-color: rgb(24, 23, 67);
              background-position: initial initial;
              background-repeat: initial initial;
            }

            .uk-navbar-left,
            .uk-navbar-right,
            .uk-navbar-center {
              display: -webkit-flex;
              -webkit-align-items: center;
            }

            .uk-navbar-right {
              margin-left: auto;
            }

            .uk-navbar-center:not(:only-child) {
              position: absolute;
              top: 50%;
              left: 50%;
              -webkit-transform: translate(-50%, -50%);
              z-index: 990;
            }

            .uk-navbar-center:not(:only-child) .uk-navbar-nav > li > a {
              white-space: nowrap;
            }

            .uk-navbar-nav {
              display: -webkit-flex;
              margin: 0px;
              padding: 0px;
              list-style: none;
            }

            .uk-navbar-left,
            .uk-navbar-right {
              -webkit-flex-wrap: wrap;
            }

            .uk-navbar-nav > li > a,
            .uk-navbar-item,
            .uk-navbar-toggle {
              display: -webkit-flex;
              -webkit-justify-content: center;
              -webkit-align-items: center;
              box-sizing: border-box;
              height: 80px;
              padding: 0px 30px;
              font-size: 1em;
              font-family: 'Work Sans';
              text-decoration: none;
            }

            .uk-navbar-nav > li > a {
              color: rgb(255, 255, 255);
              text-transform: uppercase;
            }

            .uk-navbar-item {
              color: rgb(255, 255, 255);
            }

            .uk-navbar-toggle {
              color: rgb(153, 153, 153);
            }

            .uk-offcanvas-bar {
              position: absolute;
              top: 0px;
              bottom: 0px;
              left: 0px;
              box-sizing: border-box;
              width: 270px;
              padding: 20px;
              background-color: rgb(34, 34, 34);
              overflow-y: auto;
              -webkit-transform: translateX(-100%);
              background-position: initial initial;
              background-repeat: initial initial;
            }

            @media (min-width: 960px) {
              .uk-offcanvas-bar {
                width: 350px;
                padding: 40px;
              }
            }

            .uk-offcanvas-close {
              position: absolute;
              z-index: 1000;
              top: 20px;
              right: 20px;
              padding: 5px;
            }

            [class*="uk-child-width"] > * {
              box-sizing: border-box;
              width: 100%;
            }

            .uk-child-width-1-3 > * {
              width: calc((100% * 1) / 3.001);
            }

            @media (min-width: 640px) {
              .uk-child-width-expand\@s > * {
                width: 1px;
              }
            }

            [class*="uk-width"] {
              box-sizing: border-box;
              width: 100%;
              max-width: 100%;
            }

            @media (min-width: 640px) {
              .uk-width-1-2\@s {
                width: 50%;
              }
            }

            @media (min-width: 960px) {
              .uk-width-1-2\@m {
                width: 50%;
              }

              .uk-width-2-5\@m {
                width: 40%;
              }

              .uk-width-3-5\@m {
                width: 60%;
              }
            }

            .uk-text-left {
              text-align: left !important;
            }

            .uk-text-center {
              text-align: center !important;
            }

            .uk-cover-container {
              overflow: hidden;
              position: relative;
            }

            .uk-logo {
              font-size: 1.5rem;
              font-family: 'Work Sans', sans-serif;
              color: rgb(255, 255, 255);
              text-decoration: none;
            }

            .uk-flex {
              display: -webkit-flex;
            }

            .uk-flex::before,
            .uk-flex::after {
              display: none;
            }

            .uk-flex-left {
              -webkit-justify-content: flex-start;
            }

            .uk-flex-center {
              -webkit-justify-content: center;
            }

            .uk-flex-middle {
              -webkit-align-items: center;
            }

            .uk-position-cover {
              position: absolute;
              top: 0px;
              bottom: 0px;
              left: 0px;
              right: 0px;
            }

            @media (min-width: 640px) {
              .uk-hidden\@s {
                display: none !important;
              }
            }

            @media (min-width: 960px) {
              .uk-hidden\@m {
                display: none !important;
              }
            }

            @media (min-width: 1200px) {
              .uk-hidden\@l {
                display: none !important;
              }
            }

            @media (max-width: 959px) {
              .uk-visible\@m {
                display: none !important;
              }
            }

            @media (max-width: 1199px) {
              .uk-visible\@l {
                display: none !important;
              }
            }

            .uk-offcanvas-bar {
              color: rgba(255, 255, 255, 0.701961);
            }

            .uk-offcanvas-bar a {
              color: rgb(255, 255, 255);
            }

            .footer-hr {
              background-image: linear-gradient(to right, rgb(153, 153, 153), rgba(255, 0, 0, 0));
              background-position: initial initial;
              background-repeat: initial initial;
            }

            @media screen and (max-width: 640px) {
              .footer-subtitle {
                font-size: 0.7em;
              }
            }

            @media screen and (max-width: 640px) {
              .footer-header {
                font-size: 2.3em;
                margin-top: 10px;
              }
            }

            .footer-button-container {
              padding-top: 20px;
            }

            .footer-button-div {
              padding-right: 12px;
            }

            .footer-button-mobile {
              font-size: 1em;
              width: 150px;
              height: auto;
            }

            .footer-social-icon {
              max-width: 48px;
              padding-left: 0px;
              padding-right: 12px;
            }

            @media screen and (min-width: 960px) {
              .footer-social-icon {
                max-width: 72px;
                padding-right: 48px;
                padding-top: 36px;
              }
            }

            .footer-presenter-container {
              padding-top: 120px;
            }

            @media screen and (max-width: 640px) {
              .footer-presenter-container {
                padding-top: 60px;
              }
            }

            .footer-made-by {
              margin-top: 120px;
            }

            @media screen and (max-width: 640px) {
              .footer-made-by {
                font-size: 0.9em;
              }
            }

        </style>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500" rel="preload" as="style" onload="this.rel='stylesheet'">
        <noscript><link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500" rel="stylesheet"></noscript>

        <!--CSS-->
        <link rel="preload" href="css/main.css" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="css/main.css"></noscript>
        <script>!function(e){"use strict";var t=function(t,n,r){function o(e){return i.body?e():void setTimeout(function(){o(e)})}function a(){d.addEventListener&&d.removeEventListener("load",a),d.media=r||"all"}var l,i=e.document,d=i.createElement("link");if(n)l=n;else{var s=(i.body||i.getElementsByTagName("head")[0]).childNodes;l=s[s.length-1]}var u=i.styleSheets;d.rel="stylesheet",d.href=t,d.media="only x",o(function(){l.parentNode.insertBefore(d,n?l:l.nextSibling)});var f=function(e){for(var t=d.href,n=u.length;n--;)if(u[n].href===t)return e();setTimeout(function(){f(e)})};return d.addEventListener&&d.addEventListener("load",a),d.onloadcssdefined=f,f(a),d};"undefined"!=typeof exports?exports.loadCSS=t:e.loadCSS=t}("undefined"!=typeof global?global:this),function(e){if(e.loadCSS){var t=loadCSS.relpreload={};if(t.support=function(){try{return e.document.createElement("link").relList.supports("preload")}catch(e){return!1}},t.poly=function(){for(var t=e.document.getElementsByTagName("link"),n=0;n<t.length;n++){var r=t[n];"preload"===r.rel&&"style"===r.getAttribute("as")&&(e.loadCSS(r.href,r,r.getAttribute("media")),r.rel=null)}},!t.support()){t.poly();var n=e.setInterval(t.poly,300);e.addEventListener&&e.addEventListener("load",function(){t.poly(),e.clearInterval(n)}),e.attachEvent&&e.attachEvent("onload",function(){e.clearInterval(n)})}}}(this);</script>

        <!--Invisible recaptcha script-->
        <script>
            var onloadCallback = function() {
                document.querySelectorAll('.invisible-recaptcha').forEach(function(element) {
                    grecaptcha.render(element.getAttribute('id'),{
                        'sitekey' : '6Le8jx4UAAAAADwdGGaFvaGsTJRCWxAXFpm23ey5',
                        'callback' : onSubmit
                    });
                }, this);
            };
        </script>
        <script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit' async defer></script>

        <!--Icon-->
        <link rel="icon" sizes="192x192" href="img/jffc-logo/icon.png">
    </head>

    <body>
        <nav class="uk-navbar-container" uk-navbar="" uk-sticky="bottom: #offset">
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <!--<a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#mobile-nav" uk-toggle></a>            -->
                    <a class="uk-navbar-item uk-logo uk-visible@l" href="#landing" uk-scroll=""> <img class="nav-logo" src="img/jffc-logo/navbar-logo.png" alt="JFFC 2017"></a>
                    <a class="uk-navbar-item uk-logo uk-hidden@m" href="#landing" uk-scroll=""> <img class="nav-logo-mobile" src="img/jffc-logo/navbar-logo.png" alt="JFFC 2017"></a>
                </ul>
                <ul class="uk-navbar-nav uk-hidden@l uk-visible@m" uk-scrollspy-nav="closest: li; scroll: true; offset: 100">
                    <li><a href="#about-section" uk-scroll=""><span>About</span></a></li>
                    <li><a href="#speakers-section" uk-scroll=""><span>Speakers</span></a></li>
                    <li><a href="#schedule-section" uk-scroll=""><span>Schedule</span></a></li>
                    <li><a href="#venue-section" uk-scroll=""><span>Venue</span></a></li>
                    <li><a href="#faqs-section" uk-scroll=""><span>FAQs</span></a></li>
                    <li><a href="#contact-section" uk-scroll=""><span>Contact us</span></a></li>
                </ul>
            </div>
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav uk-visible@l" uk-scrollspy-nav="closest: li; scroll: true; offset: 100">
                    <li><a href="#about-section" uk-scroll=""><span>About</span></a></li>
                    <li><a href="#speakers-section" uk-scroll=""><span>Speakers</span></a></li>
                    <li><a href="#schedule-section" uk-scroll=""><span>Schedule</span></a></li>
                    <li><a href="#venue-section" uk-scroll=""><span>Venue</span></a></li>
                    <li><a href="#faqs-section" uk-scroll=""><span>FAQs</span></a></li>
                    <li><a href="#contact-section" uk-scroll=""><span>Contact us</span></a></li>
                </ul>
            </div>
            <div class="uk-navbar-right" style="padding-right: 20px">
                <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon="" href="#mobile-nav" uk-toggle=""></a>
                <ul class="uk-navbar-nav">
                    <a class="uk-button uk-button-primary uk-visible@m" href="https://www.eventbrite.com/e/junior-form-function-class-jffc-2017-tickets-32376719640" target="_blank" rel="noopener"><span>Get Tickets</span></a>
                </ul>
            </div>

            <div id="mobile-nav" uk-offcanvas="">
                <div class="uk-offcanvas-bar mobile-offcanvas uk-flex uk-flex-middle">
                    <button class="uk-offcanvas-close" type="button" uk-close=""></button>

                    <div class="uk-container uk-text-center ">
                        <div class="uk-child-width-expand@s uk-grid-small uk-grid-match" uk-grid="">
                            <div class="uk-width-1-1 mobile-nav-container">
                                <a href="#about-section" uk-scroll="">About</a>
                            </div>
                            <div class="uk-width-1-1 mobile-nav-container">
                                <a href="#speakers-section" uk-scroll="">Speakers</a>
                            </div>
                            <div class="uk-width-1-1 mobile-nav-container">
                                <a href="#schedule-section" uk-scroll="">Schedule</a>
                            </div>
                            <div class="uk-width-1-1 mobile-nav-container">
                                <a href="#venue-section" uk-scroll="">Venue</a>
                            </div>
                            <div class="uk-width-1-1 mobile-nav-container">
                                <a href="#faqs-section" uk-scroll="">FAQs</a>
                            </div>
                            <div class="uk-width-1-1 mobile-nav-container">
                                <a href="#contact-section" uk-scroll="">Contact us</a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </nav>

        <!--Cover-->
        <div class="uk-cover-container uk-flex-middle" uk-height-viewport="" uk-grid="">
            <img src="img/landing.png" uk-cover/>
            <div class="uk-position-medium uk-position-cover uk-overlay uk-flex uk-flex-middle uk-margin-large-left" uk-grid >
                <div class="uk-width-3-5@m uk-text-left" style="padding-bottom:100px;">
                    <span class="subtitle">JFFC 2017</span>
                    <h1>
                        Join the biggest student<br>
                        web design conference<br>
                        in Asia
                    </h1>
                    <span class="landing-date">
                        June 10 - 11, 2017
                    </span>
                    <br><br>
                    <a class="uk-button uk-button-primary ghost-button" href="https://www.eventbrite.com/e/junior-form-function-class-jffc-2017-tickets-32376719640" target="_blank" rel="noopener"><span>Get Tickets</span></a>
                </div>
                <div class="uk-width-2-5@m uk-flex uk-flex-cente uk-visible@m" style="padding-bottom:100px;">
                    <div><img src="img/hand.png" alt="JFFC 2017"></div>
                </div>
            </div>
        </div>

        <div class="uk-container main-container">
            <!--About-->
            <div class="uk-flex uk-flex-center">
                <div id="about-section" class="uk-width-1-2@s uk-text-center section-container">
                    <img src="img/jffc-logo/about-logo.png" alt="ABOUT">
                    <h1 class="about-header">
                        Uncover the secrets of
                        great web design
                    </h1>
                    <div class="uk-flex uk-flex-center">
                        <!--<hr class="hr-small uk-visible@s">-->
                        <hr class="hr-large">
                    </div>
                </div>
            </div>
            <div class="uk-flex-middle about-container" uk-grid="">
                <div class="uk-width-3-5@m uk-text-center">
                    <img src="img/conference.png" alt="CONFERENCE" class="about-image">
                </div>
                <div class="uk-width-2-5@m uk-text-left">
                    <h1>Conference</h1>
                    <span class="about-date">June 10</span>
                    <p>
                        Join us for a conference with both local 
                        and international speakers. Get the chance 
                        to learn the best practices and concepts in 
                        web design, branding, user experience 
                        design, and grab the opportunity to have 
                        your biggest questions answered by our 
                        renowned speakers.
                    </p>
                </div>
            </div>
            <div class="uk-flex-middle about-container" uk-grid="">
                <div class="uk-width-3-5@m uk-hidden@m uk-text-center">
                    <img src="img/workshop.png" alt="WORKSHOP" class="image">
                </div>
                <div class="uk-width-2-5@m uk-text-left">
                    <h1>Workshop</h1>
                    <span class="about-date">June 11</span>
                    <p>
                        Keep the spark going and enhance your 
                        web design, branding, and user experience 
                        design skills further by taking part in one 
                        of the Workshops we'll be preparing for 
                        you. All workshops will be facilitated by
                        top design experts.
                    </p>
                </div>
                <div class="uk-width-3-5@m uk-text-center uk-visible@m">
                    <img src="img/workshop.png" alt="WORKSHOP" class="image">
                </div>
            </div>



            <!--Speakers-->
            <div class="uk-flex uk-flex-center">
                <div id="speakers-section" class="uk-width-1-2@s uk-text-center section-container">
                    <span class="subtitle">SPEAKERS</span>
                    <h1>
                        Learn from the industry's
                        greatest wizards
                    </h1>
                </div>
            </div>

            <div class="uk-grid-medium " uk-grid="">
                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/andre.png" alt="Andre Tacuyan">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">Andre<br>Tacuyan</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="http://www.andretacuyan.com/" target="_blank" rel="noopener"><img src="img/social-media-icons/web.png" alt="web"></a></div>
                            <div class="speaker-social-icon"><a href="https://twitter.com/andretacuyan" target="_blank" rel="noopener"><img src="img/social-media-icons/twitter.png" alt="twitter"></a></div>
                            <div class="speaker-social-icon"><a href="https://www.linkedin.com/in/andretacuyan" target="_blank" rel="noopener"><img src="img/social-media-icons/linkedin.png" alt="linkedin"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        User Experience Designer,<br>
                        Playground Global<br>
                        Former User Experience Designer, Google
                    </span>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/niaw.png" alt="Niaw de Leon">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">Niaw<br>de Leon</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="http://niawdeleon.com/" target="_blank" rel="noopener"><img src="img/social-media-icons/web.png" alt="web"></a></div>
                            <div class="speaker-social-icon"><a href="https://twitter.com/niawdeleon" target="_blank" rel="noopener"><img src="img/social-media-icons/twitter.png" alt="twitter"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        Product Strategist, Azeus<br>
                        Co-Founder, Tempest Media
                    </span>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/csj.png" alt="Christian San Jose">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">Christian<br>San Jose</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="http://christiansanjose.com/" target="_blank" rel="noopener"><img src="img/social-media-icons/web.png" alt="web"></a></div>
                            <div class="speaker-social-icon"><a href="https://twitter.com/csj89?lang=en" target="_blank" rel="noopener"><img src="img/social-media-icons/twitter.png" alt="twitter"></a></div>
                            <div class="speaker-social-icon"><a href="https://ph.linkedin.com/in/christiansanjose" target="_blank" rel="noopener"><img src="img/social-media-icons/linkedin.png" alt="linkedin"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        Co-Founder/Managing Director,<br>
                        Make Technology, Inc.<br>
                        Founder, Create.ph
                    </span>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/birdie.png" alt="Birdie Salva">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">Birdie<br>Salva</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="https://www.linkedin.com/in/andretacuyan" target="_blank" rel="noopener"><img src="img/social-media-icons/twitter.png" alt="twitter"></a></div>
                            <div class="speaker-social-icon"><a href="https://ph.linkedin.com/in/birdiesalva" target="_blank" rel="noopener"><img src="img/social-media-icons/linkedin.png" alt="linkedin"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        Co-Founder/Principal<br>
                        Curiosity Design Research
                    </span>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/camille-zapata.jpg" alt="Camille Zapata">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">Camille<br>Zapata</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="https://twitter.com/sosheepster" target="_blank" rel="noopener"><img src="img/social-media-icons/twitter.png" alt="twitter"></a></div>
                            <div class="speaker-social-icon"><a href="https://www.linkedin.com/in/camillezapata" target="_blank" rel="noopener"><img src="img/social-media-icons/linkedin.png" alt="linkedin"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        Product Designer, Huge
                    </span>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/nico.png" alt="Nico Encarnacion">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">Nico<br>Encarnacion</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="https://dribbble.com/nicoencarnacion" target="_blank" rel="noopener"><img src="img/social-media-icons/dribbble.png" alt="dribbble"></a></div>
                            <div class="speaker-social-icon"><a href="https://www.behance.net/nicoencarnacion" target="_blank" rel="noopener"><img src="img/social-media-icons/behance.png" alt="behance"></a></div>
                            <div class="speaker-social-icon"><a href="https://www.linkedin.com/in/nicoencarnacion" target="_blank" rel="noopener"><img src="img/social-media-icons/linkedin.png" alt="linkedin"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        Lead UI/UX Designer, Make
                    </span>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/troy.png" alt="Troy Sitosta">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">Troy<br>Sitosta</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="http://www.designbyshao.com" target="_blank" rel="noopener"><img src="img/social-media-icons/web.png" alt="web"></a></div>
                            <div class="speaker-social-icon"><a href="https://www.behance.net/designbyshao" target="_blank" rel="noopener"><img src="img/social-media-icons/dribbble.png" alt="dribbble"></a></div>
                            <div class="speaker-social-icon"><a href="https://dribbble.com/troysitosta" target="_blank" rel="noopener"><img src="img/social-media-icons/behance.png" alt="behance"></a></div>
                            <div class="speaker-social-icon"><a href="https://ph.linkedin.com/in/troy-sitosta-13586532" target="_blank" rel="noopener"><img src="img/social-media-icons/linkedin.png" alt="linkedin"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        Founder/Creative Director, Shao
                    </span>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/ely.png" alt="Ely Apao">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">Ely<br>Apao</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="https://www.instagram.com/jozzua/" target="_blank" rel="noopener"><img src="img/social-media-icons/web.png" alt="instagram"></a></div>
                            <div class="speaker-social-icon"><a href="https://twitter.com/elyapao" target="_blank" rel="noopener"><img src="img/social-media-icons/twitter.png" alt="twitter"></a></div>
                            <div class="speaker-social-icon"><a href="https://ph.linkedin.com/in/jozzua" target="_blank" rel="noopener"><img src="img/social-media-icons/linkedin.png" alt="linkedin"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        Founder, UX Philippines
                    </span>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-center">
                    <div>
                    <img src="img/speakers/tj.png" alt="TJ Monserrat">
                    <div class="uk-child-width-1-2@s speaker-container" uk-grid="">
                        <h1 class="speaker-header">TJ<br>Monserrat</h1>
                        <div class="uk-flex uk-flex-right@s">
                            <div class="speaker-social-icon"><a href="https://github.com/tjmonsi" target="_blank" rel="noopener"><img src="img/social-media-icons/web.png" alt="web"></a></div>
                            <div class="speaker-social-icon"><a href="https://ph.linkedin.com/in/toni-jan-keith-monserrat-42975341" target="_blank" rel="noopener"><img src="img/social-media-icons/linkedin.png" alt="linkedin"></a></div>
                        </div>
                    </div>
                    <hr class="hr-medium uk-visible@s">
                    <hr class="hr-large uk-hidden@s">
                    <span>
                        Assistant Professor,<br>
                        University of the Philippines-Los Banos
                    </span>
                    </div>
                </div>

            </div>

            <!--Schedule-->
            <div class="uk-flex uk-flex-center">
                <div id="schedule-section" class="uk-width-1-2@s uk-text-center section-container">
                    <span class="subtitle">SCHEDULE</span>
                    <h1>
                        See what's in store for
                        you at JFFC 2017
                    </h1>
                    <div class="uk-flex uk-flex-center">
                        <!--<hr class="hr-small uk-visible@s">-->
                        <hr class="hr-large">
                    </div>
                </div>
            </div>

            <div class="schedule-container" uk="" grid="">
                <div class="uk-width-1-2@m uk-text-left">
                    <div uk-grid="">
                        <div class="uk-width-1-3 uk-flex uk-flex-right">
                            <div>
                                <span class="schedule-day">DAY</span><br>
                                <span class="schedule-day-number">01</span>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h1 class="schedule-header">Conference</h1><br>
                            <span class="schedule-date">June 10, Saturday</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="schedule-container" uk-grid="">
                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-right@s uk-flex-center">
                    <div class="uk-width-2-3" uk-grid="">
                        <div class="uk-flex uk-flex-top">
                            <div class="schedule-timeline">
                                <div class="timeline-period uk-width-1-1">AM</div>
                                <ul>
                                    <li>
                                        <div>
                                            <h4 class="timeline-header">Registration</h4>
                                            <span>7:30 am</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4 class="timeline-header">Andre Tacuyan</h4>
                                            <h4 class="timeline-header">Keynote Speech</h4>
                                            <span>9:00 am</span>    
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4 class="timeline-header">Christian San Jose</h4>
                                            <h4 class="timeline-header">Human-Centered Design</h4>
                                            <span>9:50 am</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4 class="timeline-header">Birdie Salva</h4>
                                            <h4 class="timeline-header">Design Research</h4>
                                            <span>10:40 am</span>
                                        </div>
                                    </li>
                                    <li style="background:transparent">
                                        <div>
                                            <h4 class="timeline-header">Niaw De Leon</h4>
                                            <h4 class="timeline-header">Microcopy</h4>
                                            <span>11:30 am</span>
                                        </div>
                                    </li>                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-right@s uk-flex-center">
                    <div class="uk-width-2-3" uk-grid>
                        <div class="uk-flex uk-flex-top">
                            <div class="schedule-timeline">
                                <div class="timeline-period uk-width-1-1">PM</div>
                                <ul>
                                    <li>
                                        <div>
                                            <h4 class="timeline-header">Lunch Break</h4>
                                            <span>12:20 pm</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4 class="timeline-header">Nico Encarnacion</h4>
                                            <h4 class="timeline-header">Design Systems</h4>
                                            <span>1:30 pm</span>    
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4 class="timeline-header">Camille Zapata</h4>
                                            <h4 class="timeline-header">Future Web Experiences</h4>
                                            <span>2:20 pm</span>
                                        </div>
                                    </li>
                                    <!--<li>
                                        <div>
                                            <h4 class="timeline-header">Speaker 7</h4>
                                            <span>3:10 am</span>
                                        </div>
                                    </li>-->
                                    <li style="background:transparent">
                                        <div>
                                            <h4 class="timeline-header">Closing</h4>
                                            <span>5:15 pm</span>
                                        </div>
                                    </li>                              
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="schedule-container" uk="" grid="">
                <div class="uk-width-1-2@m uk-text-left">
                    <div uk-grid="">
                        <div class="uk-width-1-3 uk-flex uk-flex-right">
                            <div>
                                <span class="schedule-day">DAY</span><br>
                                <span class="schedule-day-number">02</span>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h1 class="schedule-header">Workshop</h1><br>
                            <span class="schedule-date">June 11, Sunday</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="schedule-container uk-flex uk-flex-center" uk-grid="">
                <div class="uk-width-1-2@m uk-text-left uk-flex uk-flex-right@s uk-flex-center">
                    <div class="uk-width-2-3" uk-grid="">
                        <div class="schedule-timeline">
                            <ul>
                                <li>
                                    <div>
                                        <h4 class="timeline-header">Registration</h4>
                                        <span>9:00 am</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h4 class="timeline-header">Workshop Proper</h4>
                                        <span>10:00 am</span>    
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h4 class="timeline-header">Lunch</h4>
                                        <span>12:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h4 class="timeline-header">Workshop Proper</h4>
                                        <span>1:00 pm</span>
                                    </div>
                                </li>
                                <li style="background:transparent">
                                    <div>
                                        <h4 class="timeline-header">Closing</h4>
                                        <span>6:00 pm</span>
                                    </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-2@m uk-child-width-1-1 uk-text-left" uk-grid="">
                    <div class="uk-flex uk-flex-center">
                        <div class="uk-width-2-3@s workshop-box-container">
                            <div class="workshop-box">
                                <h3 class="workshop-header">User Experience</h3>
                                <span class="workshop-subtitle">10:00AM</span>
                                <p class="workshop-description">
                                    Ely Apao will give you a comprehensive primer on user experience 
                                    and how it applies to the creation of products, services and 
                                    delightful experiences whether online or offline.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-center uk-margin-medium-top">
                        <div class="uk-width-2-3@s workshop-box-container">
                            <div class="workshop-box">
                                <h3 class="workshop-header">Firebase</h3>
                                <span class="workshop-subtitle">10:00AM</span>
                                <p class="workshop-description">
                                    TJ Monserrat will help you learn about one of Google's best 
                                    application development platforms—Firebase. He will lead you 
                                    through creating a single page application using 
                                    HTML, CSS and JavaScript.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-center uk-margin-medium-top">
                        <div class="uk-width-2-3@s workshop-box-container">
                            <div class="workshop-box">
                                <h3 class="workshop-header">Branding</h3>
                                <span class="workshop-subtitle">10:00AM</span>
                                <p class="workshop-description">
                                    Troy Sitosta will walk you through the fundamentals of branding 
                                    and identity, from the design research to conceptualization and 
                                    to visual design, and how brand plays a vital role in the web as well.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!--Venue-->
            <div id="venue-section" class="section-container" uk-grid="">
                <!--<div class="uk-width-1-1@m uk-text-center">
                    <span class="subtitle">VENUE</span>
                    <h1>To Be<br>Announced</h1>
                    <div class="uk-flex uk-flex-center">
                        <hr class="hr-small uk-visible@s">
                        <hr class="hr-large uk-hidden@s">
                    </div>
                </div>-->
                <div class="uk-width-2-5@m uk-text-left@m uk-text-center">
                    <span class="subtitle">VENUE</span>
                    <h1>Ateneo de Manila University</h1>
                    <div class="uk-flex uk-flex-left@m uk-flex-center">
                        <hr class="hr-large">
                    </div>
                    <span>
                        Katipunan Ave., Loyola Heights<br>
                        Quezon City
                    </span>
                </div>
                <div class="uk-width-3-5@m uk-text-center">
                    <img src="img/venue.jpg" alt="Ateneo de Manila University"/>
                </div>
            </div>


            <!--Get Tickets-->
            <div id="ticket-section" class="section-container" uk-grid="">
                <div class="uk-width-1-1@m uk-text-center">
                    <span class="subtitle">GET TICKETS</span>
                    <h1>Claim your wand</h1>
                    <div class="uk-flex uk-flex-center">
                        <hr class="hr-small uk-visible@s">
                        <hr class="hr-large uk-hidden@s">
                    </div>
                    <img src="img/price-list.png" alt="PRICE LIST" class="image"><br><br>
                    <a class="uk-button uk-button-primary" href="https://www.eventbrite.com/e/junior-form-function-class-jffc-2017-tickets-32376719640" target="_blank" rel="noopener"><span>Get Tickets</span></a>
                </div>
            </div>


            <!--FAQs-->
            <div class="uk-flex uk-flex-center">
                <div id="faqs-section" class="uk-width-1-2@s uk-text-center section-container">
                    <h1>Frequently Asked Questions</h1>
                    <div class="uk-flex uk-flex-center">
                        <hr class="hr-large">
                    </div>
                </div>
            </div>

            <div class="uk-grid-large" uk-grid="">
                <div class="uk-width-1-2@m uk-text-left">
                    <h2>
                        How many tickets can I order at 
                        time? And do I have to be 
                        student to participate?
                    </h2>
                    <p>
                        You can only order one ticket per registration,
                        and yes you have to be
                        a student to take part in this event.
                    </p>

                    <h2>
                        What's the refund policy?
                    </h2>
                    <p>
                        Letters of cancellation may be sent to
                        tickets@jffc.asia with the subject JFFC2017 -
                        cancellation - [Order#] - [Name]. All
                        cancellations will be acknowledged and the
                        refund process will be coordinated
                        accordingly.
                    </p>
                    <p>FOR BLIND MAGICIAN AND EARLY MAGE:</p>
                    <p>
                        If cancellation is made within thirty(30)
                        working days after payment, a full refund
                        (100%) will be granted. However,
                        cancellations made past the thirty day
                        period will not be refunded.
                    </p>
                    <p>FOR HIGH WIZARD AND DARK SORCERER:</p>
                    <p>
                        If cancellation is made on or before June 2,
                        2017, a full refund (100%) will be granted.
                        However, cancellations made after June 2,
                        2017 will bot be refunded.
                    </p>

                    <h2>
                        Is my registration fee or ticket transferrable?
                    </h2>
                    <p>
                        For transfers, requests will only be
                        acknowledged until June 2, 2017, those sent
                        beyond the date will no longer be
                        recognized and owenership will remain
                        intact. Send ticket transfer requests to
                        tickets@jffc.asia with the subject
                    </p>
                    <p> JFFC2017 - Ticket Transfer - [Order#] - [Name] </p>
                    <p>
                        containing an authorization letter that
                        states the reason for transfer, and the
                        general information of the new owner (follow 
                        format of ticket details). Transfer is
                        approved only when acknowledged by the
                        JFFC committee.
                    </p>

                    <h2>
                        What do I need to bring to the event?
                    </h2>
                    <p>
                        Make sure to have your ticket and a valid ID
                        with you on the day of the event. Laptops are
                        allowed but not required. Do note that there is
                        no guarantee of power outlets for all participants 
                        at the venue. There is internet connection 
                        at the area, but it is recommended that
                        you bring your own pocket wifi if you want to
                        ensure great internet connectivity.
                    </p>
                </div>
                <div class="uk-width-1-2@m uk-text-left">
                    <h2>
                        Are there offline payment options?
                    </h2>
                    <p>
                        Payment can be done through either
                        over-the-counter bank payment for meet-ups
                        int the UST/AdMU area within five (5) or seven
                        (7) days after your registration. We'll let you
                        know of the complete offline payment process 
                        once you register. Make sure to click
                        the "Pay by Cash/At the Door" option!
                    </p>

                    <h2>
                        Do I have to bring my printed
                        ticket to the event?
                    </h2>
                    <p>
                        Best if you print it, but you can opt to just
                        save the PDF on your phone and present it
                        on the day of the event. Please present your
                        ticket with an ID on the day of the event.
                    </p>

                    <h2>
                        Can I update my ticket information?
                    </h2>
                    <p>
                        Yes, of course you can! But please make
                        sure to do it no later than June 2, 2017.
                    </p>

                    <h2>
                        Is it okay if the name on my ticket
                        or registration doesn't match the
                        person who attends?
                    </h2>
                    <p>
                        The ticket or registration must match the
                        name of the person who is going to attend the
                        event. Please make sure to sign up for yourself
                        or, if needed, follow the ticket transfer process.
                    </p>

                    <h2>
                        Is there a dress code for JFFC?
                    </h2>
                    <p>
                        There is no specific dress code for JFFC.
                        Smart casual attire, however, is highly recommended.
                    </p>

                    <h2>
                        How can I contact the organizer
                        with any other questions that I
                        have?
                    </h2>
                    <p>
                        For all concerns, please don't hesitate to send
                        us an email at helpdesk@jffc.asia.
                    </p>
                </div>
            </div>


            <!--Sponsors-->
            <div class="uk-flex uk-flex-center">
                <div class="uk-width-1-2@s uk-text-center section-container">
                    <span class="subtitle">SPONSORS</span>
                    <h1>Thank you for making JFFC 2017 possible</h1>
                    <div class="uk-flex uk-flex-center">
                        <!--<hr class="hr-small uk-visible@s">-->
                        <hr class="hr-large">
                    </div>
                </div>
            </div>

            <div class="uk-grid-medium" uk-grid="" style="margin-bottom: 60px;">
                <div class="uk-width-1-2@m uk-text-center">
                    <div class="uk-child-width-1-1 uk-flex uk-flex-center" uk-grid=""> 
                        <div class="sponsors-logo"><img src="img/sponsor-logos/sketch.png" alt="Sketch"></div>
                        <div class="sponsors-logo"><img src="img/sponsor-logos/invision.png" alt="Invision"></div>
                        <div class="sponsors-logo"><img src="img/sponsor-logos/z.com.png" alt="z.com"></div>
                        <div class="sponsors-logo"><img src="img/sponsor-logos/axure.png" alt="Axure"></div>
                        <div class="sponsors-logo"><img src="img/sponsor-logos/book-apart.png" alt="A Book Apart"></div>
                        <div class="sponsors-logo"><img src="img/sponsor-logos/yellow-prints.png" alt="Yellow Pints"></div>
                        <div class="sponsors-logo"><img src="img/sponsor-logos/bdj.png" alt="Belle de Joure"></div>
                    </div>
                </div>
                <div class="sponsors-second-col uk-width-1-2@m uk-text-center">
                    <div class="uk-child-width-1-1 uk-flex uk-flex-center" uk-grid="">
                        <div class="sponsors-logo"><img src="img/sponsor-logos/comfort-sole.png" alt="Comfort Sole"></div>
                        <div class="sponsors-logo"><img src="img/sponsor-logos/rosenfeld.png" alt="Rosenfeld"></div>
                        <div class="sponsors-logo"><img src="img/sponsor-logos/ctc.jpg" alt="Click the City"></div>
                        <div class="uk-child-width-1-2 sponsors-logo" uk-grid="">
                            <div class="sponsors-logo"><img src="img/sponsor-logos/uber.png" alt="Uber"></div>
                            <div class="sponsors-logo"><img src="img/sponsor-logos/trampoline.png" alt="Trampoline Park"></div>
                            <div class="sponsors-logo"><img src="img/sponsor-logos/when-in-manila.jpg" alt="When in Manila"></div>
                            <div class="sponsors-logo"><img src="img/sponsor-logos/framer.png" alt="Framer"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Footer / Contact Us-->
        <div id="contact-section" class="uk-cover-container section-container contact-container" >
            <img src="img/footer-new.png" alt="" uk-cover="">

            <div class="uk-position-medium uk-position-cover uk-overlay uk-text-left uk-visible@m uk-flex uk-flex-center uk-grid-medium footer-bottom-container" uk-grid="">
                <div class="uk-width-1-2@m">
                    <span class="subtitle footer-subtitle">CONTACT US</span>
                    <h1 class="footer-header">Send an owl</h1>
                    <hr class="footer-hr uk-visible@s" width="25%">
                    <form class="uk-grid-small" id="contact-form" action="form-handler.php" method="post" uk-grid>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label contact-label">Name</label>
                            <input name="name" class="uk-input contact-input input-desktop" type="text" placeholder="">
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label contact-label">Email</label>
                            <input name="email" class="uk-input contact-input input-desktop" type="email" placeholder="">
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label contact-label">Message</label>
                            <textarea name="message" class="uk-textarea contact-input input-desktop" rows="5" placeholder=""></textarea>
                        </div>
                        <div class="uk-width-1-1">
                            <button id="contact-submit" class="g-recaptcha invisible-recaptcha uk-button uk-button-primary contact-send-button">Send</button>
                        </div>
                        <input name="token" type="hidden" value="<?php echo hash_hmac('sha256', '/form-handler.php', $_SESSION['token_key']) ?>">
                    </form>
                    <!--<a class="uk-button uk-button-primary uk-visible@s" href="#contact-modal" uk-toggle><span>Send</span></a>-->
                    <div class="footer-made-by">Passionately made by User Experience Society</div>
                </div>
                <div class="uk-width-1-2@m uk-child-width-1-1">
                    <div class="subtitle">FOLLOW US</div>
                    <div class="uk-flex uk-flex-left">
                        <div class="footer-social-icon"><a href="https://www.facebook.com/JuniorFFCPh/" target="_blank" rel="noopener"><img src="img/social-media-icons/facebook.png" alt="facebook"></a></div>
                        <div class="footer-social-icon"><a href="https://twitter.com/JuniorFFCph" target="_blank" rel="noopener"><img src="img/social-media-icons/twitter.png" alt="twitter"></a></div>
                    </div>
                    <div class="uk-child-width-1-3 footer-presenter-container" uk-grid="">
                        <div><img src="img/presenter-logos/tw.png"></div>
                        <div><img src="img/presenter-logos/uxsoc.png" ></div>
                        <div><img src="img/presenter-logos/pwdo.png"></div>
                    </div>
                </div>
                
            </div>

            <!--Mobile Footer-->
            <div class="uk-position-cover uk-overlay uk-text-left uk-hidden@m" uk-grid="">
                <div class="uk-width-1-2@m">
                    <span class="subtitle footer-subtitle">CONTACT US</span>
                    <h1 class="footer-header">Send an owl</h1>
                    <hr class="footer-hr" width="50%">

                    <form class="uk-grid-small" id="contact-form" action="form-handler.php" method="post" uk-grid>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label contact-label">Name</label>
                            <input name="name" class="uk-input contact-input input-mobile" type="text" placeholder="">
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label contact-label">Email</label>
                            <input name="email" class="uk-input contact-input input-mobile" type="email" placeholder="">
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label contact-label">Message</label>
                            <textarea name="message" class="uk-textarea contact-input input-mobile" rows="4" placeholder=""></textarea>
                        </div>
                        <input name="token" type="hidden" value="<?php echo hash_hmac('sha256', '/form-handler.php', $_SESSION['token_key']) ?>">

                         <div class="footer-button-container" uk-grid="">
                            <div class="footer-button-div">
                                <button id="contact-submit-mobile" class="g-recaptcha invisible-recaptcha uk-button uk-button-primary footer-button-mobile">Send</button>
                            </div>
                            <div class="uk-flex uk-flex-left" uk-grid="">
                                <div class="footer-social-icon"><a href="https://www.facebook.com/JuniorFFCPh/" target="_blank" rel="noopener"><img src="img/social-media-icons/facebook.png" alt="facebook"></a></div>
                                <div class="footer-social-icon"><a href="https://twitter.com/JuniorFFCph" target="_blank" rel="noopener"><img src="img/social-media-icons/twitter.png" alt="twitter"></a></div>
                            </div>
                            <div class="uk-child-width-1-3 footer-presenter-container" uk-grid="">
                                <div><img src="img/presenter-logos/tw.png" class="footer-presenter-logo" alt="Tomasino Web"></div>
                                <div><img src="img/presenter-logos/uxsoc.png" class="footer-presenter-logo" alt="User Experience Society"></div>
                                <div><img src="img/presenter-logos/pwdo.png" class="footer-presenter-logo" alt="Philippine Web Designers Association"></div>
                            </div>
                            <div class="footer-made-by">Passionately made by User Experience Society</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">
        </script>
        <script src="js/uikit.min.js"></script>

        <script>
            function onSubmit(token) {
                var submitBtn = document.getElementById('contact-submit');

                var inputs = []
                if(submitBtn.getAttribute('id') == 'contact-submit-mobile'){
                    inputs = document.querySelectorAll('.input-mobile');
                }
                else{
                    inputs = document.querySelectorAll('.input-desktop');
                }
                
                for(var i = 0; i < inputs.length; i++){
                    if(!inputs[i].value){
                        UIkit.notification('Please provide all necessary details', { 
                            status: 'danger',
                            pos: 'bottom-center'
                        });
                        grecaptcha.reset();
                        return;
                    }
                }
                
                submitBtn.innerHTML = '<div uk-spinner></div>';
                submitBtn.setAttribute('disabled', true);

                $.post('form-handler.php', $('#contact-form').serialize())
                    .done(function(data){
                        var data = JSON.parse(data);
                        if(data.status){
                            UIkit.notification(data.message, { 
                                status: 'success',
                                pos: 'bottom-center'
                            });
                            inputs.forEach(function(element) {
                                element.value = '';
                            }, this);
                        } 
                        else{
                            UIkit.notification(data.message, { 
                                status: 'danger',
                                pos: 'bottom-center'
                            });
                        } 
                    });
                grecaptcha.reset();
                setTimeout(function(){submitBtn.innerHTML = 'Send'}, 900);
            }

        </script>
    </body>

</html>

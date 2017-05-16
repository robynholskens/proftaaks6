<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <title>Weten van Vergeten</title>
        
        <link href="assets/css/global.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/landing.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/info.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        <!-- Landing section -->
        <section id="landing" class="inview offview">
            <video id="bgVid" width="auto" height="auto" src="assets/vid/bg-video.mp4" type="video/mp4" autoplay loop></video>
            <div id="content">
                <div id="app">
                    <img src="assets/img/app-screenshot.png" alt="App Screenshot" />
                </div>
                <div id="text-wrapper">
                    <div id="text">
                        <img id="logo" src="assets/img/logo-slogan.png" alt="Logo met Slogan" />
                        <p>
                            Weten van Vergeten biedt u een uitkomst in een onzekere
                            periode, voor u en uw familieleden.
                        </p>
                        <p>
                            Download nu de app via de Google Play Store
                            of via de Apple App Store.
                        </p>
                    </div>
                    <div id="action-buttons">
                        <a href="#" title="Get it on Google Play"><img src="assets/img/google-play.png" alt="Get it on Google Play" /></a>
                        <a href="#" title="Get it on the App Store"><img src="assets/img/app-store.png" alt="Get it on the App Store"/></a>
                    </div>
                    <div id="more-info">
                        <i class="fa fa-angle-double-down transition"></i> <span>Meer informatie</span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Info section -->
        <section id="info"  class="inview offview">
            <div id="action-buttons-info">
                <a></a>
                <a></a>
            </div>
            <div id="content">
                <div class="content-half">
                    Lorem Ipsum
                </div>
                <div class="content-half white-bg">
                    Lorem ipsum
                </div>
            </div>
        </section>
        
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/js/bg-video.js" type="text/javascript"></script>
        <script src="assets/js/jquery.inview.min.js" type="text/javascript"></script>
        <script src="assets/js/inview.js" type="text/javascript"></script>
    </body>
</html>

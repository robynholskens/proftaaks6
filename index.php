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
        <link href="assets/css/symptoms.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/faq.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        <!-- Landing section -->
        <?php include_once('sections/landing.php'); ?>
        
        <!-- Info section -->
        <?php include_once('sections/info.php'); ?>
        
        <!-- Symptoms section -->
        <?php include_once('sections/symptoms.php'); ?>

        <!-- Help section -->
        <?php include_once('sections/faq.php'); ?>
        
        <!-- Footer -->
        <footer>
            <ul>
                <div class="column">
                    <li><h3>Sitemap</h3></li>
                    <li>Home</li>
                    <li>Info</li>
                    <li>Symptomen</li>
                    <li>Contant</li>
                </div>
            </ul>
        </footer>
        
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/js/bg-video.js" type="text/javascript"></script>
        <script src="assets/js/jquery.inview.min.js" type="text/javascript"></script>
        <script src="assets/js/inview.js" type="text/javascript"></script>
        <script src="assets/js/symptoms.js" type="text/javascript"></script>
    </body>
</html>

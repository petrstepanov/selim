<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SelimLab - Software Development</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/selimlab.css?t=1481398628077">
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body>
        <?php include_once("include/analyticstracking.php") ?>
        <?php require_once('include/navbar.php'); ?>
        <div class="title-banner software font-size-controller">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1><span class="plate">Software Development at SelimLab</span><br/><small><span class="plate">At the most we do C++, Cern ROOT, Qt and Java</span></small></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container font-size-controller">
            <div class="row">
                <div class="col-xs-12">
                    <div class="spacer-2em"></div>
                    <p>As well as we develop new hardware facilities we do software too. Most of our software is open-source and released under the <a href="https://en.wikipedia.org/wiki/GNU_General_Public_License" rel="nofollow" target="_blank">General Public License</a>. Hence our products are accessible to everyone. We host apps at Github which makes it easy to collaborate, fork and access our applications. Below find our public products.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>TLIST Processor</h3>
                            <div class="spacer-1em"></div>
                            <a href="./doppler-annihilation-radiation-software"><img class="third-width svg-shadow" src="img/app-icon-tlistprocessor.svg" alt="TLIST Processor app icon" /></a>
                            <div class="spacer-2em"></div>
                            <p>The app transforms two-dimensional energy data of annihilation radiation into a positron-electron momentum distribution.</p>
                            <div class="spacer-2em"></div>
                            <a class="btn btn-primary btn-lg" href="./doppler-annihilation-radiation-software">Learn More</a>
                            <a class="btn btn-default btn-lg" rel="nofollow "href="https://github.com/petrstepanov/tlist-processor">View on Github</a>
                            <div class="spacer-2em"></div>
                        </div>
                        <div class="col-sm-6">
                            <h3>SW Calculator</h3>
                            <div class="spacer-1em"></div>
                            <a href="./s-w-doppler-parameters-software"><img class="third-width svg-shadow" src="img/app-icon-swcalculator.svg" alt="SW Calculator app icon" /></a>
                            <div class="spacer-2em"></div>
                            <p>The app fits doppler-broadened positron-electron pair momentum distribution spectra. Software calculates the S and W integration parameters.</p>
                            <div class="spacer-2em"></div>
                            <a class="btn btn-primary btn-lg" href="./s-w-doppler-parameters-software">Learn More</a>
                            <a class="btn btn-default btn-lg" rel="nofollow "href="https://github.com/petrstepanov/sw-calculator">View on Github</a>
                            <div class="spacer-2em"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require('include/footer.php');
        ?>
        <?php
            require('include/scripts.php');
        ?>
        <script>
            $('.nav #teaching, #software a').addClass('active');
        </script>
    </body>
</html>

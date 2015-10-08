<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $search = array('mootools', 'caption.js');
    // remove the js files
    foreach($this->_scripts as $key => $script) {
        foreach($search as $findme) {
            if(stristr($key, $findme) !== false) {
                unset($this->_scripts[$key]);
            }
        }
    }
    ?>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/acl-3.0/css/build/global.css">
</head>
<body>
	<div class="topbar">
        <div class="container">
            <div class="col-md-2">
                <img src="<?php echo $this->baseurl ?>/templates/acl-3.0/images/logo.png" />
            </div>
            <div class="col-md-10">
                <!--<div class="col-md-12">
                    <p class="pull-right">847-836-8593 | internet@cp.allcreditlenders.net</p>
                </div>-->
                <div class="col-md-12">
                    <div class="pull-right">
                        <button class="m-btn">Members</button>
                        <button class="a-btn">Apply Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fixed-navbar" class="nav">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div id="navbar" class="collapse navbar-collapse">
            <div class="container">
                <div class="col-md-12">
                    <jdoc:include type="modules" name="nav" />
                </div>
            </div>
        </div>
    </div>
    <div class="container content">
        <div class="row">
            <div class="imgbar">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <img src="<?php echo $this->baseurl ?>/templates/acl-3.0/images/get-cash-now.png" class="img-responsive" width="100%" />
                    </div>
                    <div class="col-md-6">
                        <jdoc:include type="modules" name="top" style="xhtml" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="content">
                    <jdoc:include type="component" />
                </div>
            </div>
            <div class="col-md-4">
                <div id="sidebar">
                    <jdoc:include type="modules" name="sidebar" style="xhtml" />
                </div>
            </div>
        </div>
        <footer>
            <jdoc:include type="modules" name="footer" />
        </footer>
    </div><!-- ./content -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/acl-3.0/js/production.min.js"></script>
</body>
</html>
<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html lang="en">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="nav">
					<jdoc:include type="modules" name="nav" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div id="sidebar">
					<jdoc:include type="modules" name="sidebar" />
				</div>
			</div>
			<div class="col-8">
				<div id="content">
					<jdoc:include type="component" />
				</div>
			</div>
		</div>
		<footer>
			<jdoc:include type="modules" name="footer" />
		</footer>
	</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
	<title><?php echo $page_title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo SWB.'template/printed.style.css'; ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo SWB.'admin/'.$sysconf['admin_template']['css']; ?>" />
	<!-- Html to Excel -->
	<!-- Modified by Drajat Hasan -->
	<script type="text/javascript" src="<?php echo JWB; ?>jquery.js"></script>
	<link href="<?php echo JWB;?>node_modules/tableexport/dist/css/tableexport.css" rel="stylesheet">
	<script src="<?php echo JWB;?>node_modules/file-saverjs/FileSaver.min.js"></script>
	<script src="<?php echo JWB;?>node_modules/tableexport/dist/js/tableexport.js"></script>
	<script src="<?php echo JWB;?>node_modules/blobjs/Blob.min.js"></script>
	<script src="<?php echo JWB;?>node_modules/xlsx/xlsx.js"></script>
	<!-- End -->
	<?php if (isset($css)) { echo $css; } ?>
	<style type="text/css">
		body { 
			background: #FFFFFF; 
		}
	</style>
	<?php if (isset($js)) { echo $js; } ?>
</head>
<body>
	<div id="pageContent">
		<?php echo $content; ?>
	</div>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <?php header('Access-Control-Allow-Origin: *'); ?>
	<meta charset="UTF-8">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<? include "_meta.php";?>
	<title>Mediqueen Clinic</title>
	<!-- Stylesheets -->
	<? include "_css.php";?>
</head>

<body>
	<!-- <div class="container con-width"> -->
		<?php echo $template['body']; ?>
	<!-- </div> -->
	<!-- END CENTENT .container .con-width -->

	<? include "_home_footer.php";?>

    <!--JavaScript -->
    <? include "_js.php";?>
	
</body>

</html>
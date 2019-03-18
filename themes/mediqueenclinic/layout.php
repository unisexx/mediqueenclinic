<!doctype html>
<html lang="en">

<head>
	<base href="<?php echo base_url(); ?>" />
	<meta charset="UTF-8">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mediqueen Clinic</title>
	<!-- Stylesheets -->
	<? include "_css.php";?>
</head>

<body>
	<div class="container con-width">

        <? include "_header.php";?>
        <!-- END row Topmenu and search -->
        <?php echo $template['body']; ?>

	</div>
	<!-- END CENTENT .container .con-width -->

	<? include "_footer.php";?>

    <!--JavaScript -->
	<? include "_js.php";?>
	<?php echo $template['metadata']; ?>
	
</body>

</html>
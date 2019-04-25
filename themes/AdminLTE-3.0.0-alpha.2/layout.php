<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
        <base href="<?php echo base_url(); ?>" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
        <?php header('Access-Control-Allow-Origin: *'); ?>
		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $template['title']; ?></title>
		<? include '_css.php'?>
		<? include '_script.php'?>
		<?php echo $template['metadata']; ?>
	</head>
	<body class="hold-transition sidebar-mini">
		
		<!-- Site wrapper -->
        <div class="wrapper">

        <? include '_header.php'?>

        <? include '_left_sitebar.php'?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            
            <?php echo $template['body']; ?>
            
        </div>
        <!-- /.content-wrapper -->

        <? include '_footer.php'?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
	
	</body>
</html>
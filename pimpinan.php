<?php  
	session_start();
	if ($_SESSION['id_role'] != 2) {
		header("location: index.php");
	}
	else
	{
		if (!isset($_GET['module']) || $_GET['module']==''){
			$_GET['module']='home'; 
		}	
	?>

	<?php 
		include 'module/templates/head.php'; 
		// tag body mulai dari sini
		include 'module/templates/header.php';
		include 'module/pimpinan/templates/leftbar.php';		
		require_once('module/pimpinan/'.$_GET['module'].'.php');
		include 'module/templates/footer.php';
		// end tag body
	?>

<?php } ?> 
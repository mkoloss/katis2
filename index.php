<?php //git-commit ?>

<?php 
	include 'db/db.php'; 
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
	      <div class="container-fluid">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="/katis2">КАТИСЬ</a>

	        </div>
			<p class="navbar-text navbar-right">Интернет-магазин самокатов</p>
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
	          <ul class="nav navbar-nav">
	            <li><a href="/katis2/?action=add">Добавить новый</a></li>
	          </ul>
	        </div><!-- /.navbar-collapse -->

	      </div><!-- /.container-fluid -->
	    </nav>

		<?php 
			$p = isset($_GET['action']) ? $_GET['action'] : '';

		    if ($p==add){
		        include 'pages/add.php';
		    } elseif ($p==edit){
		        include 'pages/edit.php';
		    } elseif ($p==delete){
		        include 'pages/delete.php';
		    }else {
		        include 'pages/list.php';
		    }
		?>
		
	</div>
</body>
</html>
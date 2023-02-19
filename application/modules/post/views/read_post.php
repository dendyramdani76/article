<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title><?= $title;?></title>

		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="<?= base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="<?= base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12">
						<div class="card-panel">
							<i><?= $post->category;?></i><br>
							<strong><?= $post->title;?></strong><br>
							<p><?= $post->content;?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="<?= base_url();?>assets/js/materialize.js"></script>
		<script src="<?= base_url();?>assets/js/init.js"></script>
		<script src="<?= base_url();?>assets/js/post.js"></script>
	</body>
</html>

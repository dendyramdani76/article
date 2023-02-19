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
				<h5 class="center">PREVIEW</h5>
				<div class="row">
					<?php
						foreach($postPublish as $preview):
					?>
					<a class="black-text" href="<?= base_url();?>read-post/<?= $preview->id;?>">
						<div class="col s12 m6 l4">
							<div class="card-panel">
								<i><?= $preview->category;?></i><br>
								<strong><?= $preview->title;?></strong><br>
								<p><?= substr($preview->content, 0, 150);?></p>
							</div>
						</div>
					</a>
					<?php
						endforeach;
					?>
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

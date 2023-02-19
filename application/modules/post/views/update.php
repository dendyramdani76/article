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
				<h5 class="center">Edit</h5>
				<div class="row">
					<div class="col s12">
						<div class="card-panel">
							<form id="form-edit" data-url="<?= base_url();?>post/update/<?= $post->id;?>" data-href="<?= base_url();?>">
								<div class="row no-margin">
									<div class="input-field col s12">
										<input type="text" id="title" value="<?= $post->title;?>" />
										<label for="title">Title</label>
										<span id="title-required" class="red-text"></span>
									</div>
								</div>
								<div class="row no-margin">
									<div class="input-field col s12">
										<textarea class="materialize-textarea" id="content"><?= $post->content;?></textarea>
										<label for="content">Content</label> 
										<span id="content-required" class="red-text"></span>
									</div>
								</div>
								<div class="row no-margin">
									<div class="input-field col s12">
										<input type="text" id="category" value="<?= $post->category;?>" />
										<label for="category">Category</label> 
										<span id="category-required" class="red-text"></span>
									</div>
								</div>
								<div class="row no-margin">
									<div class="input-field col s12 m3 l2">
										<select id="status" class="browser-default">
											<?php
												if($post->status == 'Draft'){
											?>
											<option value="Draft">Draft</option>
											<option value="Publish">Publish</option>
											<option value="Trash">Trash</option>
											<?php
												} elseif($post->status == 'Publish'){
											?>
											<option value="Publish">Publish</option> 
											<option value="Draft">Draft</option>
											<option value="Trash">Trash</option>
											<?php
												} elseif($post->status == 'Trash'){
											?>
											<option value="Trash">Trash</option>
											<option value="Draft">Draft</option>
											<?php
												}
											?>
										</select>
										<label for="status" class="active">Status</label>
									</div>
								</div>
										
								<div class="row no-margin">
									<div class="input-field col s12">
										<a href="<?= base_url();?>" class="btn grey">Cancel</a>
										<a href="#!" id="button-edit" class="btn">submit</a>
									</div>
								</div>
							</form>
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

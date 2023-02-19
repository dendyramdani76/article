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
				<h5 class="center">ALL POSTS</h5>
				<div class="row">
					<div class="col s12">
						<a href="<?= base_url();?>preview" class="btn blue">preview</a>
						<a href="<?= base_url();?>add" class="btn green">add new</i></a>
					</div>
				</div>
				<div class="row card-panel">
					<div class="col s12">
						<ul class="tabs">
							<li class="tab col s4">
								<a href="#publish" class="active">Published</a>
							</li>
							<li class="tab col s4">
								<a href="#draft">Drafts</a>
							</li>
							<li class="tab col s4">
								<a href="#trash">Trashed</a>
							</li>
						</ul>
					</div>
					<div id="publish" class="col s12">
						<table>
							<thead>
								<tr>
									<th>Title</th>
									<th width="200">Category</th>
									<th width="80">Action</th>
								</tr>
							</thead>

							<tbody>
								<?php
									foreach($postPublish as $publish):
								?>
								<tr>
									<td><?= $publish->title;?></td>
									<td><?= $publish->category;?></td>
									<td>
										<a href="<?= base_url();?>edit/<?= $publish->id;?>"> <i class="material-icons orange-text">edit</i></a>
										<a href="<?= base_url();?>delete/<?= $publish->id;?>" <i class="material-icons red-text">delete</i></a>
									</td>
								</tr>
								<?php
									endforeach;
								?>
							</tbody>
						</table>
					</div>
					<div id="draft" class="col s12">
						<table>
							<thead>
								<tr>
									<th>Title</th>
									<th width="200">Category</th>
									<th width="80">Action</th>
								</tr>
							</thead>

							<tbody>
								<?php
									foreach($postDraft as $draft):
								?>
								<tr>
									<td><?= $draft->title;?></td>
									<td><?= $draft->category;?></td>
									<td>
										<a href="<?= base_url();?>edit/<?= $draft->id;?>"> <i class="material-icons orange-text">edit</i></a>
										<a href="<?= base_url();?>delete/<?= $draft->id;?>" <i class="material-icons red-text">delete</i></a>
									</td>
								</tr>
								<?php
									endforeach;
								?>
							</tbody>
						</table>
					</div>
					<div id="trash" class="col s12">
						<table>
							<thead>
								<tr>
									<th>Title</th>
									<th width="200">Category</th>
									<th width="80">Action</th>
								</tr>
							</thead>

							<tbody>
								<?php
									foreach($postTrash as $trash):
								?>
								<tr>
									<td><?= $trash->title;?></td>
									<td><?= $trash->category;?></td>
									<td>
										<a href="<?= base_url();?>edit/<?= $trash->id;?>"> <i class="material-icons orange-text">edit</i></a>
										<a href="<?= base_url();?>delete/<?= $trash->id;?>" <i class="material-icons red-text">delete</i></a>
									</td>
								</tr>
								<?php
									endforeach;
								?>
							</tbody>
						</table>
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

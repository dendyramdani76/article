$(document).on('click', '#button-submit', function(){
	var url = $('#form-add').data('url'); 
	var href = $('#form-add').data('href');
	var title = $('#title').val();
	var content = $('#content').val(); 
	var category = $('#category').val();
	var status = $('#status').val();
	
	var title_min = 20;
	var content_min = 200;
	var category_min = 3;
	
	if(title == ''){
		$('#title-required').text('* Title is required !');
		$('#title').focus();	
	} else if(title.length < title_min){
		$('#title-required').text('* Title minimal 20 characters !');
	} else if(content == ''){
		$('#title-required').text('');
		$('#content-required').text('* Content is required !'); 
		$('#content').focus();	
	} else if(content.length < content_min){
		$('#content-required').text('* Content minimal 200 characters !');
	} else if(category == ''){
		$('#content-required').text('');
		$('#category-required').text('* Category is required !'); 
		$('#category').focus();
	} else if(category.length < category_min){
		$('#category-required').text('* Category minimal 3 characters !');
	} else{
		$.ajax({
			url: url, 
			type: 'POST', 
			data: {title: title, content: content, category: category, status: status}, 
			success: function(response){
				if(response > 0){
					$('#category-required').text('');
					$('#button-submit').attr('disabled', true);
					setTimeout(function() {
						window.location.href = href;
					}, 1000);
				}
			}
		});
	}
});

$(document).on('click', '#button-edit', function(){
	var url = $('#form-edit').data('url'); 
	var href = $('#form-edit').data('href');
	var title = $('#title').val();
	var content = $('#content').val(); 
	var category = $('#category').val();
	var status = $('#status').val();
	
	var title_min = 20;
	var content_min = 200;
	var category_min = 3;
	
	if(title == ''){
		$('#title-required').text('* Title is required !');
		$('#title').focus();	
	} else if(title.length < title_min){
		$('#title-required').text('* Title minimal 20 characters !');
	} else if(content == ''){
		$('#title-required').text('');
		$('#content-required').text('* Content is required !'); 
		$('#content').focus();	
	} else if(content.length < content_min){
		$('#content-required').text('* Content minimal 200 characters !');
	} else if(category == ''){
		$('#content-required').text('');
		$('#category-required').text('* Category is required !'); 
		$('#category').focus();
	} else if(category.length < category_min){
		$('#category-required').text('* Category minimal 3 characters !');
	} else{
		$.ajax({
			url: url, 
			type: 'POST', 
			data: {title: title, content: content, category: category, status: status}, 
			success: function(response){
				if(response > 0){
					$('#category-required').text('');
					$('#button-edit').attr('disabled', true);
					setTimeout(function() {
						window.location.href = href;
					}, 1000);
				}
			}
		});
	}
});

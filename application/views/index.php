<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ajax Exercise</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$(document).ready(function(){
			$.get('/posts/index_html', function(res){
				$('.posts').html(res);
			});

			$('form').submit(function(){
				$.post($(this).attr('action'), $(this).serialize(), function(res){
					$('.posts').html(res);
				});
				return false;
			});
		});
	</script>
	<style>
		.container{
			width: 200px;
			height: 200px;
			border: 3px solid black;
			display: inline-block;
			vertical-align: top;
			padding: 5px;
			margin: 5px;
		}
	</style>
</head>
<body>
	<h1>My Posts:</h1>
	<section class='posts'>
	</section>
	<form action="/posts/create" method="post">
		<p>
			<label>Add a note: </label>
			<textarea name="description"></textarea>
		</p>
		<input type="submit" value="Post It!">
    </form>
</body>
</html>
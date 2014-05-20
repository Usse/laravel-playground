<!DOCTYPE html>
<html>
	<head>
		<!--link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8"-->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$.ajax({
				url : 'api/comments'
			}).done(function(res) {
				var mrk = "";
				$(res).each(function(i, item) {
					mrk += "<li>" + item.author + " - " + item.text + "</li>";
				})
				$("#comments").append(mrk);
			});
		</script>
	</head>
	<body>
		<div class="container">
			<h3>Comments</h3>	
			<ul id="comments" class="jumbotron"></ul>
		</div>
	</body>
</html>
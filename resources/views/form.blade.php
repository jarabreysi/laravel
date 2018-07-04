<!doctype html>
<html>
	<head>
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>  
	</head>
	<body>
		<h1>Person Form!</h1>
		<form action="save" method="POST">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
			<div class="row">
				<div class="input-field col s6">
				<input name="name" placeholder="Name" />
			</div>

			<div class="input-field col s6">
				<i class="material-icons prefix">phone</i>
				<input name="phone" placeholder="Phone" />
			</div>
			</div>
			<input class="btn waves-effect waves-light" type="submit" value="Save" />
		</form>
	</body>
</html>

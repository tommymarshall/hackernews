<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hackernews</title>
	{{ HTML::style('//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css') }}

</head>
<body>

	@yield('content')

	{{ HTML::script('//underscorejs.org/underscore.js') }}
	{{ HTML::script('//code.jquery.com/jquery.js') }}
	{{ HTML::script('//backbonejs.org/backbone-min.js') }}

	{{ HTML::script('js/app.js') }}
</body>
</html>

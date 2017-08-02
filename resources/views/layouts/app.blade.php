<!DOCTYPE html>
<html class="html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>

		<body>
		@include('inc.navbar')
		<div class="container">
		@include('inc.messages')
			@yield('content')
		</div>

		<footer id="footer" class="text-center">
			<p>Copyright &copy; 2017 TodoList</p>
		</footer>
			
		</body>
</html>
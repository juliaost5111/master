<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>
		variable one: {{ $var1 }}
		variable two: {{ $var2 }}

		<p class="{{ $var }}"></p>
        <p style="{{ $var }}"></p>
        <input value="{{ $var }}">

		current timestamp: {{ time() }}
	</body>
</html>

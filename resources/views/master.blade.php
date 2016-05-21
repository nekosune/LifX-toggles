<HTML>
	<HEAD>
		<title> @yield('title') </title>
		<!-- Material Design fonts -->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.min.css">
		<link rel="stylesheet" type="text/css" href="/css/ripples.min.css">
</HEAD>
<BODY>
@include('shared.navbar')
@yield('content')
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
</BODY>
</HTML>

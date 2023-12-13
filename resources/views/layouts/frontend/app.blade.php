<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('assets/frontend/img/favicon.ico') }}">
	<title>Mediumish - A Medium style template by WowThemes.net</title>
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

    @stack('css')
</head>
<body>
    @include('layouts.frontend.partial.header')
	
    @yield('content')

    @include('layouts.frontend.partial.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
		integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
		crossorigin="anonymous"></script>
	<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/ie10-viewport-bug-workaround.js') }}"></script>
    @stack('js')
</body>
</html>

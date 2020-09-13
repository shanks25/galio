<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title','Home')</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Font-Awesome CSS -->
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- helper class css -->
	<link href="{{asset('assets/css/helper.min.css')}}" rel="stylesheet">
	<!-- Plugins CSS -->
	<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
	<!-- Main Style CSS -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/skin-default.css')}}" rel="stylesheet" id="galio-skin">
	<link rel="stylesheet" type="text/css" href="{{asset('toaster/toastr.css')}}" />
	<script>
		var base_url = "{{url('/')}}";
	</script>
</head>
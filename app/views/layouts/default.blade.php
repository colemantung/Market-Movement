
@include('includes.prehead')

<head>
	@include('includes.head')
	@yield('link')
</head>

<body>
	@include('includes.header')

	@include('includes.container')

	@include('includes.footer')

	@include('includes.footerjs')

	@yield('script')

</body>
</html>

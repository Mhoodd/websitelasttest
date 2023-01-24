<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
	<title>@yield('title','') | OliAdmin sss</title>
	<!-- initiate head with meta tags, css and script -->
	@include('new.admin.include.head')

</head>
<body id="app" >
    <div class="wrapper">
    	<!-- initiate header-->
    	@include('new.admin.include.header')
    	<div class="page-wrap">
	    	<!-- initiate sidebar-->
	    	@include('new.admin.include.sidebar')

	    	<div class="main-content">
	    		<!-- yeild contents here -->
	    		@yield('content')
	    	</div>


	    	<!-- initiate chat section-->
	    	@include('new.admin.include.chat')


	    	<!-- initiate footer section-->
	    	@include('new.admin.include.footer')

    	</div>  

    </div>
    
	<!-- initiate modal menu section-->
	@include('new.admin.include.modalmenu')

	<!-- initiate scripts-->
	@include('new.admin.include.script')	
</body>
</html>
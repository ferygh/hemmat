<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<link href="{{asset('style.css')}}" rel="stylesheet" type="text/css" />
    <script language="javascript" src={{asset('js/jquery-2.1.1.min.js')}}></script>
</head>
@yield('head')
<body>

<!-- screen -->
<section class="screen">
	<!-- header -->
    <header class="header">
    	<div id="logo"> </div>
    </header>
    <nav id="topnav">
        @include('navbar')
    </nav>
    <!-- /header -->
    <div class="base">
		@yield('body')
        @yield('search')
	</div> 
</section>
<!-- /screen -->
<footer class="copyright">
	<p>
     سرویسی رایگان مخصوص خیریه همت <br />
	نسخه نرم افزار: 1.1<br />
     </p>
</footer>

</body>
</html>
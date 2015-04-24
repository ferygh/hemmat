<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{asset('js/jquery-1.5.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scriptbreaker-multiple-accordion-1.js')}}"></script>
    <script language="JavaScript">

        $(document).ready(function() {
            $(".topnav").accordion({
                accordion:false,
                speed: 500,
                closedSign: '',
                openedSign: ''
            });
        });

    </script>
    @yield('head')
</head>

<body>

<section id="container">

    <header id="header"> 	</header>
    <!---- basic bg ---->
    <div id="basicbg">

        <nav id="topnav">
            @include('navbar')
        </nav>

        <!--- right sidebar --->
        <section id="right">

            @yield('right')

        </section>
        <!-- left section -->

        <section id="left">
            @yield('left')
        </section>




    </div>
    <!---- /basic bg ---->

    <div id="basicbt"> </div>
    <center>
        <font size="-5" color="#999999"> حقوق برای خیریه همت محفوظ است. &copy;<br />
            با فایرفاکس کار کنید </font>
    </center>
</section>



</body>



</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Business website</title>
<meta name="description" content="Business website">
<meta name="keywords" content="business, website">
    @section('styles')
<link href="{{asset("/media/css/style.css")}}" rel="stylesheet" type="text/css">
        @show
</head>
<body>
<div id="page">
    <div id="topwrap">
	<div id="sidebar">
    	<div id="tmenu">
        	<ul>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Email Us</a></li>
            </ul>
        </div>
        <div id="company_name">"Квазар-Техно"</div>
        <div id="menu">

            <ul>
                @foreach($links as $key=>$value)<!--закидываем в цикл ссылки-->

            	<li><a href="{{asset($value)}}">{{$key}}</a></li>

                    @endforeach
        	</ul>


        </div></div>
<div id="header"></div>
    </div>
    	<div id="contentwrap">
        @yield('content')
    </div>
<div id="footer">
	<div id="bottom_menu"><a href="About">Здесь могла быть ваша реклама</a></div>
    <div id="bottom_addr">© 2015 SAM. All Rights Reserved</div>
</div>
</div>
</body>
</html>
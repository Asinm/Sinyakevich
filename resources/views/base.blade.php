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
        <div id="company_name">CompanyName</div>
        <div id="menu">
        	<ul>
            	<li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Instructors</a></li>
                <li><a href="#">Our Clients</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contacts</a></li>
        	</ul>
        </div></div>
<div id="header"></div>
    </div>
    	<div id="contentwrap">
        @yield('content')
    </div>
<div id="footer">
	<div id="bottom_menu"><a href="#">Home Page</a> |  <a href="#">About Us</a> |  <a href="#">Our Clients</a> |  <a href="#">Testimonials</a>  |  <a href="#">Price List</a> |  <a href="#">Contact Details</a></div>
    <div id="bottom_addr">© 2010 Basketball club. All Rights Reserved</div>
</div>
</div>
<div style="position:absolute;left:-3072px;top:0" align="center"><a href="http://smarttop.info">Рейтинг сайтов</a> <a href="http://ds-webevent.com">Шаблоны сайтов</a></div>
</body>
</html>
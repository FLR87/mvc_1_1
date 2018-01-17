<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/template/css/style.css" />
    <link rel="stylesheet" href="/template/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/template/css/default/default.css" type="text/css" media="screen" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="/template/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Source X SRT</title>
</head>
<body id="home">
<div id="wrapper">

    <!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
    <header>
        <div id="logo">
            <h1>MVC Test site<span id="iisrt"><span id="ii">II</span>  <span id="srt">FLR's</span></span></h1>
            <div id="tagline">
                <h2>Hello world!</h2>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="/" id="homenav">News</a></li>
                <li><a href="blog.html" id="blognav">Blog</a></li>
                <li><a href="fullwidth.html" id="fullwidthnav">Full width</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </header>

    <!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="/template/images/slide1.jpg" alt="" />
            <a href="http://geeksband.com"><img src="/template/images/slide2.jpg" alt="" title="This is an example of a caption with a link" /></a>
            <img src="/template/images/slide3.jpg" alt="" title="This is an example of a caption" />
            <img src="/template/images/slide4.jpg" alt="" />
        </div>
    </div>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({pauseTime: 6000,});
        });
    </script>

<?= $this->content ?>

    <!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
    <footer>
        <p>Copyright &copy 2013 Source X by Youssef Nassim and Zakariya Lhamri, design from <a href="http://geeksband.com">Geeksband.com</a>. All Rights Reserved.</p>
    </footer>
</div>
</body>
</html>
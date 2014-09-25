<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://git-scm.com/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <meta name="description" content="Description of your site goes here">
    <meta name="keywords" content="keyword1, keyword2, keyword3">
    <title>Laravel Demo Site...</title>
    <!-- Bootstrap -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('css/style.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<style>
.footer {
line-height: 69px;
background-image: url(http://localhost/costprize_blog/public/img/footer.jpg);
background-repeat: no-repeat;
background-position: left top;
width: 952px;
height: 69px;
float: left;
padding: 23px 24px 0px 24px;
margin-left: 180px;
}
</style>
<div class="page-in">
    <div class="page">
        <div class="main">
            <div class="header">
                <div class="header-top">
                    <h1>Article <span>World</span></h1>
                </div>
                <div class="header-bottom">
                    <h2>Learn And Explore Yourself...</h2>
                </div>
                </div>
            </div>
        </div>
    </div>

@_yield('content')
<div class="footer">
    <p>&copy; Copyright 2014. Designed by <a target="_blank"
                                             href="http://www.costprize.com">Costprize.com</a>
    </p>
    <ul>
        <li style="border-left: medium none;"><a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="#"><span>About&nbsp;us</span></a></li>
        <li><a href="#"><span>Contact</span></a></li>
    </ul>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{URL::base()}}/js/register.js"></script>
<script src="{{URL::base()}}/js/resetpassword.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>

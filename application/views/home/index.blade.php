<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laravel Demo Site...</title>
    <link href='http://git-scm.com/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <meta name="description" content="Description of your site goes here">
    <meta name="keywords" content="keyword1, keyword2, keyword3">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<style>
    .mainmenu, .contact {
        width: 310px;
        float: right;
        margin-right: 180px;
        margin-top: 4px;
        margin-right: -4px;
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
                <div class="topmenu">
                    <ul>
                        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
                            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a>
                        </li>
                        <li><a href="#"><span>About&nbsp;us</span></a></li>

                        <li><a href="#"><span>Contact</span></a></li>
                        <li><a href="{{ URL::to('login') }}"><span>Login</span></a></li>
                        <li><a href="{{URL::to('register') }}"><span>Register</span></a>/li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="content-left">
                    <div class="row1">
                        <h1 class="title">Welcome To <span>Our Site</span></h1>

                        <p><strong>Lorem Ipsum is simply dummy text</strong> of the printing
                            and typesetting industry. Lorem Ipsum has been the indusstandard dummy
                            text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambleto make a type specimen book.</p>

                        <p>&nbsp;</p>

                        <p>It has survived not only five centuries, but also the leap into
                            electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release </p>
                        <ul class="list1">
                            <li>of Letraset sheets containing</li>
                            <li>Lorem Ipsum passages,</li>
                            <li>and more recently with desktop</li>
                        </ul>
                        <p>&nbsp;<br>
                            <strong>Lorem Ipsum is simply dummy text</strong> of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it.<br>
                            <br>
                        </p>
                    </div>
                    <div class="row2">
                        <h2 class="subtitle">About <span>Us</span></h2>


                        <p>&nbsp;</p>

                        <p><strong>Lorem Ipsum is simply dummy text</strong> of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>

                        <p>&nbsp;</p>

                        <p align="right"><a href="#" class="more">Read More</a></p>
                    </div>
                </div>
                <div class="content-right">
                    <div class="mainmenu">
                        <h2 class="sidebar1">Main Menu</h2>
                        <ul>
                            <li><a href="{{ URL::to('description') }}">Isn’t technology wonderful..</a></li>
                            <li><a href="{{ URL::to('description') }}">April left as a solar flare</a></li>
                            <li><a href="{{ URL::to('description') }}">Never Say Never</a></li>
                            <li><a href="{{ URL::to('description') }}">35: A Milestone Birthday</a></li>
                            <li><a href="{{ URL::to('description') }}">Gettysburg’s "Oldest" Family</a></li>
                            <li><a href="{{ URL::to('description') }}">The History of Harney</a></li>
                            <li><a href="{{ URL::to('description') }}">Forest in the Winter</a></li>
                            <li><a href="{{ URL::to('description') }}">Managing the Holiday Blues</a></li>
                            <li><a href="{{ URL::to('description') }}">Dreams Come in Three Phase</a></li>
                            <li><a href="{{ URL::to('description') }}">We Are Once in a Lifetime</a></li>
                        </ul>
                    </div>
                    <div class="contact">
                        <h2 class="sidebar2">Contact</h2>

                        <div class="contact-detail">
                            <p class="green"><strong>Article World</strong></p>

                            Costprize Online India Ltd.<br>
                            6/4, Legacy,
                            Convent Road<br>
                            Richmond Town,
                            Bangalore - 560025 </p>
                            <p><strong>Email :</strong><a href="mailto:feedback@startbootstrap.com">support@costprize.com</a><br>
                                (For all issues that require the aid of our customer support.)</p>
                            <p><strong>Email :</strong> <a href="mailto:feedback@startbootstrap.com">corporateinquiry@costprize.com</a><br>
                                (For all inquiries pertaining to vendor collaboration.)</p>


                            <!--                            <p><strong>E-mail :</strong> &nbsp;&nbsp;&nbsp;when an unknown printer-->
<!--                                took a</p>-->
<!---->
                            <p><strong>Phone :</strong> &nbsp;&nbsp;&nbsp; 080-67169666<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p>&copy; Copyright 2014. Designed by <a target="_blank"
                                                         href="http://www.Costprize.com">Costprize.com</a>
                </p>
                <ul>
                    <li style="border-left: medium none;"><a
                            href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
                    <li><a href="#"><span>About&nbsp;us</span></a></li>
                    <li><a href="#"><span>Contact</span></a></li>
                </ul>
            </div>
            <!--DO NOT Remove The Footer Links-->
            <!--Designed by--><a href="http://www.htmltemplates.net">
                <img src="images/footnote.gif" class="copyright" alt="http://www.htmltemplates.net"></a>
            <!--DO NOT Remove The Footer Links-->
        </div>
    </div>
</div>
</body>
</html>